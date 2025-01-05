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
        <style>
            .chat-box {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 300px;
                height: 400px;
                background-color: #ffffff;
                border: 1px solid #ccc;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                display: none;
                flex-direction: column;
            }
    
            .chat-header {
                background-color: #007bff;
                color: white;
                padding: 10px;
                text-align: center;
                border-radius: 8px 8px 0 0;
                position: relative;
            }
    
            .chat-header button {
                position: absolute;
                top: 5px;
                right: 10px;
                background: none;
                border: none;
                color: white;
                font-size: 20px;
                cursor: pointer;
            }
    
            .chat-messages {
                flex: 1;
                padding: 10px;
                overflow-y: auto;
                border-bottom: 1px solid #ccc;
            }
    
            .chat-message {
                margin-bottom: 10px;
                padding: 8px;
                border-radius: 8px;
            }
    
            .chat-message.user {
                background-color: #e1f5fe;
                align-self: flex-end;
            }
    
            .chat-message.admin {
                background-color: #fff3e0;
                align-self: flex-start;
            }
    
            .chat-input {
                padding: 10px;
                display: flex;
                gap: 10px;
            }
    
            .chat-input input {
                flex: 1;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
    
            .chat-input button {
                padding: 8px 12px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
    
            .chat-input button:hover {
                background-color: #0056b3;
            }
    
            .live-chat {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #007bff;
                color: #fff;
                border-radius: 50%;
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                cursor: pointer;
                transition: transform 0.2s;
            }
    
            .live-chat:hover {
                transform: scale(1.1);
            }
        </style>
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