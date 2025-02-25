@extends('layouts.master')
@section('title')Unikit @endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') UI Kit @endslot
    @slot('title') Typography @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <span class="float-right text-muted fw-normal">Normal / 400</span>
                            <h1 class="font-54 fw-normal mt-0 mb-4">Aa</h1>
                            <h5 class="mb-0 fw-normal">Unikit</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-body">
                            <span class="float-right text-muted fw-bold">Bold / 700</span>
                            <h1 class="font-54 fw-bold mt-0 mb-4">Aa</h1>
                            <h5 class="mb-0 fw-bold">Unikit</h5>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Heading</h4>
                    <p class="text-muted mb-0">All HTML headings,
                        <code class="highlighter-rouge">&lt;h1&gt;</code> through
                        <code class="highlighter-rouge">&lt;h6&gt;</code>, are available.
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <h1>h1. Bootstrap heading</h1>
                    <h2>h2. Bootstrap heading</h2>
                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lead</h4>
                    <p class="text-muted mb-0">Make a paragraph stand out by adding <code class="highlighter-rouge">.lead</code>.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <p class="lead mb-0">
                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                    </p>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="font-16">
                        <code>font-family : 'Roboto', sans-serif; </code>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Display Headings</h4>
                    <p class="text-muted mb-0">Traditional heading elements are designed to work best in the meat of your page content. </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <h1 class="display-1">Display 1</h1>
                    <h1 class="display-2">Display 2</h1>
                    <h1 class="display-3">Display 3</h1>
                    <h1 class="display-4">Display 4</h1>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blockquotes</h4>
                    <p class="text-muted mb-0">For quoting blocks of content from
                        another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote
                            class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer font-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>

                    <blockquote class="blockquote blockquote-reverse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer font-14">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>

                    <blockquote class="blockquote blockquote-reverse mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer font-14 text-right">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inline text elements</h4>
                    <p class="text-muted mb-0">Styling for common inline HTML5 elements.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <h4 class="mt-0 header-title">Inline text elements</h4>
                    <p class="text-muted mb-4">Styling for common inline HTML5 elements.</p>
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                    <p><u>This line of text will render as underlined</u></p>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                    <p><strong>This line rendered as bold text.</strong></p>
                    <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Unorder List</h4>
                            <p class="text-muted mb-0">Bootstrap unorder list style</p>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <ul class="mb-0">
                                <li>Integer molestie lorem at massa</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                            </ul>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order List</h4>
                            <p class="text-muted mb-0">Bootstrap order list style</p>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <ol class="mb-0">
                                <li>Integer molestie lorem at massa</li>
                                <li>Nulla volutpat aliquam velit </li>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Faucibus porta lacus fringilla vel</li>
                            </ol>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Unstyleed List</h4>
                            <p class="text-muted mb-0">Bootstrap unstyled list style</p>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <ul class="mb-0 list-unstyled">
                                <li>Integer molestie lorem at massa</li>
                                <li>Nulla volutpat aliquam velit </li>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Faucibus porta lacus fringilla vel</li>
                            </ul>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inline List</h4>
                            <p class="text-muted mb-0">Bootstrap inline list style</p>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Lorem ipsum</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Phasellus iaculis</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Nulla volutpat</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Lorem ipsum</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Phasellus iaculis</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Nulla volutpat</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Lorem ipsum</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Phasellus iaculis</li>
                                <li class="list-inline-item"><i class="mdi mdi-circle-outline font-13 text-success me-1"></i>Nulla volutpat</li>
                            </ul>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Colors</h4>
                    <p class="text-muted mb-0">Convey meaning through color with a handful of color utility classes.
                        Includes support for styling links with hover states, too.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <p class="text-primary">.text-primary</p>
                    <p class="text-secondary">.text-secondary</p>
                    <p class="text-success">.text-success</p>
                    <p class="text-danger">.text-danger</p>
                    <p class="text-warning">.text-warning</p>
                    <p class="text-info">.text-info</p>
                    <p class="text-light bg-dark">.text-light</p>
                    <p class="text-dark">.text-dark</p>
                    <p class="text-body">.text-body</p>
                    <p class="text-muted">.text-muted</p>
                    <p class="text-white bg-dark">.text-white</p>
                    <p class="text-black-50">.text-black-50</p>
                    <p class="text-white-50 bg-dark">.text-white-50</p>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Description list alignment</h4>
                    <p class="text-muted mb-0">Align terms and descriptions
                        horizontally by using our grid system’s predefined classes (or semantic
                        mixins). For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class to
                        truncate the text with an ellipsis.
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9 mb-0">
                            <dl class="row mb-0">
                                <dt class="col-sm-4">Nested definition list</dt>
                                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                            </dl>
                        </dd>
                    </dl>
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
