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
  <title>Contacts - Stack Responsive Bootstrap 4 Admin Template</title>
  <link rel="apple-touch-icon" href="{{asset('admin/images/ico/apple-icon-120.png')}}" />
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/images/ico/favicon.ico')}}" />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/vendors.min.css')}}" />
  <link rel="stylesheet" type="text/css"
    href="{{asset('admin/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}" />
  <link rel="stylesheet" type="text/css"
    href="{{asset('admin/vendors/css/tables/extensions/rowReorder.dataTables.min.css')}}" />
  <link rel="stylesheet" type="text/css"
    href="{{asset('admin/vendors/css/tables/extensions/responsive.dataTables.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/forms/icheck/icheck.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/forms/icheck/custom.css')}}" />
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
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/pages/app-contacts.css')}}" />
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}" />
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu content-detached-left-sidebar app-contacts fixed-navbar" data-open="click"
  data-menu="vertical-menu" data-col="content-detached-left-sidebar">
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
      <div class="content-body">
        <section class="row all-contacts">
          <div class="col-12">
            <div class="card">
              <div class="card-head">
                <div class="card-header">
                  <h4 class="card-title">User List</h4>
                  <div class="heading-elements mt-0">
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#AddContactModal">
                      <i class="d-md-none d-block feather icon-plus white"></i>
                      <span class="d-md-block d-none">Add User</span>
                    </button>
                    <div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <section class="contact-form">
                            <form id="form-add-contact" class="contact-input">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">
                                  Add New Contact
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <fieldset class="form-group col-12">
                                  <input type="text" id="contact-name" class="contact-name form-control"
                                    placeholder="Name" />
                                </fieldset>
                                <fieldset class="form-group col-12">
                                  <input type="text" id="contact-email" class="contact-email form-control"
                                    placeholder="Email" />
                                </fieldset>
                                <fieldset class="form-group col-12">
                                  <input type="text" id="contact-phone" class="contact-phone form-control"
                                    placeholder="Phone Number" />
                                </fieldset>
                                <fieldset class="form-group col-12">
                                  <input type="checkbox" id="favorite" class="contact-fav input-chk" />
                                  Favorite
                                </fieldset>
                                <fieldset class="form-group col-12">
                                  <input type="file" class="form-control-file" id="user-image" />
                                </fieldset>
                              </div>
                              <div class="modal-footer">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <button type="button" id="add-contact-item" class="btn btn-info add-contact-item"
                                    data-dismiss="modal">
                                    <i class="fa fa-paper-plane-o d-block d-lg-none"></i>
                                    <span class="d-none d-lg-block">Add New</span>
                                  </button>
                                </fieldset>
                              </div>
                            </form>
                          </section>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="EditContactModal" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <section class="contact-form">
                            <form id="form-edit-contact" class="contact-input">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Edit Contact
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <fieldset class="form-group col-12">
                                  <input type="text" id="name" class="name form-control" placeholder="Name" />
                                </fieldset>
                                <fieldset class="form-group col-12">
                                  <input type="text" id="email" class="email form-control" placeholder="Email" />
                                </fieldset>
                                <fieldset class="form-group col-12">
                                  <input type="text" id="phone" class="phone form-control" placeholder="Phone Number" />
                                </fieldset>
                                <span id="fav" class="d-none"></span>
                              </div>
                              <div class="modal-footer">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <button type="button" id="edit-contact-item" class="btn btn-info edit-contact-item"
                                    data-dismiss="modal">
                                    <i class="fa fa-paper-plane-o d-lg-none"></i>
                                    <span class="d-none d-lg-block">Edit</span>
                                  </button>
                                </fieldset>
                              </div>
                            </form>
                          </section>
                        </div>
                      </div>
                    </div>
                    <span class="dropdown">
                      <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true" class="btn btn-warning dropdown-menu-right dropdown-toggle btn-md">
                        <i class="feather icon-download-cloud white"></i>
                      </button>
                      <span aria-labelledby="btnSearchDrop1" class="dropdown-menu dropdown-menu-right mt-1">
                        <a href="#" class="dropdown-item"><i class="feather icon-upload"></i> Import</a>
                        <a href="#" class="dropdown-item"><i class="feather icon-download"></i> Export</a>
                        <a href="#" class="dropdown-item"><i class="feather icon-shuffle"></i> Find
                          Duplicate</a>
                      </span>
                    </span>
                    <button class="btn btn-default btn-sm">
                      <i class="feather icon-settings white"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <!-- Task List table -->
                  <button type="button" class="btn btn-danger btn-sm delete-all mb-1">
                    Delete All
                  </button>
                  <div class="table-responsive">
                    <table id="users-contacts"
                      class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
                      <thead>
                        <tr>
                          <th>
                            <input type="checkbox" class="input-chk" id="check-all" onclick="toggle();" />
                          </th>
                          <th>id</th>
                          <th>name</th>
                          <th>phone</th>
                          <th>email</th>
                          <th>img</th>
                          <th>userType</th>
                          <th>created_at</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @for($i=0; $i < count($userData); $i++) <tr id="rows">
                          <td>
                            <input type="checkbox" class="input-chk check" />
                          </td>
                          <td>{{$userData[$i]['id']}}</td>
                          <td>{{$userData[$i]['name']}}</td>
                          <td>{{$userData[$i]['phone']}}</td>
                          <td>{{$userData[$i]['email']}}</td>
                          <td>{{$userData[$i]['img']}}</td>
                          <td>{{$userData[$i]['userType']}}</td>
                          <td>{{date('d M Y', strtotime($userData[$i]['created_at']))}}</td>
                          <td>
                            <a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i
                                class="fa fa-pencil"></i></a>

                            <!-- <span class="dropdown">
                          <a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                            class="dropdown-toggle dropdown-menu-right"><i class="fa fa-ellipsis-v"></i></a>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i
                                class="feather icon-edit-2"></i>
                              Edit</a>
                            <a href="#" class="dropdown-item delete"><i class="feather icon-trash-2"></i>
                              Delete</a>
                            <a href="#" class="dropdown-item"><i class="feather icon-plus-circle primary"></i>
                              Projects</a>
                            <a href="#" class="dropdown-item"><i class="feather icon-plus-circle info"></i>
                              Team</a>
                            <a href="#" class="dropdown-item"><i class="feather icon-plus-circle warning"></i>
                              Clients</a>
                            <a href="#" class="dropdown-item"><i class="feather icon-plus-circle success"></i>
                              Friends</a>
                          </span>
                        </span> -->
                          </td>
                          </tr>
                          @endfor
                      </tbody>
                    </table>
                    <!-- <div id="editor">
                  <p>
                    This is the editor content.

                  </p>
                </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
    <script src="{{asset('admin/vendors/js/tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/extensions/jquery.raty.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('editor');

      var editor = CKEDITOR.replace('editor');
      // The "change" event is fired whenever a change is made in the editor.
      editor.on('change', function(evt) {
        console.log('Total bytes: ' + evt.editor.getData().length);
      });
    </script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin/js/core/app-menu.js')}}"></script>
    <script src="{{asset('admin/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin/js/scripts/pages/app-contacts.js')}}"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->


</body>
<!-- END: Body-->

</html>