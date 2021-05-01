<x-app-layout>
@section('title')
    Home
@endsection



@section('body')

                  <div class="col-lg-8 row m-0 p-0">
                     <div class="col-sm-12">
                        <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Create Post</h4>
                              </div>
                           </div>
                           <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="avatar-60 rounded-circle">
                                 </div>
                                 <form class="post-text ml-3 w-100" action="javascript:void();">
                                    <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                 </form>
                              </div>
                              <hr>
                           </div>
                           <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                       <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="../main/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                          </div>
                                          <form class="post-text ml-3 w-100" action="{{route('post.submit')}}" method="POST" enctype="multipart/form-data">
                                              @csrf
                                             <input type="text" name="title" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                             <input type="file" name="image" class="form-control rounded" placeholder="Add an image..." style="border:none;">
                                              <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                          </form>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     @foreach(\App\Models\post::with('user')->get() as $post)

                          <div class="col-sm-12">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                  <div class="iq-card-body">
                                      <div class="user-post-data">
                                          <div class="d-flex flex-wrap">
                                              <div class="media-support-user-img mr-3">
                                                  <img class="rounded-circle img-fluid" src="{{Storage::disk('public')->url($post->image)}}" alt="">
                                              </div>
                                              <div class="media-support-info mt-2">
                                                  <h5 class="mb-0 d-inline-block"><a href="#" class="">{{$post->user->name}}</a></h5>
                                                  <p class="mb-0 d-inline-block">Added New Image in a Post</p>
                                              </div>
                                              <div class="iq-card-post-toolbar">
                                                  <div class="dropdown">
                                          <span class="dropdown-toggle" id="postdata-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="mt-3">
                                          <p>{{$post->title}}</p>
                                      </div>
                                      <div class="user-post">
                                          <a href="javascript:void();"><img src="{{Storage::disk('public')->url($post->image)}}" alt="post-image" class="img-fluid rounded w-100"></a>
                                      </div>
                                      <div class="comment-area mt-3">
                                          <div class="d-flex justify-content-between align-items-center">
                                              <div class="like-block position-relative d-flex align-items-center">
                                                  <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                          <div class="dropdown">
{{--                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">--}}
{{--                                                <img src="../main/images/icon/01.png" class="img-fluid" alt="">--}}
{{--                                                </span>--}}
{{--                                                              <div class="dropdown-menu">--}}
{{--                                                                  <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="images/icon/01.png" class="img-fluid" alt=""></a>--}}
{{--                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="images/icon/02.png" class="img-fluid" alt=""></a>--}}
{{--                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Happy"><img src="images/icon/03.png" class="img-fluid" alt=""></a>--}}
{{--                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt=""></a>--}}
{{--                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Think"><img src="images/icon/05.png" class="img-fluid" alt=""></a>--}}
{{--                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sade"><img src="images/icon/06.png" class="img-fluid" alt=""></a>--}}
{{--                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt=""></a>--}}
{{--                                                              </div>--}}
{{--                                                          </div>--}}
{{--                                                      </div>--}}
{{--                                                      <div class="total-like-block ml-2 mr-3">--}}
{{--                                                          <div class="dropdown">--}}
{{--                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">--}}
{{--                                                140 Likes--}}
{{--                                                </span>--}}
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="total-comment-block">
                                                      <div class="dropdown">
                                             <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             {{DB::table('comments')->where('commentable_id', $post->id)->count()}} Comment/s
                                             </span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <hr>
                                          @comments(['model' => $post, 'perPage' => 2])
                                      </div>
                                  </div>
                              </div>
                          </div>

                      @endforeach
                     </div>

                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Suggested Pages</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="suggested-page-story m-0 p-0 list-inline">
                              @foreach(\App\Models\post::inRandomOrder()->paginate(2) as $post)
                                   <li class="mb-3">
                                       <div class="d-flex align-items-center mb-3">
                                           <img src="../main/images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                           <div class="stories-data ml-3">
                                               <h5>{{$post->title}}</h5>
                                           </div>
                                       </div>
                                       <img src="{{Storage::disk('public')->url($post->image)}}" class="img-fluid rounded" alt="Responsive image">
                                   </li>
                               @endforeach
                           </ul>
                        </div>
                     </div>
                  </div>
@endsection


</x-app-layout>
