<x-app-layout>
@section('title')
profile
@endsection



@section('body')




        
         <!-- Page Content  -->
         
            
             
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header">
                              <div class="cover-container">
                                 <img src="main/images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid">
                                 <!-- <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                    <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                                 </ul> -->
                              </div>
                              <div class="user-detail text-center mb-3">
                                 <div class="profile-img">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="avatar-130 img-fluid  mx-auto d-block" />
                                 </div>
                                 <div class="profile-detail">
                                    <h3 class="">{{ Auth::user()->name }}</h3>
                                 </div>
                              </div>
                              <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative text-center">
                                 <div class="social-links"> </div>
                                 <div class="social-info">
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <div class="col-sm-12">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                           <div class="iq-card-body p-0">
                              <div class="row">
                                
                                 <div class="col-lg-12">
                                    <div id="post-modal-data" class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Create Post</h4>
                                          </div>
                                       </div>
                                       <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                                          <div class="d-flex align-items-center">
                                             <div class="user-img">
                                                <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                             </div>
                                             <form class="post-text ml-3 w-100" action="javascript:void();">
                                                <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                             </form>
                                          </div>
                                          <hr>
                                          <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                       </div>
                                       <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="d-flex align-items-center">
                                                      <div class="user-img">
                                                         <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                                      </div>
                                                      <form class="post-text ml-3 w-100" action="javascript:void();">
                                                         <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                                      </form>
                                                   </div>
                                                   <hr>
                                                   <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                      <li class="col-md-12 mb-3">
                                                         <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</div>
                                                      </li>
                                                     
                                                   </ul>
                                                   <hr>
                                                   
                                                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-body">
                                          <div class="post-item">
                                             <div class="user-post-data p-3">
                                                <div class="d-flex flex-wrap">
                                                   <div class="media-support-user-img mr-3">
                                                      <img class="rounded-circle img-fluid" src="images/user/1.jpg" alt="">
                                                   </div>
                                                   <div class="media-support-info mt-2">
                                                      <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni Cyst</a></h5>
                                                   </div>
                                                   <div class="iq-card-post-toolbar">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                         <i class="ri-more-fill"></i>
                                                         </span>
                                                         <div class="dropdown-menu m-0 p-0">
                                                           
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-pencil-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Edit Post</h6>
                                                                     <p class="mb-0">Update your post and saved items</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-delete-bin-7-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Delete</h6>
                                                                     <p class="mb-0">Remove thids Post on Timeline</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="user-post">
                                                <a href="javascript:void();"><img src="images/page-img/p1.jpg" alt="post-image" class="img-fluid w-100" /></a>
                                             </div>
                                             <div class="comment-area mt-3">
                                                
                                                <hr>
                                                <ul class="post-comments p-0 m-0">
                                                   <li class="mb-2">
                                                      <div class="d-flex flex-wrap">
                                                         <div class="user-img">
                                                            <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                         </div>
                                                         <div class="comment-data-block ml-3">
                                                            <h6>Monty Carlo</h6>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                               <a href="javascript:void();">like</a>
                                                               <a href="javascript:void();">reply</a>
                                                               <a href="javascript:void();">translate</a>
                                                               <span> 5 min </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="d-flex flex-wrap">
                                                         <div class="user-img">
                                                            <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                         </div>
                                                         <div class="comment-data-block ml-3">
                                                            <h6>Paul Molive</h6>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                               <a href="javascript:void();">like</a>
                                                               <a href="javascript:void();">reply</a>
                                                               <a href="javascript:void();">translate</a>
                                                               <span> 5 min </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                                   <input type="text" class="form-control rounded">
                                                   <div class="comment-attagement d-flex">
                                                      <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                                      <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                                      <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 text-center">
                     <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                  </div>
               
            
         
     


        
@endsection


</x-app-layout>
