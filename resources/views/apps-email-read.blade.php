@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Apps @endslot
    @slot('title') Email Read @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-12">
            <!-- Left sidebar -->
            <div class="email-leftbar">
                <button type="button" class="btn btn-primary  w-100 " data-bs-toggle="modal" data-animation="bounce" data-bs-target="#compose-modal">
                    <i class="fas fa-feather-alt me-2"></i>Compose
                </button>

                <div class="card mt-3">
                    <div class="card-body">
                        <div class="mail-list">
                            <a href="#" class="active pt-0"><i class="las la-inbox font-15 me-1"></i>Inbox <span class="ms-1">(5)</span></a>
                            <a href="#"><i class="las la-star font-15 me-1"></i>Starred</a>
                            <a href="#"><i class="las la-tag font-15 me-1"></i>Important</a>
                            <a href="#"><i class="las la-file-alt font-15 me-1"></i>Draft</a>
                            <a href="#"><i class="las la-paper-plane font-15 me-1"></i>Sent Mail</a>
                            <a href="#"><i class="las la-trash-alt font-15 me-1"></i>Trash</a>
                        </div>

                        <p class="text-dark my-4 font-weight-bold">Labels</p>
                        <div class="mail-list">
                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-end"></span><i class="las la-life-ring font-15 me-1"></i>Theme Support</a>
                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span><i class="las la-briefcase font-15 me-1"></i>Freelance</a>
                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-purple float-end"></span><i class="lab la-google font-15 me-1"></i>Social</a>
                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-pink float-end"></span><i class="las la-users font-15 me-1"></i>Friends</a>
                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-end"></span><i class="las la-home font-15 me-1"></i>Family</a>
                        </div>

                        <p class="text-dark my-4 font-weight-bold">Chat</p>
                        <div class="">
                            <a href="#" class="media">
                                <img class="d-flex me-2 rounded-circle" src="{{URL::asset('assets/images/users/user-1.jpg')}}" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">Scott Median</p>
                                    <p class="text-muted">Hello</p>
                                </div>
                            </a>

                            <a href="#" class="media">
                                <img class="d-flex me-2 rounded-circle" src="{{URL::asset('assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">Julian Rosa</p>
                                    <p class="text-muted">What about our next..</p>
                                </div>
                            </a>

                            <a href="#" class="media">
                                <img class="d-flex me-2 rounded-circle" src="{{URL::asset('assets/images/users/user-3.jpg')}}" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">David Medina</p>
                                    <p class="text-muted">Yeah everything is fine</p>
                                </div>
                            </a>

                            <a href="#" class="media">
                                <img class="d-flex me-2 rounded-circle" src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">Jay Baker</p>
                                    <p class="text-muted">Wow that's great</p>
                                </div>
                            </a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- End Left sidebar -->


            <!-- Right Sidebar -->
            <div class="email-rightbar">
                <div class="float-end d-flex justify-content-between">
                    <div class="btn-group ms-1">
                        <button type="button" class="btn  btn-de-secondary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-question-circle"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>
                    <div class="btn-group ms-1">
                        <button type="button" class="btn  btn-de-secondary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Display density</a>
                            <a class="dropdown-item" href="#">Themes</a>
                            <a class="dropdown-item" href="#">Help</a>
                        </div>
                    </div>
                </div><!-- end div -->
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group">
                        <button type="button" class="btn  btn-de-secondary "><i class="fas fa-inbox"></i></button>
                        <button type="button" class="btn  btn-de-secondary "><i class="fas fa-exclamation-circle"></i></button>
                        <button type="button" class="btn  btn-de-secondary "><i class="fas fa-trash"></i></button>
                    </div>
                    <div class="btn-group ms-1">
                        <button type="button" class="btn  btn-de-secondary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-folder"></i><i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>
                    <div class="btn-group ms-1">
                        <button type="button" class="btn  btn-de-secondary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-tag"></i><i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>

                    <div class="btn-group ms-1">
                        <button type="button" class="btn  btn-de-secondary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            More<i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Mark as Unread</a>
                            <a class="dropdown-item" href="#">Mark as Important</a>
                            <a class="dropdown-item" href="#">Add to Tasks</a>
                            <a class="dropdown-item" href="#">Add Star</a>
                            <a class="dropdown-item" href="#">Mute</a>
                        </div>
                    </div>
                </div><!-- end toolbar -->


                <div class="card mt-3">
                    <div class="card-body">

                        <div class="media mb-4">
                            <img class="d-flex me-2 rounded-circle thumb-md" src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="Generic placeholder image">
                            <div class="media-body align-self-center">
                                <h5 class="font-14 m-0">Humberto D. Champion</h5>
                                <small class="text-muted">support@domain.com</small>
                            </div>
                        </div>

                        <h4 class="mt-0 font-15">This Week's Top Stories</h4>

                        <p>Dear Lorem Ipsum,</p>
                        <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus
                            convallis.</p>
                        <p>Sed elementum turpis eu lorem interdum, 🏆sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia
                            lacus, vel tincidunt mi nibh sit amet lorem.</p>
                        <p>Sincerly,</p>
                        <hr />

                        <div class="row">
                            <div class="col-auto">
                                <div class="card">
                                    <img class="" src="{{URL::asset('assets/images/small/sm-1.jpg')}}" alt="Card image cap">
                                    <div class="py-1 text-center">
                                        <a href="" class="text-muted">Download<i class="dripicons-download ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="card">
                                    <img class="" src="{{URL::asset('assets/images/small/sm-2.jpg')}}" alt="Card image cap">
                                    <div class="py-1 text-center">
                                        <a href="" class="text-muted">Download<i class="dripicons-download ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#custom-modal" class="btn btn-de-primary " data-bs-toggle="modal" data-animation="bounce" data-bs-target="#compose-modal">
                            <i class="mdi mdi-reply"></i> Reply</a>
                        <a href="#" class="btn btn-de-primary ">Forward <i class="mdi mdi-share"></i></a>
                    </div>
                </div>
            </div> <!-- end email-rightbar -->
        </div><!-- end Col -->
    </div><!-- End row -->

    <div class="modal fade bd-example-modal-lg" id="compose-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel">Compose Mail</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="To">
                        </div>
                        <!--end form-group-->
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Cc">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Bcc">
                                </div>
                            </div>
                        </div>
                        <!--end form-group-->
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <!--end form-group-->
                        <textarea id="basic-conf">Hello, World!</textarea>
                    </form>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button class="btn btn-de-primary "><span>Send</span> <i class="far fa-paper-plane ms-2"></i></button>
                    <button type="button" class="btn btn-de-danger " data-bs-dismiss="modal"><span>Delete</span><i class="far fa-trash-alt ms-2"></i></button>
                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/form-editor.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
