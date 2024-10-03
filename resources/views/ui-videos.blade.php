@extends('layouts.master')
@section('title')Unikit @endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') UI Kit @endslot
    @slot('title') Videos @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="text-muted mb-0">Aspect ratios can be customized with modifier classes.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ratio video 21:9</h4>
                    <p class="text-muted mb-0">Aspect ratios can be customized with modifier classes.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <!-- 21:9 aspect ratio -->
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ratio video 4:3</h4>
                    <p class="text-muted mb-0">Aspect ratios can be customized with modifier classes.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <!-- 4:3 aspect ratio -->
                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ratio video 1:1</h4>
                    <p class="text-muted mb-0">Aspect ratios can be customized with modifier classes.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <!-- 1:1 aspect ratio -->
                    <div class="ratio ratio-1x1">
                        <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
