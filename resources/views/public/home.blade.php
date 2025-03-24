<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
   <!-- Header Area wrapper Starts -->
   <header id="header-wrap" class="relative">
    <!-- Navbar Start -->      
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <a class="navbar-brand" href="index.html">
                  <img src="assets/img/logo.svg" alt="Logo">
                </a>
                <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                          <a class="page-scroll active" href="#hero-area">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#feature">feature</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                          <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                  <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="#feature">FAQ</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
  </header>
  <!-- Header Area wrapper End -->

  <!-- Hero Area Start -->
  <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
    <div class="container">
      <div class="flex justify-between">
        <div class="w-full text-center">
          <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Startup and SaaS Landing Page
            <br class="hidden lg:block"> Built with TailwindCSS</h2>
          <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
            <a href="#"
              rel="nofollow"
              class="btn">Download Now</a>
          </div>
          <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
            <img class="img-fluid mx-auto" src="assets/img/hero.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Area End -->

  <!-- Services Section Start -->
  <section id="services" class="py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
      </div>
      <div class="flex flex-wrap">
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon text-5xl">
              <i class="lni lni-cog"></i>
            </div>
            <div>
              <h3 class="service-title">Web Development</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
            <div class="icon text-5xl">
              <i class="lni lni-bar-chart"></i>
            </div>
            <div>
              <h3 class="service-title">Graphic Design</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
            <div class="icon text-5xl">
              <i class="lni lni-briefcase"></i>
            </div>
            <div>
              <h3 class="service-title">Business Branding</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
            <div class="icon text-5xl">
              <i class="lni lni-pencil-alt"></i>
            </div>
            <div>
              <h3 class="service-title">Content Writing</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
            <div class="icon text-5xl">
              <i class="lni lni-mobile"></i>
            </div>
            <div>
              <h3 class="service-title">App Development</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
            <div class="icon text-5xl">
              <i class="lni lni-layers"></i>
            </div>
            <div>
              <h3 class="service-title">Digital Marketing</h3>
              <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia
                incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->

	  <!-- Footer Section Start -->
      <footer id="footer" class="bg-gray-800 py-16">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="mx-3 mb-8">
                <div class="footer-logo mb-3">
                  <img src="assets/img/logo.svg" alt="">
                </div>
                <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quasi, ipsam
                  voluptatem.</p>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="mx-3 mb-8">
                <h3 class="font-bold text-xl text-white mb-5">Company</h3>
                <ul>
                  <li><a href="#" class="footer-links">Press Releases</a></li>
                  <li><a href="#" class="footer-links">Mission</a></li>
                  <li><a href="#" class="footer-links">Strategy</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
              <div class="mx-3 mb-8">
                <h3 class="font-bold text-xl text-white mb-5">About</h3>
                <ul>
                  <li><a href="#" class="footer-links">Career</a></li>
                  <li><a href="#" class="footer-links">Team</a></li>
                  <li><a href="#" class="footer-links">Clients</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
              <div class="mx-3 mb-8">
                <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>
          
                <ul class="social-icons flex justify-start">
                  <li class="mx-2">
                    <a href="#"
                      class="footer-icon hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#"
                      class="footer-icon hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#"
                      class="footer-icon hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-2">
                    <a href="#"
                      class="footer-icon hover:bg-indigo-600">
                      <i class="lni lni-linkedin-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>     
      </footer> 
      <!-- Footer Section End -->
  
      <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full text-center">
              <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://tailwindtemplates.co" rel="nofollow">TailwindTemplates</a> and <a class="text-white duration-300 hover:text-blue-600" href="https://uideck.com" rel="nofollow">UIdeck</a></p>
            </div>
          </div>
        </div>
      </section>   
  
      <!-- Go to Top Link -->
      <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
        <i class="lni lni-arrow-up"></i>
      </a>
      

</body>

</html>
