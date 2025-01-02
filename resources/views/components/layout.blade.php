<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Bunda Peduli</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/src/images/kogo bidan.jpg') }}">


        <!-- App css -->
        <link href="{{ asset('admin/dist/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{ asset('admin/dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body data-menu-color="dark" data-sidebar="default">

        <!-- Begin page -->
        <div id="app-layout">

        <!-- Navbar -->
        @include('components.navbar')
        <!-- Navbar End -->

        <!-- Sidebar -->
        @include('components.sidebar')
        <!-- Sidebar End -->

        <!-- Content -->
        <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-xxl">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h1 class="fs-30 fw-bold m-0">{{ $header_name }}</h1>
                                <h4 class="fs-20 fw-normal m-0">{{ $subheader_name }}</h4>
                                <h4 class="fs-16 fw-normal m-0">{{ $subsubheader_name }}</h4>
                            </div>
                        </div>
                          <!-- Main content -->
                            <section class="content">

                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                <h3 class="card-title">{{ $title }}</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                </div>
                                <div class="card-body">
                                {{ $main_content }}
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                {{ $footer }}
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->

                            </section>
                            <!-- /.content -->
                    </div> <!-- container-fluid -->
                </div> <!-- content -->

                <!-- Footer Start -->
                @include('components.footer')
                <!-- end Footer -->

        </div>
        <!-- Content End -->

        </div>
        <!-- END wrapper -->

         <!-- Vendor -->
         <script src="{{ asset('admin/dist/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/dist/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/dist/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('admin/dist/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('admin/dist/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('admin/dist/assets/libs/feather-icons/feather.min.js') }}"></script>

        <!-- Apexcharts JS -->
        <script src="{{ asset('admin/dist/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- for basic area chart -->
        <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

        <!-- Widgets Init Js -->
        <script src="{{ asset('admin/dist/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('admin/dist/assets/js/app.js') }}"></script>
        
    </body>
</html>