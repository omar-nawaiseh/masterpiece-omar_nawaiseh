
<nav x-data="{ open: false }" >
        <div class="iq-sidebar"> 
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li>
                        <a href="{{ route('dashboard') }}" class="iq-waves-effect"><i class="las la-newspaper"></i><span>Newsfeed</span></a>
                     </li>
                     <!-- <li>
                        <a href="notification.html" class="iq-waves-effect"><i class="las la-bell"></i><span>Notification</span></a>
                     </li>
                     <li>
                        <a href="friend-request.html" class="iq-waves-effect"><i class="las la-anchor"></i><span>Friend Request</span></a>
                     </li>
                     <li>
                        <a href="friend-list.html" class="iq-waves-effect"><i class="las la-user-friends"></i><span>Friend Lists</span></a>
                     </li> -->
                     <li>
                        <a href="{{ route('profile') }}" class="iq-waves-effect"><i class="las la-user"></i><span>Profile</span></a>
                     </li>
                     
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>

         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="{{ route('dashboard') }}" active="request()->routeIs('dashboard')">
                     <img src="../main/images/logo.png" class="img-fluid" alt="">
                     
                     </a>
                     <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                     </div>
                  </div>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                           <a href="profile.html" class="iq-waves-effect d-flex align-items-center">
                           <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                              <div class="caption">
                                 <h6 class="mb-0 line-height"> {{ Auth::user()->name }}</h6>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="index.html" class="iq-waves-effect d-flex align-items-center">
                           <i class="ri-home-line"></i>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-group-line"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="../main/images/user/01.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Jaques Amole</h6>
                                                <p class="mb-0">40  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>                                    
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="../main/images/user/02.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lucy Tania</h6>
                                                <p class="mb-0">12  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>                                    
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="../main/images/user/03.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Manny Petty</h6>
                                                <p class="mb-0">3  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>                                    
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="../main/images/user/04.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Marsha Mello</h6>
                                                <p class="mb-0">15  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>                                    
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <a href="#" class="mr-3 btn text-primary">View More Request</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../main/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Bni</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../main/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../main/images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../main/images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        
                     </ul>
                      <ul class="navbar-list">
                        <li>
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <i class="ri-arrow-down-s-fill"></i>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                       <h5 class="mb-0 text-white line-height">Hello Bni Cyst</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="{{ route('profile') }}" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="{{ route('profile.show') }}" class="iq-sub-card iq-bg-warning-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-warning">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                               <h6 class="mb-0 ">Edit Profile</h6>
                                               <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>

                                    <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" 
                                       role="button"onclick="event.preventDefault(); this.closest('form').submit();" >Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                    </form>

                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>

 </nav>