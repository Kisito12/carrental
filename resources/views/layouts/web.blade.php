<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-p-24">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="font-nunito">
    {{-- Navbar --}}
    <header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })" :class="{ 'bg-white shadow': scrolled }"
        class="fixed top-0 w-full z-50 transition-all duration-300">
        <nav class="px-4 lg:px-6 py-2.5">
            <div
                class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl transition-all duration-300">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('assets/images/cars/LOGO.jpg') }}" class="mr-1 h-20" alt="Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-black"
                        :class="{ 'text-gray-900': scrolled }">CarRental</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="{{ route('login') }}"
                        class="text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2"
                        :class="{ 'text-gray-800': scrolled }">Log in</a>
                    <a href="{{ route('register') }}"
                        class="text-white bg-brand-700 hover:bg-brand-500 focus:ring-4 focus:ring-brand-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-brand-600 dark:hover:bg-brand-700 focus:outline-none dark:focus:ring-brand-800">Get
                        started</a>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li><a href="{{ route('home') }}" class="block py-2 pr-4 pl-3 text-gray-900 lg:text-gray-900"
                                :class="{ 'text-brand-700': scrolled }">Home</a></li>
                        <li><a href="#about" class="block py-2 pr-4 pl-3 text-gray-900 lg:text-gray-900"
                                :class="{ 'text-brand-700': scrolled }">About</a></li>
                        <li><a href="#cars" class="block py-2 pr-4 pl-3 text-gray-900 lg:text-gray-900"
                                :class="{ 'text-brand-700': scrolled }">Cars</a></li>
                        <li><a href="#features" class="block py-2 pr-4 pl-3 text-gray-900 lg:text-gray-900"
                                :class="{ 'text-brand-700': scrolled }">Features</a></li>
                        <li><a href="#contact" class="block py-2 pr-4 pl-3 text-gray-900 lg:text-gray-900"
                                :class="{ 'text-brand-700': scrolled }">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- Navbar --}}


    {{ $slot ?? '' }}

    {{-- About --}}

    {{-- Contact --}}
    <section id="contact" class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact
                Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a
                technical
                issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.
            </p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand-500 focus:border-brand-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-brand-500 dark:focus:border-brand-500 dark:shadow-sm-light"
                        placeholder="name@gmail.com" required>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-brand-500 focus:border-brand-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-brand-500 dark:focus:border-brand-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-brand-500 focus:border-brand-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-brand-500 dark:focus:border-brand-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-brand-700 sm:w-fit hover:bg-brand-800 focus:ring-4 focus:outline-none focus:ring-brand-300 dark:bg-brand-600 dark:hover:bg-brand-700 dark:focus:ring-brand-800">Send
                    message</button>
            </form>
        </div>
    </section>
    {{-- Contact --}}

    {{-- Advart --}}
    <section class="bg-gray-50 px-4 py-8 antialiased dark:bg-gray-900 md:py-16">
        <div
            class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
            <div class="lg:col-span-5 lg:mt-0">
                <a href="#">
                    <img class="mb-4 h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full"
                        src="{{ asset('assets/images/cars/ads.jpg') }}" alt="peripherals" />
                    <img class="mb-4 hidden dark:block md:h-full" src="{{ asset('assets/images/cars/ads.jpg') }}"
                        alt="peripherals" />
                </a>
            </div>
            <div class="me-auto place-self-center lg:col-span-7">
                <h1
                    class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">
                    Save $500 today on your purchase <br />
                    of a new iMac computer.
                </h1>
                <p class="mb-6 text-gray-500 dark:text-gray-400">Reserve your new Apple iMac 27” today and enjoy
                    exclusive savings with qualified activation. Pre-order now to secure your discount.</p>
                <a href="#"
                    class="inline-flex items-center justify-center rounded-lg bg-brand-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-brand-800 focus:ring-4 focus:ring-brand-300 dark:focus:ring-brand-900">
                    Pre-order now </a>
            </div>
        </div>
    </section>
    {{-- Advart --}}

    {{-- Footer --}}
    <footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="{{ route('home') }}"
                class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{ asset('assets/images/cars/LOGO.jpg') }}" class="mr-1 h-32" alt="Logo" />CarRental
            </a>
            <p class="my-6 text-gray-500 dark:text-gray-400">Your Fast & Reliable Car Rental Service</p>
            <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
                <li>
                    <a href="#about" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#cars" class="mr-4 hover:underline md:mr-6">Cars</a>
                </li>
                <li>
                    <a href="#features" class="mr-4 hover:underline md:mr-6 ">Features</a>
                </li>
                <li>
                    <a href="#contact" class="mr-4 hover:underline md:mr-6">Contact</a>
                </li>
            </ul>
            <div class="gtranslate_wrapper"></div>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a
                    href="{{ route('home') }}" class="hover:underline">CarRental™</a>. All Rights Reserved.</span>
        </div>
    </footer>
    {{-- Footer --}}
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "languages": ["en", "fr", "it", "es"],
            "wrapper_selector": ".gtranslate_wrapper"
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/fd.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
