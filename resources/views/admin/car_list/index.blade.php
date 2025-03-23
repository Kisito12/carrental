<x-app-layout>
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <!-- Breadcrumb Start -->
        <div x-data="{ pageName: `Car Listing` }">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>

                <nav>
                    <ol class="flex items-center gap-1.5">
                        <li>
                            <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                                href="index.html">
                                Home
                                <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke=""
                                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <div class="space-y-5 sm:space-y-6">
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-center">
                    <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                        Car list
                    </h3>
                    <button onclick="openModal('add')"
                        class="flex items-center justify-center w-fit px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600">
                        List A Car
                    </button>
                    <!-- Add Car -->
                    <div id="carModal"
                        class="fixed z-99999 inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                        <!-- Modal Content -->
                        <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
                            <h2 id="modalTitle" class="text-xl font-bold mb-4">Add a Car</h2>

                            <form id="carForm" action="{{ route('admin.cars.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="car_id" name="car_id">
                                <!-- Car Name -->
                                <div class="mb-4">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Car Name<span class="text-error-500">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" placeholder="Toyota Corolla"
                                        required
                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                                <!-- Make -->
                                <div class="mb-4">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Make<span class="text-error-500">*</span>
                                    </label>
                                    <input type="text" id="make" name="make" placeholder="make" required
                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                    <x-input-error :messages="$errors->get('make')" class="mt-2" />

                                </div>
                                <!-- Brand -->
                                <div class="mb-4">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Brand<span class="text-error-500">*</span>
                                    </label>
                                    <input type="text" id="brand" name="brand" placeholder="Brand" required
                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                    <x-input-error :messages="$errors->get('brand')" class="mt-2" />

                                </div>
                                <!-- Year -->
                                <div class="mb-4">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Year<span class="text-error-500">*</span>
                                    </label>
                                    <input type="number" id="year" name="year" placeholder="year" required
                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                    <x-input-error :messages="$errors->get('year')" class="mt-2" />

                                </div>
                                <!-- Price Per Day -->
                                <div class="mb-4">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Price Per Day (FCFA)<span class="text-error-500">*</span>
                                    </label>
                                    <input type="number" id="price_per_day" name="price_per_day"
                                        placeholder="price_per_day" required
                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                    <x-input-error :messages="$errors->get('price_per_day')" class="mt-2" />

                                </div>
                                <!-- Image Upload -->
                                <div class="mb-4">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                        Car Image<span class="text-error-500">*</span>
                                    </label>
                                    <input type="file" id="image" name="image" placeholder="image"
                                        accept="image/*"
                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />

                                </div>

                                <!-- Submit & Close Buttons -->
                                <div class="flex justify-between">
                                    <button type="button" onclick="closeModal()"
                                        class="px-4 py-2 bg-gray-400 text-white rounded">Cancel</button>
                                    <button type="submit" id="modalSubmitBtn"
                                        class="flex items-center justify-center w-fit px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600">Add
                                        Car</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6">
                    <!-- ====== Table Six Start -->
                    <div
                        class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="max-w-full overflow-x-auto">
                            <table class="min-w-full">
                                <!-- table header start -->
                                <thead>
                                    <tr class="border-b border-gray-100 dark:border-gray-800">
                                        <th class="px-5 py-3 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Label
                                                </p>
                                            </div>
                                        </th>
                                        <th class="px-5 py-3 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Make
                                                </p>
                                            </div>
                                        </th>
                                        <th class="px-5 py-3 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Brand
                                                </p>
                                            </div>
                                        </th>
                                        <th class="px-5 py-3 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Price per day
                                                </p>
                                            </div>
                                        </th>
                                        <th class="px-5 py-3 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Status
                                                </p>
                                            </div>
                                        </th>
                                        <th class="px-5 py-3 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Action
                                                </p>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- table header end -->
                                <!-- table body start -->
                                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td class="px-5 py-4 sm:px-6">
                                                <div class="flex items-center">
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-10 h-10 overflow-hidden rounded-full">
                                                            <img src="{{ asset('storage/' . $car->image) }}"
                                                                class="object-cover w-full h-full"
                                                                alt="{{ $car->name }}" />
                                                        </div>

                                                        <div>
                                                            <span
                                                                class="block font-medium text-gray-800 text-theme-sm dark:text-white/90">
                                                                {{ $car->name }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 sm:px-6">
                                                <div class="flex items-center">
                                                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                        {{ $car->make }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 sm:px-6">
                                                <div class="flex items-center">
                                                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                        {{ $car->brand }} - {{ $car->year }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 sm:px-6">

                                                <div class="flex items-center">
                                                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                        {{ number_format($car->price_per_day, 2) }} FCFA/day
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 sm:px-6">
                                                <div class="flex items-center">
                                                    <p
                                                        class="rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-500">
                                                        Active
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-5 py-4 sm:px-6">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-gray-500 text-theme-sm dark:text-gray-400 flex gap-4">
                                                        <button
                                                            onclick="openModal('edit', {{ json_encode([
                                                                'id' => $car->id,
                                                                'name' => $car->name,
                                                                'make' => $car->make,
                                                                'brand' => $car->brand,
                                                                'year' => $car->year,
                                                                'price_per_day' => $car->price_per_day,
                                                            ]) }})"
                                                            class="flex items-center justify-center w-fit px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-green-500 shadow-theme-xs hover:bg-green-600">
                                                            Edit
                                                        </button>
                                                        <button
                                                            onclick="openDeleteModal({{ json_encode([
                                                                'id' => $car->id,
                                                            ]) }})"
                                                            class="flex items-center justify-center w-fit px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-red-500 shadow-theme-xs hover:bg-red-600">
                                                            Delete
                                                        </button>
                                                    </p>

                                                    <div id="deleteModal"
                                                        class="fixed z-99999 inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                                                        <div
                                                            class="bg-white w-96 p-6 rounded-lg shadow-lg text-center">
                                                            <h2 class="text-xl font-bold mb-4">Are you sure?</h2>
                                                            <p class="text-gray-600 mb-4">This action cannot be undone.
                                                            </p>

                                                            <form id="deleteForm"
                                                                action="{{ route('admin.cars.destroy', $car->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <div class="flex justify-between">
                                                                    <button type="button"
                                                                        onclick="closeDeleteModal()"
                                                                        class="px-4 py-2 bg-gray-400 text-white rounded">Cancel</button>
                                                                    <button type="submit"
                                                                        class="px-4 py-2 bg-red-600 text-white rounded">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ====== Table Six End -->
            </div>
        </div>
    </div>
    </div>
    <script>
        function openModal(mode, car = null) {
            const modalTitle = document.getElementById("modalTitle");
            const modalSubmitBtn = document.getElementById("modalSubmitBtn");
            const carForm = document.getElementById("carForm");

            if (mode === "edit") {
                modalTitle.innerText = "Edit Car";
                modalSubmitBtn.innerText = "Update Car";
                carForm.action = "{{ route('admin.cars.update', ':id') }}".replace(':id', car.id);

                // Add hidden input for PUT method
                let methodInput = document.createElement("input");
                methodInput.type = "hidden";
                methodInput.name = "_method";
                methodInput.value = "PUT";
                carForm.appendChild(methodInput);

                // Fill the form with existing car data
                document.getElementById("car_id").value = car.id;
                document.getElementById("name").value = car.name;
                document.getElementById("make").value = car.make;
                document.getElementById("brand").value = car.brand;
                document.getElementById("year").value = car.year;
                document.getElementById("price_per_day").value = car.price_per_day;
            } else {
                modalTitle.innerText = "Add a Car";
                modalSubmitBtn.innerText = "Add Car";
                carForm.action = "{{ route('admin.cars.store') }}";

                // Clear form fields
                document.getElementById("car_id").value = "";
                document.getElementById("name").value = "";
                document.getElementById("make").value = "";
                document.getElementById("brand").value = "";
                document.getElementById("year").value = "";
                document.getElementById("price_per_day").value = "";
            }

            document.getElementById("carModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("carModal").classList.add("hidden");
        }
    </script>
    <script>
        function openDeleteModal(carId) {
            document.getElementById("deleteModal").classList.remove("hidden");
        }

        function closeDeleteModal() {
            document.getElementById("deleteModal").classList.add("hidden");
        }
    </script>


</x-app-layout>
