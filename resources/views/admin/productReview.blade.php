<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <title>
        Responsive Datatable
    </title>
    <link rel="apple-touch-icon" href="{{asset('admin/images/ico/apple-icon-120.png')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/images/ico/favicon.ico')}}" />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/vendors.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/tables/datatable/datatables.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('admin/vendors/css/tables/extensions/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('admin/vendors/css/tables/extensions/colReorder.dataTables.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('admin/vendors/css/tables/extensions/buttons.dataTables.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('admin/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('admin/vendors/css/tables/extensions/fixedHeader.dataTables.min.css')}}" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-extended.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/colors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/components.css')}}" />
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/core/menu/menu-types/vertical-menu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/core/colors/palette-gradient.css')}}" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">
    <!-- BEGIN: Header-->
    @include('admin.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('admin.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Responsive Datatable</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">DataTables</a></li>
                                <li class="breadcrumb-item active">Responsive Datatable</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right"
                                id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="feather icon-settings icon-left"></i> Settings
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a
                                    class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a>
                            </div>
                        </div>
                        <a class="btn btn-outline-primary" href="full-calender-basic.html"><i
                                class="feather icon-mail"></i></a><a class="btn btn-outline-primary"
                            href="timeline-center.html"><i class="feather icon-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-body">


                <!-- Modal details display -->
                <section id="modal">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal details display</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="feather icon-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="feather icon-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="expand"><i class="feather icon-maximize"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="feather icon-x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dataex-res-modal">
                                            <thead>
                                                <th>id</th>
                                                <th>productDetail</th>
                                                <th>price</th>
                                                <th>stock</th>
                                                <th>status</th>
                                                <th>created_at</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                                @for($i=0; $i < count($productReviewData); $i++) <tr id="rows">
                                                    <td>{{$i + 1}}</td>
                                                    <td>
                                                        <div style="width:200px">
                                                            {{$productReviewData[$i]['productDetail']}}
                                                        </div>
                                                    </td>
                                                    <td>{{$productReviewData[$i]['price']}}</td>
                                                    <td>{{$productReviewData[$i]['stock']}}</td>
                                                    <td>{{$productReviewData[$i]['status']}}</td>
                                                    <td>{{date('d M Y',
                                                        strtotime($productReviewData[$i]['created_at']))}}</td>
                                                    <td>
                                                        <a href="/admin/product-review/{{$productReviewData[$i]['id']}}"
                                                            class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                                                    </td>
                                                    </tr>
                                                    @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Modal details display -->
                <!-- `new` constructor table -->
                <section id="constructor" style="visibility: hidden">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">`new` constructor</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <!-- <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"><i class="feather icon-minus"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="reload"><i class="feather icon-rotate-cw"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="expand"><i class="feather icon-maximize"></i></a>
                                            </li>
                                            <li>
                                                <a data-action="close"><i class="feather icon-x"></i></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">
                                        </p>
                                        <table class="table table-striped table-bordered dataex-res-constructor">
                                            <thead>
                                                <tr>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- `new` constructor table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020
                <a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">PIXINVENT
                </a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i
                    class="feather icon-heart pink"></i></span>
        </p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.fixedHeader.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin/js/core/app-menu.js')}}"></script>
    <script src="{{asset('admin/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin/js/scripts/tables/datatables-extensions/datatable-responsive.js')}}"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>


<!-- ==================================================== -->
<!-- <table id="users-contacts"
    class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
    <thead>
        <tr>
            
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table> -->