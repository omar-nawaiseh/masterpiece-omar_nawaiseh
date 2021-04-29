
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.15.3/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css') }}">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/default-logo.png') }}">
    <link href="{{ asset('../css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
          
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner">
                                
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner">
                            
                            </span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                           
                        </span>
                    </button>
                </span>
            </div> 
            <div class="app-header__content">
               
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                            <img width="42" class="rounded-circle" src="{{ asset('../main/assets/images/avatars/1.jpg')}}" alt=" ">
                                            
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                             <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                             <button type="button" tabindex="0" class="dropdown-item">Dividers</button>



                                              <div tabindex="-1" class="dropdown-divider"> </div>
                                               
                                               
                                                <a href="{{ route('auth.logout')}}">
                                                     <button type="button" tabindex="0" class="dropdown-item">logout</button> 
                                                </a>
                                                 </div>
                                              </div>
                                         </div>
                                 </div>
                            </div>
                        </div>    
                    </div>
                 </div>
            </div> 
        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="{{ asset('/admin/dashboard')}}" >
                                       <h5>
                                           <i class="fas fa-house-user"></i>  
                                           Home
                                       </h5> 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('/admin/Admins')}}" >
                                       <h5>
                                       <i class="fab fa-slack-hash"></i>
                                        Categories
                                       </h5> 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('/admin/Users')}}" >
                                       <h5>
                                       <i class="fas fa-user-friends"></i>
                                        Users
                                       </h5> 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('/admin/Admins')}}" >
                                       <h5>
                                        <i class="fas fa-users"></i>
                                           Admins
                                       </h5> 
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>  
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="app-main__outer">



                <div class="app-main__inner">
                       
                    @yield('body')
                
                
                </div>
                
        </div>
    </div>
<script type="text/javascript" src="{{ asset('../js/main.js')}}"></script>




</body>
</html>