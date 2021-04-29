<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/default-logo.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('../main/css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('../main/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('../main/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('../main/css/responsive.css') }}">

 


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="sidebar-main-active right-column-fixed" >
        <x-jet-banner  />
        <div id="loading">
         <div id="loading-center">
         </div>
        </div>







        <div class="wrapper">

        <div class="min-h-screen bg-gray-100">
          @livewire('navigation-menu') 

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  


                     @yield('body')



             

            <main>
                {{ $slot }}
            </main>
        </div>
        </div>
        @stack('modals')

        @livewireScripts
     
               </div>
            </div>
         </div>
 <!-- Optional JavaScript -->
      
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../main/js/jquery.min.js"></script>
      <script src="../main/js/popper.min.js"></script>
      <script src="../main/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="../main/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="../main/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="../main/js/waypoints.min.js"></script>
      <script src="../main/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="../main/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="../main/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="../main/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="../main/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="../main/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="../main/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="../main/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="../main/js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="../main/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="../main/js/custom.js"></script>
      

    </body>
</html>
