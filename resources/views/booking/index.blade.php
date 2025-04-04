<x-web-layout>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:pt-32 md:pb-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Book {{ $car->name }}</h2>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                                <img class="h-[400px] w-full dark:hidden" src="{{ asset('storage/' . $car->image) }}"
                                    alt="" />
                                <img class="w-full hidden dark:block" src="{{ asset('storage/' . $car->image) }}"
                                    alt="" />
                            </div>
                            <div
                                class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 pt-8 md:space-y-0">
                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                    <div class="text-end md:order-4 md:w-32">
                                        <p class="text-base font-bold text-gray-900 dark:text-white">
                                            {{ number_format($car->price_per_day, 0) }} FCFA/day</p>
                                    </div>
                                </div>

                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <a href="#"
                                        class="text-base font-medium text-gray-900 hover:underline dark:text-white">{{ $car->name }}
                                        - {{ $car->brand }} ({{ $car->year }})</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Price Per Day
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">
                                        {{ number_format($car->price_per_day, 0) }} FCFA</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Discount</dt>
                                    <dd class="text-base font-medium text-green-600">-0 FCFA</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd id="total-price-btn" class="text-base font-bold text-gray-900 dark:text-white">
                                    <span id="total-price">0</span> FCFA
                                </dd>
                            </dl>
                        </div>

                    </div>

                    <div
                        class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <form class="space-y-4" action="{{ route('bookings.store', $car->id) }}" method="POST">
                            @csrf
                            <div>
                                <label for="voucher"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Booking Period
                                </label>
                                <input type="text" id="booking_range" name="booking_range"
                                    class="block w-full rounded-lg booking_range border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-brand-500 focus:ring-brand-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-brand-500 dark:focus:ring-brand-500"
                                    placeholder="Select date range" data-class="bg-white shadow-lg rounded-lg p-4" />

                            </div>
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-lg bg-brand-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-brand-800 focus:outline-none focus:ring-4 focus:ring-brand-300 dark:bg-brand-600 dark:hover:bg-brand-700 dark:focus:ring-brand-800">Proceed
                                with Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
        <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">
            <div class="flex flex-col items-center w-full gap-6 xl:flex-row">
                <div
                    class="w-20 h-20 overflow-hidden border border-gray-200 object-contain rounded-full dark:border-gray-800">
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
                Total Price:
            </button>
        </div>
    </div>

    <!-- Booking Form -->
    <form >
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

     --}}

    <script>
        flatpickr(".booking_range", {
            mode: "range",
            static: true,
            monthSelectorType: "static",
            dateFormat: "M j, Y",
            minDate: "today",
            defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
            prevArrow: '<svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            nextArrow: '<svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            onChange: function(selectedDates, dateStr, instance) {
                // Format the selected range
                instance.element.value = dateStr.replace("to", "-");

                // Calculate and display total price
                if (selectedDates.length === 2) {
                    const start = selectedDates[0];
                    const end = selectedDates[1];
                    const days = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                    const pricePerDay = {{ $car->price_per_day }};
                    const total = days * pricePerDay;
                    document.getElementById("total-price").textContent = total.toLocaleString();
                } else {
                    document.getElementById("total-price").textContent = "0";
                }
            },
            onReady: function(selectedDates, dateStr, instance) {
                instance.element.value = dateStr.replace("to", "-");
                const customClass = instance.element.getAttribute("data-class");
                instance.calendarContainer.classList.add(customClass);
            }
        });
    </script>

</x-web-layout>
