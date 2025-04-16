<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:px-8">
        <div class="flex items-center bg-white rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg></div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Number of Cars</h3>
                <p class="text-3xl">12,768</p>
            </div>
        </div>
        <div class="flex items-center bg-white rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-blue-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                    </path>
                </svg></div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Available Number Cars</h3>
                <p class="text-3xl">39,265</p>
            </div>
        </div>
        <div class="flex items-center bg-white rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-indigo-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                    </path>
                </svg></div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Booked Cars</h3>
                <p class="text-3xl">142,334</p>
            </div>
        </div>
        <div class="flex items-center bg-white rounded-sm overflow-hidden shadow">
            <div class="p-4 bg-red-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                    </path>
                </svg></div>
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Total Amouunt Earned</h3>
                <p class="text-3xl">34.12%</p>
            </div>
        </div>
    </div>

    <div class="space-y-5 sm:space-y-6 my-5 px-4">
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-center">
                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                    Bookings
                </h3>
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
                                                #
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Car
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                User
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Start Date
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                End Date
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-5 py-3 sm:px-6">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Total Price
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
                                @foreach ($bookings as $key => $booking)
                                    <tr>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                    {{ $key + 1 }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                    {{ $booking->car->name }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                    {{ $booking->user->name }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                    {{ $booking->start_date }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">
                                                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                    {{ $booking->end_date }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">

                                            <div class="flex items-center">
                                                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                                    {{ number_format($booking->total_price, 2) }} FCFA
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">
                                                @if ($booking->status == 'pending')
                                                    <p
                                                        class="rounded-full bg-yellow-50 px-2 py-0.5 text-theme-xs font-medium text-yellow-700 dark:bg-yellow-500/15 dark:text-yellow-500">
                                                        Pending
                                                    </p>
                                                @elseif ($booking->status == 'approved')
                                                    <p
                                                        class="rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-500">
                                                        Active
                                                    </p>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-5 py-4 sm:px-6">
                                            <div class="flex items-center">

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
</x-app-layout>
