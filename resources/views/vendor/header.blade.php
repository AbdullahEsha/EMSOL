<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                class="feather icon-menu font-large-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="index.html"><img class="brand-logo" alt="stack admin logo"
                src="{{asset('admin/images/logo/stack-logo.png')}}" />
              <h2 class="brand-text">Stack</h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a>
            </li>
            <li class="nav-item nav-search">
              <a class="nav-link nav-link-search" href="#"><i class="ficon feather icon-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore Stack..." tabindex="0"
                  data-search="template-search" />
                <div class="search-input-close">
                  <i class="feather icon-x"></i>
                </div>
                <ul class="search-list"></ul>
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i
                  class="ficon feather icon-bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">
                      Notifications
                    </span>
                    <span class="notification-tag badge badge-danger float-right m-0">
                      5 New
                    </span>
                  </h6>
                </li>
                <li class="scrollable-container media-list">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="feather icon-plus-square icon-bg-circle bg-cyan"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">
                          Lorem ipsum dolor sit amet, consectetuer elit.
                        </p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes
                            ago</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="feather icon-download-cloud icon-bg-circle bg-red bg-darken-1"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">
                          99% Server load
                        </h6>
                        <p class="notification-text font-small-3 text-muted">
                          Aliquam tincidunt mauris eu risus.
                        </p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour
                            ago</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="feather icon-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">
                          Warning notifixation
                        </h6>
                        <p class="notification-text font-small-3 text-muted">
                          Vestibulum auctor dapibus neque.
                        </p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="feather icon-check-circle icon-bg-circle bg-cyan"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last
                            week</time></small>
                      </div>
                    </div>
                  </a><a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center">
                        <i class="feather icon-file icon-bg-circle bg-teal"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last
                            month</time></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer">
                  <a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-user nav-item">
              <a class="nav-link dropdown-user-link" href="/vendor/profile" data-toggle="dropdown">
                <div class="avatar avatar-online">
                  <img src="{{asset('admin/images/portrait/small/avatar-s-1.png')}}" alt="avatar" /><i></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>