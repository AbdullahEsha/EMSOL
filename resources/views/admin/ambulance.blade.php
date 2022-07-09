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
    <title>Contacts - Stack Responsive Bootstrap 4 Admin Template</title>
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
      href="{{asset('admin/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/tables/extensions/rowReorder.dataTables.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/tables/extensions/responsive.dataTables.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/forms/icheck/icheck.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('admin/vendors/css/forms/icheck/custom.css')}}"
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
      href="{{asset('admin/css/pages/app-contacts.css')}}"
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}" />
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->

  <body
    class="vertical-layout vertical-menu content-detached-left-sidebar app-contacts fixed-navbar"
    data-open="click"
    data-menu="vertical-menu"
    data-col="content-detached-left-sidebar"
  >
    <!-- BEGIN: Header-->
    @include('vendor.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div
      class="main-menu menu-fixed menu-light menu-accordion menu-shadow"
      data-scroll-to-active="true"
    >
      <div class="main-menu-content">
        <ul
          class="navigation navigation-main"
          id="main-menu-navigation"
          data-menu="menu-navigation"
        >
          <li class="navigation-header">
            <span>General</span
            ><i
              class="feather icon-minus"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="General"
            ></i>
          </li>
          <li class="nav-item">
            <a href="index.html"
              ><i class="feather icon-home"></i
              ><span class="menu-title" data-i18n="Dashboard">Dashboard</span
              ><span
                class="badge badge badge-primary badge-pill float-right mr-2"
                >3</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="dashboard-ecommerce.html"
                  data-i18n="eCommerce"
                  >eCommerce</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="dashboard-analytics.html"
                  data-i18n="Analytics"
                  >Analytics</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="dashboard-fitness.html"
                  data-i18n="Fitness"
                  >Fitness</a
                >
              </li>
              <li>
                <a class="menu-item" href="dashboard-crm.html" data-i18n="CRM"
                  >CRM</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-monitor"></i
              ><span class="menu-title" data-i18n="Templates"
                >Templates</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="Vertical">Vertical</a>
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-modern-menu-template"
                      data-i18n="Modern Menu"
                      >Modern Menu</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-collapsed-menu-template"
                      data-i18n="Collapsed Menu"
                      >Collapsed Menu</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-menu-template"
                      data-i18n="Semi Light"
                      >Semi Light</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-menu-template-semi-dark"
                      data-i18n="Semi Dark"
                      >Semi Dark</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-menu-template-nav-dark"
                      data-i18n="Nav Dark"
                      >Nav Dark</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-menu-template-light"
                      data-i18n="Light"
                      >Light</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../vertical-overlay-menu-template"
                      data-i18n="Overlay Menu"
                      >Overlay Menu</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Horizontal"
                  >Horizontal</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="../horizontal-menu-template"
                      data-i18n="Classic"
                      >Classic</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../horizontal-menu-template-nav"
                      data-i18n="Nav Dark"
                      >Nav Dark</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-layout"></i
              ><span class="menu-title" data-i18n="Layouts">Layouts</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="Page Layouts"
                  >Page Layouts</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="layout-1-column.html"
                      data-i18n="1 column"
                      >1 column</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-2-columns.html"
                      data-i18n="2 columns"
                      >2 columns</a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="#" data-i18n="Sidebar"
                      >Sidebar</a
                    >
                    <ul class="menu-content">
                      <li>
                        <a
                          class="menu-item"
                          href="layout-content-detached-left-sidebar.html"
                          data-i18n="Detached left sidebar"
                          >Detached left sidebar</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="layout-content-detached-left-sticky-sidebar.html"
                          data-i18n="Detached sticky left sidebar"
                          >Detached sticky left sidebar</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="layout-content-detached-right-sidebar.html"
                          data-i18n="Detached right sidebar"
                          >Detached right sidebar</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="layout-content-detached-right-sticky-sidebar.html"
                          data-i18n="Detached sticky right sidebar"
                          >Detached sticky right sidebar</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="navigation-divider"></li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-fixed-navbar.html"
                      data-i18n="Fixed navbar"
                      >Fixed navbar</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-fixed-navigation.html"
                      data-i18n="Fixed navigation"
                      >Fixed navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-fixed-navbar-navigation.html"
                      data-i18n="Fixed navbar &amp; navigation"
                      >Fixed navbar &amp; navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-fixed-navbar-footer.html"
                      data-i18n="Fixed navbar &amp; footer"
                      >Fixed navbar &amp; footer</a
                    >
                  </li>
                  <li class="navigation-divider"></li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-fixed.html"
                      data-i18n="Fixed layout"
                      >Fixed layout</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-boxed.html"
                      data-i18n="Boxed layout"
                      >Boxed layout</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-static.html"
                      data-i18n="Static layout"
                      >Static layout</a
                    >
                  </li>
                  <li class="navigation-divider"></li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-light.html"
                      data-i18n="Light layout"
                      >Light layout</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-dark.html"
                      data-i18n="Dark layout"
                      >Dark layout</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="layout-semi-dark.html"
                      data-i18n="Semi dark layout"
                      >Semi dark layout</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Navbars">Navbars</a>
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-light.html"
                      data-i18n="Navbar Light"
                      >Navbar Light</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-dark.html"
                      data-i18n="Navbar Dark"
                      >Navbar Dark</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-semi-dark.html"
                      data-i18n="Navbar Semi Dark"
                      >Navbar Semi Dark</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-brand-center.html"
                      data-i18n="Brand Center"
                      >Brand Center</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-fixed-top.html"
                      data-i18n="Fixed Top"
                      >Fixed Top</a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="#" data-i18n="Hide on Scroll"
                      >Hide on Scroll</a
                    >
                    <ul class="menu-content">
                      <li>
                        <a
                          class="menu-item"
                          href="navbar-hide-on-scroll-top.html"
                          data-i18n="Hide on Scroll Top"
                          >Hide on Scroll Top</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="navbar-hide-on-scroll-bottom.html"
                          data-i18n="Hide on Scroll Bottom"
                          >Hide on Scroll Bottom</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-components.html"
                      data-i18n="Navbar Components"
                      >Navbar Components</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="navbar-styling.html"
                      data-i18n="Navbar Styling"
                      >Navbar Styling</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Vertical Nav"
                  >Vertical Nav</a
                >
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#" data-i18n="Navigation Types"
                      >Navigation Types</a
                    >
                    <ul class="menu-content">
                      <li>
                        <a
                          class="menu-item"
                          href="../vertical-menu-template"
                          data-i18n="Vertical Menu"
                          >Vertical Menu</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="../vertical-overlay-menu-template"
                          data-i18n="Vertical Overlay"
                          >Vertical Overlay</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-compact-menu.html"
                      data-i18n="Compact Menu"
                      >Compact Menu</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-fixed.html"
                      data-i18n="Fixed Navigation"
                      >Fixed Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-static.html"
                      data-i18n="Static Navigation"
                      >Static Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-light.html"
                      data-i18n="Navigation Light"
                      >Navigation Light</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-dark.html"
                      data-i18n="Navigation Dark"
                      >Navigation Dark</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-accordion.html"
                      data-i18n="Accordion Navigation"
                      >Accordion Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-collapsible.html"
                      data-i18n="Collapsible Navigation"
                      >Collapsible Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-flipped.html"
                      data-i18n="Flipped Navigation"
                      >Flipped Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-native-scroll.html"
                      data-i18n="Native scroll"
                      >Native scroll</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-right-side-icon.html"
                      data-i18n="Right side icons"
                      >Right side icons</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-bordered.html"
                      data-i18n="Bordered Navigation"
                      >Bordered Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-disabled-link.html"
                      data-i18n="Disabled Navigation"
                      >Disabled Navigation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-styling.html"
                      data-i18n="Navigation Styling"
                      >Navigation Styling</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="vertical-nav-tags-pills.html"
                      data-i18n="Tags &amp; Pills"
                      >Tags &amp; Pills</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Horizontal Nav"
                  >Horizontal Nav</a
                >
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#" data-i18n="Navigation Types"
                      >Navigation Types</a
                    >
                    <ul class="menu-content">
                      <li>
                        <a
                          class="menu-item"
                          href="../horizontal-menu-template"
                          data-i18n="Classic"
                          >Classic</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="../horizontal-menu-template-nav"
                          data-i18n="Nav Dark"
                          >Nav Dark</a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Dashboard"
                  >Page Headers</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="headers-breadcrumbs-basic.html"
                      data-i18n="Breadcrumbs basic"
                      >Breadcrumbs basic</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="headers-breadcrumbs-top.html"
                      data-i18n="Breadcrumbs top"
                      >Breadcrumbs top</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="headers-breadcrumbs-bottom.html"
                      data-i18n="Breadcrumbs bottom"
                      >Breadcrumbs bottom</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="headers-breadcrumbs-with-button.html"
                      data-i18n="Breadcrumbs with button"
                      >Breadcrumbs with button</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="headers-breadcrumbs-with-round-button.html"
                      data-i18n="Breadcrumbs with round button 2"
                      >Breadcrumbs with round button 2</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="headers-breadcrumbs-with-stats.html"
                      data-i18n="Breadcrumbs with stats"
                      >Breadcrumbs with stats</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Footers">Footers</a>
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="footer-light.html"
                      data-i18n="Footer Light"
                      >Footer Light</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="footer-dark.html"
                      data-i18n="Footer Dark"
                      >Footer Dark</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="footer-transparent.html"
                      data-i18n="Footer Transparent"
                      >Footer Transparent</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="footer-fixed.html"
                      data-i18n="Footer Fixed"
                      >Footer Fixed</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="footer-components.html"
                      data-i18n="Footer Components"
                      >Footer Components</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-zap"></i
              ><span class="menu-title" data-i18n="Starter kit"
                >Starter kit</span
              ><span
                class="badge badge badge-danger badge-pill float-right mr-2"
                >New</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-1-column.html"
                  data-i18n="1 column"
                  >1 column</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-2-columns.html"
                  data-i18n="2 columns"
                  >2 columns</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="#"
                  data-i18n="Content Detached Sidebar"
                  >Content Detached Sidebar</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="../starter-kit/ltr/vertical-menu-template/layout-content-detached-left-sidebar.html"
                      data-i18n="Detached left sidebar"
                      >Detached left sidebar</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../starter-kit/ltr/vertical-menu-template/layout-content-detached-left-sticky-sidebar.html"
                      data-i18n="Detached sticky left sidebar"
                      >Detached sticky left sidebar</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../starter-kit/ltr/vertical-menu-template/layout-content-detached-right-sidebar.html"
                      data-i18n="Detached right sidebar"
                      >Detached right sidebar</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="../starter-kit/ltr/vertical-menu-template/layout-content-detached-right-sticky-sidebar.html"
                      data-i18n="Detached sticky right sidebar"
                      >Detached sticky right sidebar</a
                    >
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-fixed-navbar.html"
                  data-i18n="Fixed navbar"
                  >Fixed navbar</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-fixed-navigation.html"
                  data-i18n="Fixed navigation"
                  >Fixed navigation</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-fixed-navbar-navigation.html"
                  data-i18n="Fixed navbar &amp; navigation"
                  >Fixed navbar &amp; navigation</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-fixed-navbar-footer.html"
                  data-i18n="Fixed navbar &amp; footer"
                  >Fixed navbar &amp; footer</a
                >
              </li>
              <li class="navigation-divider"></li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-fixed.html"
                  data-i18n="Fixed layout"
                  >Fixed layout</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-boxed.html"
                  data-i18n="Boxed layout"
                  >Boxed layout</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-static.html"
                  data-i18n="Static layout"
                  >Static layout</a
                >
              </li>
              <li class="navigation-divider"></li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-light.html"
                  data-i18n="Light layout"
                  >Light layout</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-dark.html"
                  data-i18n="Dark layout"
                  >Dark layout</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="../starter-kit/ltr/vertical-menu-template/layout-semi-dark.html"
                  data-i18n="Semi dark layout"
                  >Semi dark layout</a
                >
              </li>
            </ul>
          </li>
          <li class="navigation-header">
            <span>Apps</span
            ><i
              class="feather icon-minus"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Apps"
            ></i>
          </li>
          <li class="nav-item">
            <a href="app-email.html"
              ><i class="feather icon-mail"></i
              ><span class="menu-title" data-i18n="Email Application"
                >Email Application</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="app-chat.html"
              ><i class="feather icon-message-square"></i
              ><span class="menu-title" data-i18n="Chat Application"
                >Chat Application</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="app-todo.html"
              ><i class="feather icon-check-square"></i
              ><span class="menu-title" data-i18n="Todo Application"
                >Todo Application</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="app-kanban.html"
              ><i class="feather icon-file-plus"></i
              ><span class="menu-title" data-i18n="Kanban Application"
                >Kanban Application</span
              ></a
            >
          </li>
          <li class="active">
            <a href="app-contacts.html"
              ><i class="feather icon-users"></i
              ><span class="menu-title" data-i18n="Contacts">Contacts</span></a
            >
          </li>
          <li class="nav-item">
            <a href="project-summary.html"
              ><i class="feather icon-airplay"></i
              ><span class="menu-title" data-i18n="Project Summary"
                >Project Summary</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-plus-square"></i
              ><span class="menu-title" data-i18n="Calender">Calender</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="full-calender-basic.html"
                  data-i18n="Full Calender Basic"
                  >Full Calender Basic</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="full-calender-events.html"
                  data-i18n="Full Calender Events"
                  >Full Calender Events</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="full-calender-advance.html"
                  data-i18n="Full Calender Advance"
                  >Full Calender Advance</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="full-calender-extra.html"
                  data-i18n="Full Calender Extra"
                  >Full Calender Extra</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-file-text"></i
              ><span class="menu-title" data-i18n="Invoice">Invoice</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="invoice-list.html"
                  data-i18n="Invoice List"
                  >Invoice List</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="invoice-view.html"
                  data-i18n="Invoice View"
                  >Invoice View</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="invoice-edit.html"
                  data-i18n="Invoice Edit"
                  >invoice Edit</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="invoice-add.html"
                  data-i18n="Invoice Add"
                  >invoice Add</a
                >
              </li>
            </ul>
          </li>
          <li class="navigation-header">
            <span>Pages</span
            ><i
              class="feather icon-minus"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Pages"
            ></i>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-share"></i
              ><span class="menu-title" data-i18n="Timelines"
                >Timelines</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="timeline-center.html"
                  data-i18n="Timelines Center"
                  >Timelines Center</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="timeline-horizontal.html"
                  data-i18n="Timelines Horizontal"
                  >Timelines Horizontal</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="account-setting.html"
              ><i class="feather icon-user-plus"></i
              ><span class="menu-title" data-i18n="Account setting"
                >Account setting</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-user"></i
              ><span class="menu-title" data-i18n="Users">Users</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="page-users-list.html"
                  data-i18n="Users List"
                  >Users List</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="page-users-view.html"
                  data-i18n="Users View"
                  >Users View</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="page-users-edit.html"
                  data-i18n="Users Edit"
                  >Users Edit</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="user-profile.html"
                  data-i18n="Users Profile"
                  >Users Profile</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="user-cards.html"
                  data-i18n="Users Cards"
                  >Users Cards</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-image"></i
              ><span class="menu-title" data-i18n="Gallery">Gallery</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="gallery-grid.html"
                  data-i18n="Gallery Grid"
                  >Gallery Grid</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="gallery-grid-with-desc.html"
                  data-i18n="Gallery Grid with Desc"
                  >Gallery Grid with Desc</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="gallery-masonry.html"
                  data-i18n="Masonry Gallery"
                  >Masonry Gallery</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="gallery-masonry-with-desc.html"
                  data-i18n="Masonry Gallery with Desc"
                  >Masonry Gallery with Desc</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="gallery-hover-effects.html"
                  data-i18n="Hover Effects"
                  >Hover Effects</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-search"></i
              ><span class="menu-title" data-i18n="Search">Search</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="search-page.html"
                  data-i18n="Search Page"
                  >Search Page</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="search-website.html"
                  data-i18n="Search Website"
                  >Search Website</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="search-images.html"
                  data-i18n="Search Images"
                  >Search Images</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="search-videos.html"
                  data-i18n="Search Videos"
                  >Search Videos</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-unlock"></i
              ><span class="menu-title" data-i18n="Authentication"
                >Authentication</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="login-simple.html"
                  data-i18n="Login Simple"
                  >Login Simple</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="login-with-bg.html"
                  data-i18n="Login with Bg"
                  >Login with Bg</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="login-with-bg-image.html"
                  data-i18n="Login with Bg Image"
                  >Login with Bg Image</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="register-simple.html"
                  data-i18n="Register Simple"
                  >Register Simple</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="register-with-bg.html"
                  data-i18n="Register with Bg"
                  >Register with Bg</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="register-with-bg-image.html"
                  data-i18n="Register with Bg Image"
                  >Register with Bg Image</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="unlock-user.html"
                  data-i18n="Unlock User"
                  >Unlock User</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="recover-password.html"
                  data-i18n="Recover Password"
                  >Recover Password</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-alert-triangle"></i
              ><span class="menu-title" data-i18n="Error">Error</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="error-400.html" data-i18n="Error 400"
                  >Error 400</a
                >
              </li>
              <li>
                <a class="menu-item" href="error-401.html" data-i18n="Error 401"
                  >Error 401</a
                >
              </li>
              <li>
                <a class="menu-item" href="error-403.html" data-i18n="Error 403"
                  >Error 403</a
                >
              </li>
              <li>
                <a class="menu-item" href="error-404.html" data-i18n="Error 404"
                  >Error 404</a
                >
              </li>
              <li>
                <a class="menu-item" href="error-500.html" data-i18n="Error 500"
                  >Error 500</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-watch"></i
              ><span class="menu-title" data-i18n="Coming Soon"
                >Coming Soon</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="coming-soon-flat.html"
                  data-i18n="Flat"
                  >Flat</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="coming-soon-bg-image.html"
                  data-i18n="Bg image"
                  >Bg image</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="coming-soon-bg-video.html"
                  data-i18n="Bg video"
                  >Bg video</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="under-maintenance.html"
              ><i class="feather icon-cloud-off"></i
              ><span class="menu-title" data-i18n="Maintenance"
                >Maintenance</span
              ></a
            >
          </li>
          <li class="navigation-header">
            <span>UI</span
            ><i
              class="feather icon-droplet feather icon-minus"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="UI"
            ></i>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-globe"></i
              ><span class="menu-title" data-i18n="Content">Content</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="content-grid.html" data-i18n="Grid"
                  >Grid</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="content-typography.html"
                  data-i18n="Typography"
                  >Typography</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="content-text-utilities.html"
                  data-i18n="Text utilities"
                  >Text utilities</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="content-syntax-highlighter.html"
                  data-i18n="Syntax highlighter"
                  >Syntax highlighter</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="content-helper-classes.html"
                  data-i18n="Helper classes"
                  >Helper classes</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-square"></i
              ><span class="menu-title" data-i18n="Cards">Cards</span
              ><span
                class="badge badge badge-pill badge-success float-right mr-2"
                >Hot</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="card-bootstrap.html"
                  data-i18n="Bootstrap"
                  >Bootstrap</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="card-headings.html"
                  data-i18n="Headings"
                  >Headings</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="card-options.html"
                  data-i18n="Options"
                  >Options</a
                >
              </li>
              <li>
                <a class="menu-item" href="card-actions.html" data-i18n="Action"
                  >Action</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="card-draggable.html"
                  data-i18n="Draggable"
                  >Draggable</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-layers"></i
              ><span class="menu-title" data-i18n="Advance Cards"
                >Advance Cards</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="card-statistics.html"
                  data-i18n="Statistics"
                  >Statistics</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="card-weather.html"
                  data-i18n="Weather"
                  >Weather</a
                >
              </li>
              <li>
                <a class="menu-item" href="card-charts.html" data-i18n="Charts"
                  >Charts</a
                >
              </li>
              <li>
                <a class="menu-item" href="card-maps.html" data-i18n="Maps"
                  >Maps</a
                >
              </li>
              <li>
                <a class="menu-item" href="card-social.html" data-i18n="Social"
                  >Social</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="card-ecommerce.html"
                  data-i18n="E-Commerce"
                  >E-Commerce</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-droplet"></i
              ><span class="menu-title" data-i18n="Color Palette"
                >Color Palette</span
              ><span
                class="badge badge badge-warning badge-pill float-right mr-2"
                >14</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="color-palette-primary.html"
                  data-i18n="Primary palette"
                  >Primary palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-danger.html"
                  data-i18n="Danger palette"
                  >Danger palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-success.html"
                  data-i18n="Success palette"
                  >Success palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-warning.html"
                  data-i18n="Warning palette"
                  >Warning palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-info.html"
                  data-i18n="Info palette"
                  >Info palette</a
                >
              </li>
              <li class="navigation-divider"></li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-red.html"
                  data-i18n="Red palette"
                  >Red palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-pink.html"
                  data-i18n="Pink palette"
                  >Pink palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-purple.html"
                  data-i18n="Purple palette"
                  >Purple palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-blue.html"
                  data-i18n="Blue palette"
                  >Blue palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-cyan.html"
                  data-i18n="Cyan palette"
                  >Cyan palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-teal.html"
                  data-i18n="Teal palette"
                  >Teal palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-yellow.html"
                  data-i18n="Yellow palette"
                  >Yellow palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-amber.html"
                  data-i18n="Amber palette"
                  >Amber palette</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="color-palette-blue-grey.html"
                  data-i18n="Blue Grey palette"
                  >Blue Grey palette</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-eye"></i
              ><span class="menu-title" data-i18n="Icons">Icons</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="icons-feather.html"
                  data-i18n="Feather"
                  >Feather</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="icons-font-awesome.html"
                  data-i18n="Font Awesome"
                  >Font Awesome</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="icons-simple-line-icons.html"
                  data-i18n="Simple Line Icons"
                  >Simple Line Icons</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="icons-meteocons.html"
                  data-i18n="Meteocons"
                  >Meteocons</a
                >
              </li>
            </ul>
          </li>
          <li class="navigation-header">
            <span>Components</span
            ><i
              class="feather icon-minus"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Components"
            ></i>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-briefcase"></i
              ><span class="menu-title" data-i18n="Bootstrap Components"
                >Bootstrap Components</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="component-alerts.html"
                  data-i18n="Alerts"
                  >Alerts</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-callout.html"
                  data-i18n="Callout"
                  >Callout</a
                >
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Buttons">Buttons</a>
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="component-buttons-basic.html"
                      data-i18n="Basic Buttons"
                      >Basic Buttons</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="component-buttons-extended.html"
                      data-i18n="Extended Buttons"
                      >Extended Buttons</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-carousel.html"
                  data-i18n="Carousel"
                  >Carousel</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-collapse.html"
                  data-i18n="Collapse"
                  >Collapse</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-dropdowns.html"
                  data-i18n="Dropdowns"
                  >Dropdowns</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-list-group.html"
                  data-i18n="List Group"
                  >List Group</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-modals.html"
                  data-i18n="Modals"
                  >Modals</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-pagination.html"
                  data-i18n="Pagination"
                  >Pagination</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-navs-component.html"
                  data-i18n="Navs Component"
                  >Navs Component</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-tabs-component.html"
                  data-i18n="Tabs Component"
                  >Tabs Component</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-pills-component.html"
                  data-i18n="Pills Component"
                  >Pills Component</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-tooltips.html"
                  data-i18n="Tooltips"
                  >Tooltips</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-popovers.html"
                  data-i18n="Popovers"
                  >Popovers</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-badges.html"
                  data-i18n="Badges"
                  >Badges</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-pill-badges.html"
                  data-i18n="Pill Badges"
                  >Pill Badges</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-progress.html"
                  data-i18n="Progress"
                  >Progress</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-media-objects.html"
                  data-i18n="Media Objects"
                  >Media Objects</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-scrollable.html"
                  data-i18n="Scrollable"
                  >Scrollable</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-bs-spinner.html"
                  data-i18n="Spinner"
                  >Spinner</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-bs-toast.html"
                  data-i18n="Toasts"
                  >Toasts</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-box"></i
              ><span class="menu-title" data-i18n="Extra Components"
                >Extra Components</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="ex-component-avatar.html"
                  data-i18n="Avatar"
                  >Avatar</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-sweet-alerts.html"
                  data-i18n="Sweet Alerts"
                  >Sweet Alerts</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-ratings.html"
                  data-i18n="Ratings"
                  >Ratings</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-toastr.html"
                  data-i18n="Toastr"
                  >Toastr</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-noui-slider.html"
                  data-i18n="NoUI Slider"
                  >NoUI Slider</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-knob.html"
                  data-i18n="Knob"
                  >Knob</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-block-ui.html"
                  data-i18n="Block UI"
                  >Block UI</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-date-time-picker.html"
                  data-i18n="DateTime Picker"
                  >DateTime Picker</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-file-uploader-dropzone.html"
                  data-i18n="File Uploader"
                  >File Uploader</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-image-cropper.html"
                  data-i18n="Image Cropper"
                  >Image Cropper</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="component-spinners.html"
                  data-i18n="Spinners"
                  >Spinners</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-tour.html"
                  data-i18n="Tour"
                  >Tour</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-swiper.html"
                  data-i18n="Swiper"
                  >Swiper</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-treeview.html"
                  data-i18n="TreeView"
                  >TreeView</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-drag-drop.html"
                  data-i18n="Drag &amp; Drop"
                  >Drag &amp; Drop</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-media-player.html"
                  data-i18n="Media player"
                  >Media player</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-i18n.html"
                  data-i18n="i18n"
                  >i18n</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="ex-component-miscellaneous.html"
                  data-i18n="Miscellaneous"
                  >Miscellaneous</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-edit"></i
              ><span class="menu-title" data-i18n="Forms">Forms</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="Form Elements"
                  >Form Elements</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="form-inputs.html"
                      data-i18n="Form Inputs"
                      >Form Inputs</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-input-groups.html"
                      data-i18n="Input Groups"
                      >Input Groups</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-input-grid.html"
                      data-i18n="Input Grid"
                      >Input Grid</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-extended-inputs.html"
                      data-i18n="Extended Inputs"
                      >Extended Inputs</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-checkboxes-radios.html"
                      data-i18n="Checkboxes &amp; Radios"
                      >Checkboxes &amp; Radios</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-switch.html"
                      data-i18n="Switch"
                      >Switch</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-select2.html"
                      data-i18n="Select2"
                      >Select2</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-tags-input.html"
                      data-i18n="Tags Input"
                      >Tags Input</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-validation.html"
                      data-i18n="Validation"
                      >Validation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-text-editor.html"
                      data-i18n="Text editor"
                      >Text editor</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Form Layouts"
                  >Form Layouts</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="form-layout-basic.html"
                      data-i18n="Basic Forms"
                      >Basic Forms</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-layout-horizontal.html"
                      data-i18n="Horizontal Forms"
                      >Horizontal Forms</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-layout-hidden-labels.html"
                      data-i18n="Hidden Labels"
                      >Hidden Labels</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-layout-form-actions.html"
                      data-i18n="Form Actions"
                      >Form Actions</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-layout-bordered.html"
                      data-i18n="Bordered"
                      >Bordered</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="form-layout-striped-rows.html"
                      data-i18n="Striped Rows"
                      >Striped Rows</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a
                  class="menu-item"
                  href="form-dual-listbox.html"
                  data-i18n="Dual Listbox"
                  >Dual Listbox</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="form-wizard.html"
                  data-i18n="Form Wizard"
                  >Form Wizard</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="form-repeater.html"
                  data-i18n="Form Repeater"
                  >Form Repeater</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-grid"></i
              ><span class="menu-title" data-i18n="Tables">Tables</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="Bootstrap Tables"
                  >Bootstrap Tables</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="table-basic.html"
                      data-i18n="Basic Tables"
                      >Basic Tables</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="table-border.html"
                      data-i18n="Table Border"
                      >Table Border</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="table-sizing.html"
                      data-i18n="Table Sizing"
                      >Table Sizing</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="table-styling.html"
                      data-i18n="Table Styling"
                      >Table Styling</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="table-components.html"
                      data-i18n="Table Components"
                      >Table Components</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="DataTables"
                  >DataTables</a
                >
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="dt-basic-initialization.html"
                      data-i18n="Basic Initialisation"
                      >Basic Initialisation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="dt-advanced-initialization.html"
                      data-i18n="Advanced initialisation"
                      >Advanced initialisation</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="dt-styling.html"
                      data-i18n="Styling"
                      >Styling</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="dt-data-sources.html"
                      data-i18n="Data Sources"
                      >Data Sources</a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="dt-api.html" data-i18n="API"
                      >API</a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="#" data-i18n="DataTables Ext"
                      >DataTables Ext</a
                    >
                    <ul class="menu-content">
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-autofill.html"
                          data-i18n="AutoFill"
                          >AutoFill</a
                        >
                      </li>
                      <li>
                        <a class="menu-item" href="#" data-i18n="Buttons"
                          >Buttons</a
                        >
                        <ul class="menu-content">
                          <li>
                            <a
                              class="menu-item"
                              href="dt-extensions-buttons-basic.html"
                              data-i18n="Basic Buttons"
                              >Basic Buttons</a
                            >
                          </li>
                          <li>
                            <a
                              class="menu-item"
                              href="dt-extensions-buttons-html-5-data-export.html"
                              data-i18n="HTML 5 Data Export"
                              >HTML 5 Data Export</a
                            >
                          </li>
                          <li>
                            <a
                              class="menu-item"
                              href="dt-extensions-buttons-flash-data-export.html"
                              data-i18n="Flash Data Export"
                              >Flash Data Export</a
                            >
                          </li>
                          <li>
                            <a
                              class="menu-item"
                              href="dt-extensions-buttons-column-visibility.html"
                              data-i18n="Column Visibility"
                              >Column Visibility</a
                            >
                          </li>
                          <li>
                            <a
                              class="menu-item"
                              href="dt-extensions-buttons-print.html"
                              data-i18n="Print"
                              >Print</a
                            >
                          </li>
                          <li>
                            <a
                              class="menu-item"
                              href="dt-extensions-buttons-api.html"
                              data-i18n="API"
                              >API</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-column-reorder.html"
                          data-i18n="Column Reorder"
                          >Column Reorder</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-fixed-columns.html"
                          data-i18n="Fixed Columns"
                          >Fixed Columns</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-key-table.html"
                          data-i18n="Key Table"
                          >Key Table</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-row-reorder.html"
                          data-i18n="Row Reorder"
                          >Row Reorder</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-select.html"
                          data-i18n="Select"
                          >Select</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-fix-header.html"
                          data-i18n="Fix Header"
                          >Fix Header</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-responsive.html"
                          data-i18n="Responsive"
                          >Responsive</a
                        >
                      </li>
                      <li>
                        <a
                          class="menu-item"
                          href="dt-extensions-column-visibility.html"
                          data-i18n="Column Visibility"
                          >Column Visibility</a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-bar-chart-2"></i
              ><span class="menu-title" data-i18n="Charts">Charts</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="charts-apexcharts.html"
                  data-i18n="Apex Charts"
                  >Apex Charts</a
                >
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Chartjs">Chartjs</a>
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="chartjs-line-charts.html"
                      data-i18n="Line charts"
                      >Line charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartjs-bar-charts.html"
                      data-i18n="Bar charts"
                      >Bar charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartjs-pie-doughnut-charts.html"
                      data-i18n="Pie &amp; Doughnut charts"
                      >Pie &amp; Doughnut charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartjs-scatter-charts.html"
                      data-i18n="Scatter charts"
                      >Scatter charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartjs-polar-radar-charts.html"
                      data-i18n="Polar &amp; Radar charts"
                      >Polar &amp; Radar charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartjs-advance-charts.html"
                      data-i18n="Advance charts"
                      >Advance charts</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a
                  class="menu-item"
                  href="morris-charts.html"
                  data-i18n="Morris Charts"
                  >Morris Charts</a
                >
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Chartist">Chartist</a>
                <ul class="menu-content">
                  <li>
                    <a
                      class="menu-item"
                      href="chartist-line-charts.html"
                      data-i18n="Line charts"
                      >Line charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartist-bar-charts.html"
                      data-i18n="Bar charts"
                      >Bar charts</a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="chartist-pie-charts.html"
                      data-i18n="Pie charts"
                      >Pie charts</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-map"></i
              ><span class="menu-title" data-i18n="Maps">Maps</span></a
            >
            <ul class="menu-content">
              <li>
                <a
                  class="menu-item"
                  href="maps-leaflet.html"
                  data-i18n="Leaflet Maps"
                  >Leaflet Maps</a
                >
              </li>
              <li>
                <a
                  class="menu-item"
                  href="vector-maps-jvector.html"
                  data-i18n="jVector Map"
                  >jVector Map</a
                >
              </li>
            </ul>
          </li>
          <li class="navigation-header">
            <span>Others</span
            ><i
              class="feather icon-minus"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Others"
            ></i>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="feather icon-align-left"></i
              ><span class="menu-title" data-i18n="Menu levels"
                >Menu levels</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="Second level"
                  >Second level</a
                >
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="Second level child"
                  >Second level child</a
                >
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="#" data-i18n="Third level"
                      >Third level</a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="#" data-i18n="Third level child"
                      >Third level child</a
                    >
                    <ul class="menu-content">
                      <li>
                        <a class="menu-item" href="#" data-i18n="Fourth level"
                          >Fourth level</a
                        >
                      </li>
                      <li>
                        <a class="menu-item" href="#" data-i18n="Fourth level"
                          >Fourth level</a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="disabled nav-item">
            <a href="#"
              ><i class="feather icon-slash"></i
              ><span class="menu-title" data-i18n="Disabled Menu"
                >Disabled Menu</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="https://pixinvent.ticksy.com/" target="_blank"
              ><i class="feather icon-life-buoy"></i
              ><span class="menu-title" data-i18n="Raise Support"
                >Raise Support</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a
              href="https://pixinvent.com/stack-bootstrap-admin-template/documentation"
              target="_blank"
              ><i class="feather icon-folder"></i
              ><span class="menu-title" data-i18n="Documentation"
                >Documentation</span
              ></a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <section class="row all-contacts">
              <div class="col-12">
                <div class="card">
                  <div class="card-head">
                    <div class="card-header">
                      <h4 class="card-title">All Contacts</h4>
                      <div class="heading-elements mt-0">
                        <button
                          class="btn btn-primary btn-md"
                          data-toggle="modal"
                          data-target="#AddContactModal"
                        >
                          <i
                            class="d-md-none d-block feather icon-plus white"
                          ></i>
                          <span class="d-md-block d-none">Add Contacts</span>
                        </button>
                        <div
                          class="modal fade"
                          id="AddContactModal"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="exampleModalLabel1"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <section class="contact-form">
                                <form
                                  id="form-add-contact"
                                  class="contact-input"
                                >
                                  <div class="modal-header">
                                    <h5
                                      class="modal-title"
                                      id="exampleModalLabel1"
                                    >
                                      Add New Contact
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="text"
                                        id="contact-name"
                                        class="contact-name form-control"
                                        placeholder="Name"
                                      />
                                    </fieldset>
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="text"
                                        id="contact-email"
                                        class="contact-email form-control"
                                        placeholder="Email"
                                      />
                                    </fieldset>
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="text"
                                        id="contact-phone"
                                        class="contact-phone form-control"
                                        placeholder="Phone Number"
                                      />
                                    </fieldset>
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="checkbox"
                                        id="favorite"
                                        class="contact-fav input-chk"
                                      />
                                      Favorite
                                    </fieldset>
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="file"
                                        class="form-control-file"
                                        id="user-image"
                                      />
                                    </fieldset>
                                  </div>
                                  <div class="modal-footer">
                                    <fieldset
                                      class="form-group position-relative has-icon-left mb-0"
                                    >
                                      <button
                                        type="button"
                                        id="add-contact-item"
                                        class="btn btn-info add-contact-item"
                                        data-dismiss="modal"
                                      >
                                        <i
                                          class="fa fa-paper-plane-o d-block d-lg-none"
                                        ></i>
                                        <span class="d-none d-lg-block"
                                          >Add New</span
                                        >
                                      </button>
                                    </fieldset>
                                  </div>
                                </form>
                              </section>
                            </div>
                          </div>
                        </div>
                        <div
                          class="modal fade"
                          id="EditContactModal"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <section class="contact-form">
                                <form
                                  id="form-edit-contact"
                                  class="contact-input"
                                >
                                  <div class="modal-header">
                                    <h5
                                      class="modal-title"
                                      id="exampleModalLabel"
                                    >
                                      Edit Contact
                                    </h5>
                                    <button
                                      type="button"
                                      class="close"
                                      data-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="text"
                                        id="name"
                                        class="name form-control"
                                        placeholder="Name"
                                      />
                                    </fieldset>
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="text"
                                        id="email"
                                        class="email form-control"
                                        placeholder="Email"
                                      />
                                    </fieldset>
                                    <fieldset class="form-group col-12">
                                      <input
                                        type="text"
                                        id="phone"
                                        class="phone form-control"
                                        placeholder="Phone Number"
                                      />
                                    </fieldset>
                                    <span id="fav" class="d-none"></span>
                                  </div>
                                  <div class="modal-footer">
                                    <fieldset
                                      class="form-group position-relative has-icon-left mb-0"
                                    >
                                      <button
                                        type="button"
                                        id="edit-contact-item"
                                        class="btn btn-info edit-contact-item"
                                        data-dismiss="modal"
                                      >
                                        <i
                                          class="fa fa-paper-plane-o d-lg-none"
                                        ></i>
                                        <span class="d-none d-lg-block"
                                          >Edit</span
                                        >
                                      </button>
                                    </fieldset>
                                  </div>
                                </form>
                              </section>
                            </div>
                          </div>
                        </div>
                        <span class="dropdown">
                          <button
                            id="btnSearchDrop1"
                            type="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="true"
                            class="btn btn-warning dropdown-menu-right dropdown-toggle btn-md"
                          >
                            <i class="feather icon-download-cloud white"></i>
                          </button>
                          <span
                            aria-labelledby="btnSearchDrop1"
                            class="dropdown-menu dropdown-menu-right mt-1"
                          >
                            <a href="#" class="dropdown-item"
                              ><i class="feather icon-upload"></i> Import</a
                            >
                            <a href="#" class="dropdown-item"
                              ><i class="feather icon-download"></i> Export</a
                            >
                            <a href="#" class="dropdown-item"
                              ><i class="feather icon-shuffle"></i> Find
                              Duplicate</a
                            >
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
                      <button
                        type="button"
                        class="btn btn-danger btn-sm delete-all mb-1"
                      >
                        Delete All
                      </button>
                      <div class="table-responsive">
                        <table
                          id="users-contacts"
                          class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center"
                        >
                          <thead>
                            <tr>
                              <th>
                                <input
                                  type="checkbox"
                                  class="input-chk"
                                  id="check-all"
                                  onclick="toggle();"
                                />
                              </th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Favorite</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-2.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Alice Collins</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >alice@example.com</a
                                >
                              </td>
                              <td class="phone">+658-254-256</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop2"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop2"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                    >
                                      <img
                                        src="../app-assets/images/portrait/small/avatar-s-11.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle mt-50">
                                    <a class="media-heading name"
                                      >Margaret Govan</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >margaret@example.com</a
                                >
                              </td>
                              <td class="phone">+125-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop3"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right secondary"
                                  >
                                    <i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop3"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-14.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Eugene Woods</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >eugene@example.com</a
                                >
                              </td>
                              <td class="phone">+987-654-564</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop4"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop4"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-3.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Russell Bryant</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >russell@example.com</a
                                >
                              </td>
                              <td class="phone">+235-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop5"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop5"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-6.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Cynthia Tucker</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >cynthia@example.com</a
                                >
                              </td>
                              <td class="phone">+987-654-564</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop6"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop6"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-busy rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-5.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Scott Marshall</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >scott@example.com</a
                                >
                              </td>
                              <td class="phone">+954-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop7"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop7"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-away rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-8.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Catherine Smith</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >catherine@example.com</a
                                >
                              </td>
                              <td class="phone">+254-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop8"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop8"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-off rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-7.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Eric Howard</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >eric@example.com</a
                                >
                              </td>
                              <td class="phone">+545-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop9"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop9"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-9.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Donald Watkins</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >donald@example.com</a
                                >
                              </td>
                              <td class="phone">+987-654-564</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop10"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop10"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-10.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Brittany Barnes</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >brittany@example.com</a
                                >
                              </td>
                              <td class="phone">+632-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop11"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop11"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-busy rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-5.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Andrew Marsh</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >andrew@example.com</a
                                >
                              </td>
                              <td class="phone">+932-741-123</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop12"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop12"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-away rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-18.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Cherry Smith</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >cherry@example.com</a
                                >
                              </td>
                              <td class="phone">+296-021-604</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop13"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop13"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-off rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-17.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Erica Red</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >erica@example.com</a
                                >
                              </td>
                              <td class="phone">+595-680-123</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop14"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop14"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-9.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Will Trumpt</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >will@example.com</a
                                >
                              </td>
                              <td class="phone">+289-614-504</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop15"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop15"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-10.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Verty Barny</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >verty@example.com</a
                                >
                              </td>
                              <td class="phone">+132-954-114</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop16"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop16"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-2.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Steffy Agile</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >steffy@example.com</a
                                >
                              </td>
                              <td class="phone">+699-654-238</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop17"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop17"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-1.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Meggi Jelly</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >meggi@example.com</a
                                >
                              </td>
                              <td class="phone">+932-854-554</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop18"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop18"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-4.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Ken Woodsy</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >ken@example.com</a
                                >
                              </td>
                              <td class="phone">+896-320-964</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop19"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop19"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-13.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Rushee Brent</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >rushee@example.com</a
                                >
                              </td>
                              <td class="phone">+135-614-594</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop20"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop20"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-6.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Sinthia Tecker</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >Sinthia@example.com</a
                                >
                              </td>
                              <td class="phone">+987-654-564</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop21"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop21"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-4.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Rose Wends</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >rose@example.com</a
                                >
                              </td>
                              <td class="phone">+387-694-567</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop22"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop22"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-3.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="name media-heading"
                                      >Russell Bryant</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >grees@example.com</a
                                >
                              </td>
                              <td class="phone">+295-634-567</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop23"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop23"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-16.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Chimmi React</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >chimmi@example.com</a
                                >
                              </td>
                              <td class="phone">+997-684-565</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop24"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop24"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-22.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Andy Chews</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >andy@example.com</a
                                >
                              </td>
                              <td class="phone">+987-478-965</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop25"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop25"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-1.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Missy Loen</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >missi@example.com</a
                                >
                              </td>
                              <td class="phone">+987-654-564</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop26"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop26"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-busy rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-5.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Prezi Henz</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >prezi@example.com</a
                                >
                              </td>
                              <td class="phone">+194-854-857</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop27"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop27"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-away rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-8.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">John Stric</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >john@example.com</a
                                >
                              </td>
                              <td class="phone">+154-704-904</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop28"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop28"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-off rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-7.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Creta Hord</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >creta@example.com</a
                                >
                              </td>
                              <td class="phone">+165-651-594</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop29"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop29"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-9.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name">Daizy kigs</a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >daizy@example.com</a
                                >
                              </td>
                              <td class="phone">+627-054-524</td>
                              <td class="text-center">
                                <div class="favorite active">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop30"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop30"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input
                                  type="checkbox"
                                  class="input-chk check"
                                />
                              </td>
                              <td>
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span
                                      class="avatar avatar-sm avatar-online rounded-circle"
                                      ><img
                                        src="../app-assets/images/portrait/small/avatar-s-10.png"
                                        alt="avatar" /><i></i
                                    ></span>
                                  </div>
                                  <div class="media-body media-middle">
                                    <a class="media-heading name"
                                      >Lara Barndy</a
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <a class="email" href="mailto:email@example.com"
                                  >lara@example.com</a
                                >
                              </td>
                              <td class="phone">+502-611-569</td>
                              <td class="text-center">
                                <div class="favorite">
                                  <i class="feather icon-star"></i>
                                </div>
                              </td>
                              <td>
                                <a
                                  data-toggle="modal"
                                  data-target="#EditContactModal"
                                  class="primary edit mr-1"
                                  ><i class="fa fa-pencil"></i
                                ></a>
                                <a class="danger delete mr-1"
                                  ><i class="fa fa-trash-o"></i
                                ></a>
                                <span class="dropdown">
                                  <a
                                    id="btnSearchDrop31"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="true"
                                    class="dropdown-toggle dropdown-menu-right"
                                    ><i class="fa fa-ellipsis-v"></i
                                  ></a>
                                  <span
                                    aria-labelledby="btnSearchDrop31"
                                    class="dropdown-menu mt-1 dropdown-menu-right"
                                  >
                                    <a
                                      data-toggle="modal"
                                      data-target="#EditContactModal"
                                      class="dropdown-item edit"
                                      ><i class="feather icon-edit-2"></i>
                                      Edit</a
                                    >
                                    <a href="#" class="dropdown-item delete"
                                      ><i class="feather icon-trash-2"></i>
                                      Delete</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle primary"
                                      ></i>
                                      Projects</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle info"
                                      ></i>
                                      Team</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle warning"
                                      ></i>
                                      Clients</a
                                    >
                                    <a href="#" class="dropdown-item"
                                      ><i
                                        class="feather icon-plus-circle success"
                                      ></i>
                                      Friends</a
                                    >
                                  </span>
                                </span>
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th></th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Favorite</th>
                              <th>Actions</th>
                            </tr>
                          </tfoot>
                        </table>
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
    <script src="{{asset('admin/vendors/js/tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/extensions/jquery.raty.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('admin/vendors/js/forms/icheck/icheck.min.js')}}"></script>
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
