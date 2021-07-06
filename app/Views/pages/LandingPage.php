<?php $this->extend('layouts/template') ?>
<?php $this->section('content') ?>

    <!--Hero-->
    <div class="relative">

        <img class="absolute z-0 w-screen h-screen object-cover object-center" src="./img/bg-hero.png" alt="bg-hero">

        <!--Navbar-->
        <section
                class="h-full w-full border-box transition-all duration-500 linear px-8 lg:px-12 py-8 absolute z-20 font-rubik">
            <style>
              .navbar-1-1 #menu-toggle:checked + #menu,
              .navbar-1-1 #menu-toggle:checked + #menu + #menu {
                display: block;
              }
            </style>
            <div class="navbar-1-1">
                <div class="container mx-auto flex flex-wrap flex-row items-center justify-between">
                    <a href="" class="flex font-medium items-center">
                        <img class="h-16" src="./img/logo.png" alt="logo">
                        <h5 class="text-white font-azonix pl-4 2xl:text-2xl">Srifoton</h5>
                    </a>
                    <label for="menu-toggle" class="cursor-pointer lg:hidden block">
                        <svg class="w-6 h-6" fill="none" stroke="#FFF" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                    <input class="hidden" type="checkbox" id="menu-toggle"/>
                    <div
                            class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center"
                            id="menu">
                        <nav class="space-x-0 items-center justify-between text-base pt-8 space-y-6 text-gray-50 tracking-wider
                lg:pt-0 lg:space-y-0 lg:flex lg:space-x-12">
                            <a href="#" class="block font-medium hover:text-gray-200">Home</a>
                            <a href="#about" class="block hover:text-gray-200">About</a>
                            <a href="#competition" class="block hover:text-gray-200">Competition</a>
                            <a href="#webinar" class="block hover:text-gray-200 ">Webinar</a>
                        </nav>
                    </div>

                    <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
                        <button class="btn btn-primary text-white items-center text-base mt-6 lg:mt-0">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!--End of Navbar-->

        <div class="w-screen h-screen absolute z-10 mx-auto inset-x-0 px-8 flex justify-center items-center flex-col text-center
  lg:container lg:text-left lg:flex-row lg:justify-around xl:px-0">

            <!-- Blob  -->
            <div class="flex justify-center items-center order-1 lg:order-2">
                <img class="h-96 xl:h-auto" src="./img/blob-hero.png" alt="">
            </div>
            <!-- End of Blob  -->

            <!--  Text  -->
            <div class="font-rubik text-white order-2 lg:order-1">
                <h5 class="text-sm md:text-xl lg:text-base xl:text-lg 2xl:text-xl">HMIF UNSRI 2021</h5>
                <h1 class="font-azonix text-5xl uppercase mt-4 md:text-7xl lg:text-6xl xl:text-7xl 2xl:text-8xl">
                    Srifoton</h1>
                <p class="mt-8 max-w-2xl text-md leading-relaxed tracking-wide text-gray-200 md:text-lg lg:text-base lg:max-w-lg xl:max-w-lg xl:text-lg
      2xl:max-w-2xl 2xl:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec non dolor consequat, sollicitudin ipsum vel,
                    consequat risus. Pellentesque consectetur malesuada magna in tempus. Vestibulum suscipit volutpat
                    consectetur.
                    Sed ut nulla ut purus finibus pretium. Mauris volutpat ac velit et euismod. </p>
                <div class="mt-16 lg:mt-12 xl:mt-16">
                    <a class="btn btn-primary" href="#competition">Lihat Kompetisi</a>
                </div>
            </div>
            <!--  End of Text  -->
        </div>
    </div>
    <!--End of Hero-->

    <!--About-->
    <div id="about" class="relative py-36 bg-green-50" style="top: 100vh">
        <div class="container px-8 mx-auto lg:px-0">
            <h2 class="font-azonix text-center text-gray-900 tracking-wide text-2xl md:text-3xl lg:text-2xl xl:text-3xl 2xl:text-4xl">
                About
                Us</h2>
            <div class="text-left text-gray-700 md:max-w-xl md:text-lg mx-auto
    lg:flex lg:justify-around lg:max-w-full lg:leading-relaxed lg:text-base xl:text-lg xl:mt-4">
                <p class="mt-8 lg:max-w-sm xl:max-w-md 2xl:max-w-lg">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Lacus, at commodo pretium ac. Sed varius
                    amet dignissim
                    vivamus porttitor viverra quis tristique sem. Egestas integer at sagittis, eget pretium, porttitor
                    ultrices
                    eget.
                    At ac dui sit egestas ipsum libero pulvinar sed ut. Nec amet sodales nec augue eget gravida viverra
                    diam ipsum.
                    Fermentum, dolor elementum a sapien, faucibus eget amet. </p>
                <p class="mt-8 lg:max-w-sm xl:max-w-md 2xl:max-w-lg">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Lacus, at commodo pretium ac. Sed varius
                    amet dignissim
                    vivamus porttitor viverra quis tristique sem. Egestas integer at sagittis, eget pretium, porttitor
                    ultrices
                    eget.
                    At ac dui sit egestas ipsum libero pulvinar sed ut. Nec amet sodales nec augue eget gravida viverra
                    diam ipsum.
                    Fermentum, dolor elementum a sapien, faucibus eget amet. </p>
            </div>
        </div>
    </div>
    <!--End of About-->

    <!--Competition-->
    <div id="competition" class="relative w-screen py-24 px-14 lg:pl-0 lg:pr-4"
         style="top: 100vh; background-color: #108479">
        <h2 class="font-azonix text-center text-white tracking-wide text-2xl md:text-3xl lg:text-2xl xl:text-3xl 2xl:text-4xl">
            Competition</h2>
        <div class="mx-auto">
            <!--  Item  -->
            <div class="my-36 flex flex-col justify-center items-center lg:flex-row lg:justify-between">
                <div class="lg:max-w-lg xl:max-w-xl 2xl:max-w-full order-1">
                    <img src="./img/dummy-cp.png" alt="banner">
                </div>

                <div class="mt-8 order-2 text-center md:mt-10 lg:text-left lg:pl-10 lg:w-1/2 lg:pt-5 lg:self-start xl:pl-0">
                    <h3 class="font-bold text-gray-50 text-2xl md:text-3xl lg:text-2xl xl:text-4xl 2xl:text-6xl">
                        Competitive <br
                                class="hidden 2xl:block"> Programming</h3>
                    <p class="mt-6 text-gray-100 leading-relaxed md:max-w-xl md:text-lg xl:mt-10 lg:text-base lg:max-w-md xl:max-w-lg xl:text-lg 2xl:max-w-xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elit, tortor elementum a,
                        faucibus ac sed
                        elementum. Morbi odio proin duis habitasse quis. Neque, proin mauris ullamcorper consectetur
                        augue quis. Eget
                        massa dictumst nunc amet, tincidunt gravida vulputate elementum. Libero nunc quis faucibus id
                        egestas urna
                        vivamus duis turpis. Purus cursus congue id tempus pretium nibh. Sodales sollicitudin sed dolor
                        tristique
                        at. </p>
                    <a class="btn btn-secondary mt-8 lg:mt-12 2xl:mt-14" href="html/cp.html" target="_blank">Lihat
                        Kompetisi</a>
                </div>
            </div>
            <!--  End Of Item  -->

            <!--  Item  -->
            <div class="my-36 flex flex-col-reverse justify-center items-center lg:flex-row lg:justify-between">
                <div class="lg:max-w-lg xl:max-w-xl 2xl:max-w-full order-2">
                    <img src="./img/dummy-cp.png" alt="banner">
                </div>

                <div
                        class="mt-8 lg:ml-16 xl:ml-20 2xl:ml-32 order-1 text-center md:mt-10 lg:text-left lg:pr-10 lg:w-1/2 lg:pt-5 lg:self-start xl:pr-0">
                    <h3 class="font-bold text-gray-50 text-2xl md:text-3xl lg:text-2xl xl:text-4xl 2xl:text-6xl">UI/UX
                        <br
                                class="hidden 2xl:block"> Design</h3>
                    <p class="mt-6 text-gray-100 leading-relaxed md:max-w-xl md:text-lg xl:mt-10 lg:text-base lg:max-w-md xl:max-w-lg xl:text-lg 2xl:max-w-xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elit, tortor elementum a,
                        faucibus ac sed
                        elementum. Morbi odio proin duis habitasse quis. Neque, proin mauris ullamcorper consectetur
                        augue quis. Eget
                        massa dictumst nunc amet, tincidunt gravida vulputate elementum. Libero nunc quis faucibus id
                        egestas urna
                        vivamus duis turpis. Purus cursus congue id tempus pretium nibh. Sodales sollicitudin sed dolor
                        tristique
                        at. </p>
                    <a class="btn btn-secondary mt-8 lg:mt-12 2xl:mt-14" href="html/uiux.html" target="_blank">Lihat
                        Kompetisi</a>
                </div>
            </div>
            <!--  End Of Item  -->

            <!--  Item  -->
            <div class="my-36 flex flex-col justify-center items-center lg:flex-row lg:justify-between">
                <div class="lg:max-w-lg xl:max-w-xl 2xl:max-w-full order-1">
                    <img src="./img/dummy-cp.png" alt="banner">
                </div>

                <div class="mt-8 order-2 text-center md:mt-10 lg:text-left lg:pl-10 lg:w-1/2 lg:pt-5 lg:self-start xl:pl-0">
                    <h3 class="font-bold text-gray-50 text-2xl md:text-3xl lg:text-2xl xl:text-4xl 2xl:text-6xl">
                        Photography</h3>
                    <p class="mt-6 text-gray-100 leading-relaxed md:max-w-xl md:text-lg xl:mt-10 lg:text-base lg:max-w-md xl:max-w-lg xl:text-lg 2xl:max-w-xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elit, tortor elementum a,
                        faucibus ac sed
                        elementum. Morbi odio proin duis habitasse quis. Neque, proin mauris ullamcorper consectetur
                        augue quis. Eget
                        massa dictumst nunc amet, tincidunt gravida vulputate elementum. Libero nunc quis faucibus id
                        egestas urna
                        vivamus duis turpis. Purus cursus congue id tempus pretium nibh. Sodales sollicitudin sed dolor
                        tristique
                        at. </p>
                    <a class="btn btn-secondary mt-8 lg:mt-12 2xl:mt-14" href="html/photography.html" target="_blank">Lihat
                        Kompetisi</a>
                </div>
            </div>
            <!--  End Of Item  -->
        </div>
    </div>
    <!--End of Competition-->

    <!--Webinar-->
    <div id="webinar" class="relative" style="top: 100vh">
        <img class="absolute z-0 w-screen h-screen object-cover object-top" src="./img/bg-webinar.png" alt="bg-webinar">
        <div class="h-full w-full absolute z-10 px-8 mt-20">
            <div class="flex flex-col justify-center items-center">
                <h2 class="font-azonix text-center text-white tracking-wide text-2xl md:text-3xl lg:text-2xl xl:text-3xl 2xl:text-4xl">
                    Webinar Srifoton</h2>
                <img class="mt-8 lg:max-w-lg xl:max-w-full" src="./img/webinar.png" alt="webinar">
            </div>
        </div>
    </div>
    <!--End of Webinar-->

<?php $this->endSection() ?>