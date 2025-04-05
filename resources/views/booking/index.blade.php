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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
