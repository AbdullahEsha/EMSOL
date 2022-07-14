<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      name="description"
      content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
    />
    <meta
      name="keywords"
      content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app"
    />
    <meta name="author" content="PIXINVENT" />
    <title>
      Dashboard eCommerce - Stack Responsive Bootstrap 4 Admin Template
    </title>
    <link
      rel="apple-touch-icon"
      href="{{asset('admin/images/ico/apple-icon-120.png')}}"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('admin/images/ico/favicon.ico')}}"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/vendors.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/extensions/unslider.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/weather-icons/climacons.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/fonts/meteocons/style.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/charts/morris.css')}}"
    />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/bootstrap.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/bootstrap-extended.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/colors.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/components.css')}}"
    />
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/core/menu/menu-types/vertical-menu.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/core/colors/palette-gradient.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/fonts/simple-line-icons/style.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/css/pages/timeline.css')}}"
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}" />
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->

  <body
    class="vertical-layout vertical-menu 2-columns fixed-navbar"
    data-open="click"
    data-menu="vertical-menu"
    data-col="2-columns"
  >
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
        <div class="content-header row"></div>
        <div class="content-body">
          <!-- Stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-primary bg-darken-2">
                      <i class="icon-camera font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-primary white media-body">
                      <h5>Products</h5>
                      <h5 class="text-bold-400 mb-0">
                        <i class="feather icon-plus"></i> 28
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-danger bg-darken-2">
                      <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-danger white media-body">
                      <h5>New Users</h5>
                      <h5 class="text-bold-400 mb-0">
                        <i class="feather icon-arrow-up"></i> 1,238
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-warning bg-darken-2">
                      <i class="icon-basket-loaded font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-warning white media-body">
                      <h5>New Orders</h5>
                      <h5 class="text-bold-400 mb-0">
                        <i class="feather icon-arrow-down"></i> 4,658
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-success bg-darken-2">
                      <i class="icon-wallet font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-success white media-body">
                      <h5>Total Profit</h5>
                      <h5 class="text-bold-400 mb-0">
                        <i class="feather icon-arrow-up"></i> 5.6 M
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Stats -->
          <!--Product sale & buyers -->
          <div class="row match-height">
            <div class="col-xl-8 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Products Sales</h4>
                  <a class="heading-elements-toggle"
                    ><i class="fa fa-ellipsis-v font-medium-3"></i
                  ></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="reload"
                          ><i class="feather icon-rotate-cw"></i
                        ></a>
                      </li>
                      <li>
                        <a data-action="expand"
                          ><i class="feather icon-maximize"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <div id="products-sales" class="height-300"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Recent Buyers</h4>
                  <a class="heading-elements-toggle"
                    ><i class="fa fa-ellipsis-v font-medium-3"></i
                  ></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="reload"
                          ><i class="feather icon-rotate-cw"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content px-1">
                  <div
                    id="recent-buyers"
                    class="media-list height-300 position-relative"
                  >
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <div class="avatar avatar-online avatar-md">
                          <img
                            class="media-object rounded-circle"
                            src="../app-assets/images/portrait/small/avatar-s-7.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body w-100">
                        <h6 class="list-group-item-heading">
                          Kristopher Candy
                          <span class="font-medium-4 float-right pt-1"
                            >$1,021</span
                          >
                        </h6>
                        <p class="list-group-item-text mb-0">
                          <span class="badge badge-primary">Electronics</span
                          ><span class="badge badge-warning ml-1">Decor</span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <div class="avatar avatar-away avatar-md">
                          <img
                            class="media-object rounded-circle"
                            src="../app-assets/images/portrait/small/avatar-s-8.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body w-100">
                        <h6 class="list-group-item-heading">
                          Lawrence Fowler
                          <span class="font-medium-4 float-right pt-1"
                            >$2,021</span
                          >
                        </h6>
                        <p class="list-group-item-text mb-0">
                          <span class="badge badge-danger">Appliances</span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <div class="avatar avatar-busy avatar-md">
                          <img
                            class="media-object rounded-circle"
                            src="../app-assets/images/portrait/small/avatar-s-9.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body w-100">
                        <h6 class="list-group-item-heading">
                          Linda Olson
                          <span class="font-medium-4 float-right pt-1"
                            >$1,112</span
                          >
                        </h6>
                        <p class="list-group-item-text mb-0">
                          <span class="badge badge-primary">Electronics</span>
                          <span class="badge badge-success ml-1">Office</span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <div class="avatar avatar-online avatar-md">
                          <img
                            class="media-object rounded-circle"
                            src="../app-assets/images/portrait/small/avatar-s-10.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body w-100">
                        <h6 class="list-group-item-heading">
                          Roy Clark
                          <span class="font-medium-4 float-right pt-1"
                            >$2,815</span
                          >
                        </h6>
                        <p class="list-group-item-text mb-0">
                          <span class="badge badge-warning">Decor</span>
                          <span class="badge badge-danger ml-1"
                            >Appliances</span
                          >
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <div class="avatar avatar-online avatar-md">
                          <img
                            class="media-object rounded-circle"
                            src="../app-assets/images/portrait/small/avatar-s-11.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body w-100">
                        <h6 class="list-group-item-heading">
                          Kristopher Candy
                          <span class="font-medium-4 float-right pt-1"
                            >$2,021</span
                          >
                        </h6>
                        <p class="list-group-item-text mb-0">
                          <span class="badge badge-primary">Electronics</span
                          ><span class="badge badge-warning ml-1">Decor</span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <div class="avatar avatar-away avatar-md">
                          <img
                            class="media-object rounded-circle"
                            src="../app-assets/images/portrait/small/avatar-s-12.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body w-100">
                        <h6 class="list-group-item-heading">
                          Lawrence Fowler
                          <span class="font-medium-4 float-right pt-1"
                            >$1,321</span
                          >
                        </h6>
                        <p class="list-group-item-text mb-0">
                          <span class="badge badge-danger">Appliances</span>
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Product sale & buyers -->
          <!--Recent Orders & Monthly Salse -->
          <div class="row match-height">
            <div class="col-xl-8 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Recent Orders</h4>
                  <a class="heading-elements-toggle"
                    ><i class="fa fa-ellipsis-v font-medium-3"></i
                  ></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="reload"
                          ><i class="feather icon-rotate-cw"></i
                        ></a>
                      </li>
                      <li>
                        <a data-action="expand"
                          ><i class="feather icon-maximize"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <p>
                      Total paid invoices 240, unpaid 150.
                      <span class="float-right"
                        ><a href="project-summary.html" target="_blank"
                          >Invoice Summary
                          <i class="feather icon-arrow-right"></i></a
                      ></span>
                    </p>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="recent-orders"
                      class="table table-hover mb-0 ps-container ps-theme-default"
                    >
                      <thead>
                        <tr>
                          <th>SKU</th>
                          <th>Invoice#</th>
                          <th>Customer Name</th>
                          <th>Status</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-truncate">PO-10521</td>
                          <td class="text-truncate">
                            <a href="#">INV-001001</a>
                          </td>
                          <td class="text-truncate">Elizabeth W.</td>
                          <td class="text-truncate">
                            <span class="badge badge-success">Paid</span>
                          </td>
                          <td class="text-truncate">$ 1200.00</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">PO-532521</td>
                          <td class="text-truncate">
                            <a href="#">INV-01112</a>
                          </td>
                          <td class="text-truncate">Doris R.</td>
                          <td class="text-truncate">
                            <span class="badge badge-warning">Overdue</span>
                          </td>
                          <td class="text-truncate">$ 5685.00</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">PO-05521</td>
                          <td class="text-truncate">
                            <a href="#">INV-001012</a>
                          </td>
                          <td class="text-truncate">Andrew D.</td>
                          <td class="text-truncate">
                            <span class="badge badge-success">Paid</span>
                          </td>
                          <td class="text-truncate">$ 152.00</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">PO-15521</td>
                          <td class="text-truncate">
                            <a href="#">INV-001401</a>
                          </td>
                          <td class="text-truncate">Megan S.</td>
                          <td class="text-truncate">
                            <span class="badge badge-success">Paid</span>
                          </td>
                          <td class="text-truncate">$ 1450.00</td>
                        </tr>
                        <tr>
                          <td class="text-truncate">PO-32521</td>
                          <td class="text-truncate">
                            <a href="#">INV-008101</a>
                          </td>
                          <td class="text-truncate">Walter R.</td>
                          <td class="text-truncate">
                            <span class="badge badge-warning">Overdue</span>
                          </td>
                          <td class="text-truncate">$ 685.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body sales-growth-chart">
                    <div id="monthly-sales" class="height-250"></div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chart-title mb-1 text-center">
                    <h6>Total monthly Sales.</h6>
                  </div>
                  <div class="chart-stats text-center">
                    <a href="#" class="btn btn-sm btn-primary mr-1"
                      >Statistics <i class="feather icon-bar-chart"></i
                    ></a>
                    <span class="text-muted">for the last year.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/Recent Orders & Monthly Salse -->
          <!-- Social & Weather -->
          <div class="row match-height">
            <div class="col-xl-4 col-lg-12">
              <div class="card bg-gradient-x-danger">
                <div class="card-content">
                  <div class="card-body">
                    <div class="animated-weather-icons text-center float-left">
                      <svg
                        version="1.1"
                        id="cloudHailAlt2"
                        class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-100"
                        viewBox="15 15 70 70"
                      >
                        <g
                          class="climacon_iconWrap climacon_iconWrap-cloudHailAlt"
                        >
                          <g
                            class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt"
                          >
                            <g
                              class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left"
                            >
                              <circle cx="42" cy="65.498" r="2"></circle>
                            </g>
                            <g
                              class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle"
                            >
                              <circle cx="49.999" cy="65.498" r="2"></circle>
                            </g>
                            <g
                              class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right"
                            >
                              <circle cx="57.998" cy="65.498" r="2"></circle>
                            </g>
                            <g
                              class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left"
                            >
                              <circle cx="42" cy="65.498" r="2"></circle>
                            </g>
                            <g
                              class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle"
                            >
                              <circle cx="49.999" cy="65.498" r="2"></circle>
                            </g>
                            <g
                              class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right"
                            >
                              <circle cx="57.998" cy="65.498" r="2"></circle>
                            </g>
                          </g>
                          <g
                            class="climacon_wrapperComponent climacon_wrapperComponent-cloud"
                          >
                            <path
                              class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                              d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"
                            ></path>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="weather-details text-center">
                      <span class="block white darken-1">Snow</span>
                      <span class="font-large-2 block white darken-4"
                        >-5&deg;</span
                      >
                      <span class="font-medium-4 text-bold-500 white darken-1"
                        >London, UK</span
                      >
                    </div>
                  </div>
                  <div class="card-footer bg-gradient-x-danger border-0">
                    <div class="row">
                      <div class="col-4 text-center display-table-cell white">
                        <i
                          class="me-wind font-large-1 lighten-3 align-middle"
                        ></i>
                        <span class="align-middle">2MPH</span>
                      </div>
                      <div class="col-4 text-center display-table-cell white">
                        <i
                          class="me-sun2 font-large-1 lighten-3 align-middle"
                        ></i>
                        <span class="align-middle">2%</span>
                      </div>
                      <div class="col-4 text-center display-table-cell white">
                        <i
                          class="me-thermometer font-large-1 lighten-3 align-middle"
                        ></i>
                        <span class="align-middle">13.0&deg;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card bg-gradient-x-info white">
                <div class="card-content">
                  <div class="card-body text-center">
                    <div class="mb-2">
                      <i class="fa fa-twitter font-large-2"></i>
                    </div>
                    <div class="tweet-slider">
                      <ul>
                        <li>
                          Congratulations to Rob Jones in accounting for winning
                          our <span class="yellow">#NFL</span> football pool!
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                        <li>
                          Contests are a great thing to partner on. Partnerships
                          immediately <span class="yellow">#DOUBLE</span> the
                          reach.
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                        <li>
                          Puns, humor, and quotes are great content on
                          <span class="yellow">#Twitter</span>. Find some
                          related to your business.
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                        <li>
                          Are there
                          <span class="yellow">#common-sense</span> facts
                          related to your business? Combine them with a great
                          photo.
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card bg-gradient-x-primary white">
                <div class="card-content">
                  <div class="card-body text-center">
                    <div class="mb-2">
                      <i class="fa fa-facebook font-large-2"></i>
                    </div>
                    <div class="fb-post-slider">
                      <ul>
                        <li>
                          Congratulations to Rob Jones in accounting for winning
                          our #NFL football pool!
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                        <li>
                          Contests are a great thing to partner on. Partnerships
                          immediately #DOUBLE the reach.
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                        <li>
                          Puns, humor, and quotes are great content on #Twitter.
                          Find some related to your business.
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                        <li>
                          Are there #common-sense facts related to your
                          business? Combine them with a great photo.
                          <p class="text-italic pt-1">- John Doe</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Social & Weather -->
          <!-- Basic Horizontal Timeline -->
          <div class="row match-height">
            <div class="col-xl-8 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Horizontal Timeline</h4>
                  <a class="heading-elements-toggle"
                    ><i class="fa fa-ellipsis-v font-medium-3"></i
                  ></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="reload"
                          ><i class="feather icon-rotate-cw"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <div class="card-text">
                      <section class="cd-horizontal-timeline">
                        <div class="timeline">
                          <div class="events-wrapper">
                            <div class="events">
                              <ol>
                                <li>
                                  <a
                                    href="#0"
                                    data-date="16/01/2015"
                                    class="selected"
                                    >16 Jan</a
                                  >
                                </li>
                                <li>
                                  <a href="#0" data-date="28/02/2015">28 Feb</a>
                                </li>
                                <li>
                                  <a href="#0" data-date="20/04/2015">20 Mar</a>
                                </li>
                                <li>
                                  <a href="#0" data-date="20/05/2015">20 May</a>
                                </li>
                                <li>
                                  <a href="#0" data-date="09/07/2015">09 Jul</a>
                                </li>
                                <li>
                                  <a href="#0" data-date="30/08/2015">30 Aug</a>
                                </li>
                                <li>
                                  <a href="#0" data-date="15/09/2015">15 Sep</a>
                                </li>
                              </ol>
                              <span
                                class="filling-line"
                                aria-hidden="true"
                              ></span>
                            </div>
                            <!-- .events -->
                          </div>
                          <!-- .events-wrapper -->
                          <ul class="cd-timeline-navigation">
                            <li><a href="#0" class="prev inactive">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                          </ul>
                          <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                          <ol>
                            <li class="selected" data-date="16/01/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-5.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                            <li data-date="28/02/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-6.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                            <li data-date="20/04/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-7.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                            <li data-date="20/05/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-8.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                            <li data-date="09/07/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-9.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                            <li data-date="30/08/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-6.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                            <li data-date="15/09/2015">
                              <blockquote class="blockquote border-0">
                                <div class="media">
                                  <div class="media-left">
                                    <img
                                      class="media-object img-xl mr-1"
                                      src="../app-assets/images/portrait/small/avatar-s-7.png"
                                      alt="Generic placeholder image"
                                    />
                                  </div>
                                  <div class="media-body">
                                    Sometimes life is going to hit you in the
                                    head with a brick. Don't lose faith.
                                  </div>
                                </div>
                                <footer class="blockquote-footer text-right">
                                  Steve Jobs
                                  <cite title="Source Title">Entrepreneur</cite>
                                </footer>
                              </blockquote>
                              <p class="lead mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla
                                adipisci? Consequuntur aspernatur at.
                              </p>
                            </li>
                          </ol>
                        </div>
                        <!-- .events-content -->
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Basic Card</h4>
                </div>
                <div class="card-content">
                  <img
                    class="img-fluid"
                    src="../app-assets/images/carousel/06.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
                <div
                  class="card-footer border-top-blue-grey border-top-lighten-5 text-muted"
                >
                  <span class="float-left">3 hours ago</span>
                  <span class="float-right">
                    <a href="#" class="card-link"
                      >Read More <i class="fa fa-angle-right"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!--/ Basic Horizontal Timeline -->
        </div>
      </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block"
          >Copyright &copy; 2020
          <a
            class="text-bold-800 grey darken-2"
            href="https://1.envato.market/pixinvent_portfolio"
            target="_blank"
            >PIXINVENT
          </a></span
        ><span class="float-md-right d-none d-lg-block"
          >Hand-crafted & Made with <i class="feather icon-heart pink"></i
        ></span>
      </p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/extensions/unslider-min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin/js/core/app-menu.js')}}"></script>
    <script src="{{asset('admin/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->
  </body>
  <!-- END: Body-->
</html>
