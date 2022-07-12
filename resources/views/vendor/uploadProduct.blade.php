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
  <title>Invoice Add - Stack Responsive Bootstrap 4 Admin Template</title>
  <link rel="apple-touch-icon" href="{{asset('admin/images/ico/apple-icon-120.png')}}" />
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/images/ico/favicon.ico')}}" />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/vendors.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/pickers/pickadate/pickadate.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/forms/toggle/switchery.min.css')}}" />
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
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/pages/app-invoice.css')}}" />
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}" />
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu"
  data-col="2-columns">
  <!-- BEGIN: Header-->
  @include('vendor.header')
  <!-- END: Header-->

  <!-- BEGIN: Main Menu-->
  @include('vendor.menu')
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <section class="row all-contacts">
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">Product</h4>
              <a class="heading-elements-toggle"><i class="feather icon-align-justify font-medium-3"></i></a>
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
              <div class="card-body">

                <form method='POST' action="" enctype=multipart/form-data>
                  @csrf
                  <div class="form-body">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Product Details </label>
                          <input type="text" name="productDetail" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label>Image 1</label>
                          <input type="file" name="img1" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label>Image 2</label>
                          <input type="file" name="img2" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label>Image 3</label>
                          <input type="file" name="img3" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label>Image 4</label>
                          <input type="file" name="img4" class="form-control" />
                        </div>

                        <div class="form-group">
                          <label>Price </label>
                          <input type="text" name="price" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label>Stock </label>
                          <input type="text" name="stock" class="form-control" />
                        </div>
                        <div align="right">
                          <button class="btn btn-outline-info" type="submit">
                            Submit
                          </button>
                        </div>
                      </div>
                      <br />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <!-- <button
                        type="button"
                        class="btn btn-danger btn-sm delete-all mb-1"
                      > 
                        Delete All
                      </button>-->

            </div>
          </div>
        </div>
      </div>
    </section>
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
  <script src="{{asset('admin/vendors/js/pickers/pickadate/picker.js')}}"></script>
  <script src="{{asset('admin/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
  <script src="{{asset('admin/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
  <script src="{{asset('admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script>
  <script src="{{asset('admin/vendors/js/forms/toggle/switchery.min.js')}}"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{asset('admin/js/core/app-menu.js')}}"></script>
  <script src="{{asset('admin/js/core/app.js')}}"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="{{asset('admin/js/scripts/pages/app-invoice.js')}}"></script>
  <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>