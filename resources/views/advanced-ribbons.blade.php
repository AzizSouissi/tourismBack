@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
<link href="{{ URL::asset('assets/plugins/animate/magic.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Advanced UI @endslot
    @slot('title') Ribbons @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon4 rib4-primary">
                        <span class="ribbon4-band ribbon4-band-primary text-white text-center">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/dastyle.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Dastyle - Admin & Dashboard Template</p>
                            <p class="text-muted">Dastyle is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon4 rib4-warning">
                        <span class="ribbon4-band ribbon4-band-warning text-white text-center">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/Unikit.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Unikit - Admin & Dashboard Template</p>
                            <p class="text-muted">Unikit is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon1 rib1-secondary">
                        <span class="text-white text-center rib1-secondary">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/crovex.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Crovex - Admin & Dashboard Template</p>
                            <p class="text-muted">Crovex is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon1 rib1-success">
                        <span class="text-white text-center rib1-success">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/frogetor.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Frogetor - Admin & Dashboard Template</p>
                            <p class="text-muted">Frogetor is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon3 rib3-primary">
                        <span class="text-white text-center rib3-primary">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/Unikit.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Unikit - Admin & Dashboard Template</p>
                            <p class="text-muted">Unikit is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon3 rib3-warning">
                        <span class="text-white text-center rib3-warning">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/dastyle.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Dastyle - Admin & Dashboard Template</p>
                            <p class="text-muted">Dastyle is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon2 rib2-secondary">
                        <span class="text-white text-center rib3-secondary">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/frogetor.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Frogetor - Admin & Dashboard Template</p>
                            <p class="text-muted">Frogetor is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="ribbon2 rib2-success">
                        <span class="text-white text-center rib3-success">50% off</span>
                    </div>
                    <!--end ribbon-->
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{URL::asset('assets/images/dashboards/crovex.jpg')}}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                        </div>
                        <!--end col-->
                        <div class="col align-self-center">
                            <p class="font-18 fw-semibold mb-2">Crovex - Admin & Dashboard Template</p>
                            <p class="text-muted">Crovex is a Bootstrap 4 admin dashboard,
                                It is fully responsive and included awesome
                                features to help build web applications fast and easy.
                            </p>
                            <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                            <a href="#" class="btn btn-de-primary btn-sm">Download Now</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
