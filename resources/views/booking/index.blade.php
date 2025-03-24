<x-web-layout>
    <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
        <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">
            <div class="flex flex-col items-center w-full gap-6 xl:flex-row">
                <div class="w-20 h-20 overflow-hidden border border-gray-200 object-contain rounded-full dark:border-gray-800">
                    <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image" class="flex object-contain " />
                </div>
                <div class="order-3 xl:order-2">
                    <h4 class="mb-2 text-lg font-semibold text-center text-gray-800 dark:text-white/90 xl:text-left">
                        {{ $car->name }}
                    </h4>
                    <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            {{ $car->brand }}
                        </p>
                        <div class="hidden h-3.5 w-px bg-gray-300 dark:bg-gray-700 xl:block"></div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            {{ number_format($car->price_per_day, 2) }} FCFA/day
                        </p>
                    </div>
                </div>
            </div>

            <button id="total-price-btn"
                class="flex w-full items-center justify-center gap-2 rounded-full border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 lg:inline-flex lg:w-auto">
                Total Price: <span id="total-price">0</span> FCFA
            </button>
        </div>
    </div>

    <!-- Booking Form -->
    <form action="{{ route('bookings.store', $car->id) }}" method="POST">
        @csrf
        <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-6">
                        Booking Period
                    </h4>

                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                        <div class="grid grid-cols-1">
                            <!-- Pick-up Date -->
                            <div class="sm:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                    Pick-up Date:<span class="text-error-500">*</span>
                                </label>
                                <input type="date" id="start_date" name="start_date" required
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <!-- Drop-off Date -->
                            <div class="sm:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                    Drop-off Date:<span class="text-error-500">*</span>
                                </label>
                                <input type="date" id="end_date" name="end_date" required
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="flex items-center justify-center w-fit px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600">
                    Book Now
                </button>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const startDateInput = document.getElementById("start_date");
            const endDateInput = document.getElementById("end_date");
            const totalPriceSpan = document.getElementById("total-price");
            const pricePerDay = {{ $car->price_per_day }};

            function calculateTotalPrice() {
                const startDate = new Date(startDateInput.value);
                const endDate = new Date(endDateInput.value);

                if (!isNaN(startDate) && !isNaN(endDate) && endDate > startDate) {
                    const days = (endDate - startDate) / (1000 * 60 * 60 * 24);
                    const totalPrice = days * pricePerDay;
                    totalPriceSpan.textContent = totalPrice.toLocaleString();
                } else {
                    totalPriceSpan.textContent = "0";
                }
            }

            startDateInput.addEventListener("change", calculateTotalPrice);
            endDateInput.addEventListener("change", calculateTotalPrice);
        });
    </script>
</x-web-layout>
