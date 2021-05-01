<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 16px;">
    <head>

    <meta charset="utf-8">
    <title>Nature Heroes</title>
    <link rel="stylesheet" href="./css/nicepage.css" media="screen">
    <link rel="stylesheet" href="./css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="./js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./js/nicepage.js" defer=""></script>
   
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,990i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=text-font|heading-font">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/default-logo.png') }}">

    </head>
    

    <body class="u-body u-overlap u-overlap-contrast u-overlap-transparent antialiased " >
 
    <header class="u-clearfix u-header u-sticky u-header" id="sec-5d34"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1">
          <img src="{{ asset('./main/images/default-logo.png') }}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs>
</svgh
            </a>
          </div>
          <div class="u-nav-container">
             @if (Route::has('login')) 
            <ul class="u-nav u-spacing-25 u-unstyled u-nav-1">
                @auth
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="{{ url('/home') }}" style="padding: 8px 0px;">Home</a>
                </li>
                @else
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="{{ route('login') }}" style="padding: 8px 0px;">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="{{ route('register') }}" style="padding: 8px 0px;">Register</a>
                </li>
                @endif
                @endauth
            </ul>
            @endif
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
              @if (Route::has('login'))
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                @auth
                <li class="u-nav-item">
                <a class="u-btn-text u-button-style u-nav-link" href="{{ url('/home') }}" style="padding: 8px 0px;">Home</a>
               </li>
               @else
               <li class="u-nav-item">
               <a class="u-btn-text u-button-style u-nav-link" href="{{ route('login') }}" style="padding: 8px 0px;">Login</a>
              </li>
              @if (Route::has('register'))
              <li class="u-nav-item">
              <a class="u-btn-text u-button-style u-nav-link" href="{{ route('register') }}" style="padding: 8px 0px;">Register</a>
              </li>
              @endif
              @endauth
              </ul>
              @endif
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-eca5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-opacity u-opacity-15 u-palette-1-base u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-align-center u-text u-text-1">Green is the prime color of the world</p>
            <div class="u-border-3 u-border-white u-shape u-shape-bottom u-shape-left u-shape-1"></div>
            <h1 class="u-align-center u-text u-text-body-alt-color u-title u-text-2">The beauty of nature</h1>
            <a href="#" class="u-border-1 u-border-palette-1-base u-btn u-button-style u-palette-1-base u-btn-1">read more</a>
            <div class="u-border-3 u-border-white u-shape u-shape-right u-shape-top u-shape-2"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-6e7c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img src="./main/images/98697f8a5035ec93bad682b65a13f41c.jpeg" alt="" class="u-align-left u-expanded-width-xs u-image u-left-0 u-image-1">
        <img src="./main/images/2fa540df7187a7eeb5f596f9d0726e2d.jpeg" alt="" class="u-align-left u-image u-right-0 u-image-2">
        <div class="u-align-left u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-right-0 u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-1">the sky, the mountain, the tree...</h2>
            <div class="u-border-3 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
            <p class="u-text u-text-2">“I declare this world is so beautiful that I can hardly believe it exists.” The beauty of nature can have a profound effect upon our senses, those gateways from the outer world to the inner, whether it results in disbelief in its very
                        existence as Emerson notes, or feelings such as awe, wonder, or amazement.&nbsp;</p>
          </div>
        </div>
        <div class="u-container-style u-expanded-width-xs u-group u-group-2">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-2"><span class="u-icon u-icon-circle u-text-grey-10 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332" style="undefined"><use xlink:href="#svg-a834"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-a834" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
            <h4 class="u-text u-text-3">I declare this world is so beautiful that I can hardly believe it exists</h4>
          </div>
        </div>
        <div class="u-align-left u-container-style u-expanded-width-xs u-grey-5 u-group u-group-3">
          <div class="u-container-layout u-valign-middle-lg u-container-layout-3">
            <h2 class="u-text u-text-4">Unseen beauty</h2>
            <div class="u-border-3 u-border-palette-1-base u-line u-line-horizontal u-line-2"></div>
            <p class="u-text u-text-5">My work explores and reveals the invisible, inviting the viewer to look beyond the seen to appreciate the beauty and mystery of the unseen. </p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-21d5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-grey-10 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
            <h2 class="u-text u-text-1">6 Things You Can Do to Save the Environment</h2>
            <div class="u-border-3 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
            <p class="u-text u-text-2">By no means am I suggesting that I am the next superhero of the environment (although that would make for an excellent Halloween costume). However, I like to believe that many of us, when equipped with information, will do the right
                        thing. Here are the top 6 things you can do to save the planet, with or without a green cape:</p>
          </div>
        </div>
        <img src="./main/images/a15400169df3dbcae7cd48146ac9e44f.jpeg" alt="" class="u-align-left u-image u-image-1">
        <img src="./main/images/115d4b154eff1a090090ad554ea4a1eb.jpeg" alt="" class="u-align-left u-image u-left-0 u-image-2">
      </div>
    </section>
    <section class="u-clearfix u-image u-section-4" id="sec-62e8">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-repeater u-list-1">
          <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <h2 class="u-text u-text-palette-2-base u-text-1">1</h2>
              <h3 class="u-text u-text-2">Change your driving habits</h3>
              <p class="u-text u-text-3">We don’t all have the luxury of walking everywhere, but vehicles are the biggest compromise to our air. Those tailpipes are at street level</p>
              <a href="https://www.nicepage.com/website-mockup" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-1">more</a>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <h2 class="u-text u-text-palette-2-base u-text-4">2</h2>
              <h3 class="u-text u-text-5">Notice how you use water</h3>
              <p class="u-text u-text-6">We have a lot of water in Canada, but we also use a lot of water, and 65% of what we use is in the bathroom. Have shorter showers.</p>
              <a href="#" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-2">more</a>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <h2 class="u-text u-text-palette-2-base u-text-7">3</h2>
              <h3 class="u-text u-text-8">Reduce paper in your life.</h3>
              <p class="u-text u-text-9">Do you know that 40% of the world’s commercially cut timber is used for paper? This endangers natural habitats and uses a ton of water.</p>
              <a href="#" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-3">more</a>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <h2 class="u-text u-text-palette-2-base u-text-10">4</h2>
              <h3 class="u-text u-text-11">Use a refillable water bottle</h3>
              <p class="u-text u-text-12">Bottled water and throw away packaging is wasteful. Landfills are overfilling with water bottles alone. It is also estimated that 3 litres</p>
              <a href="#" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-4">more</a>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-5">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <h2 class="u-text u-text-palette-2-base u-text-13">5</h2>
              <h3 class="u-text u-text-14">Borrow or fix rather than buy</h3>
              <p class="u-text u-text-15">Buying throwaway fashion is detrimental for the environment – 1 kg of fabric generates 23 kg of greenhouse gases! Start thinking about</p>
              <a href="#" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-5">more</a>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-opacity u-opacity-60 u-repeater-item u-white u-list-item-6">
            <div class="u-container-layout u-similar-container u-container-layout-6">
              <h2 class="u-text u-text-palette-2-base u-text-16">6</h2>
              <h3 class="u-text u-text-17">Stop eating So Many meat</h3>
              <p class="u-text u-text-18">The Environmental Working Group found that red meat is responsible for 10 to 40 times as many greenhouse emissions as common vegetables</p>
              <a href="#" class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-palette-2-base u-btn u-button-style u-hover-none u-text-body-color u-text-hover-palette-2-base u-btn-6">more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-palette-2-dark-3" id="sec-434c"><div class="u-clearfix u-sheet ">
        
        <div class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="undefined"><use xlink:href="#svg-c4b5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-c4b5"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
          </a>
           <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="undefined"><use xlink:href="#svg-4327"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-4327"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="undefined"><use xlink:href="#svg-f0f7"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-f0f7"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="undefined"><use xlink:href="#svg-29a3"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-29a3"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg></span>
          </a>
        </div>
      </div>
    </footer>
    
  </body>




</html>
