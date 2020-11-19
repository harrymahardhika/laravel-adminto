<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dashboard | Adminto - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body data-layout="horizontal" data-topbar="dark">

  <!-- Begin page -->
  <div id="wrapper">

    <!-- Navigation Bar-->
    <header id="topnav">

      <!-- Topbar Start -->
      <div class="navbar-custom">
        <div class="container-fluid">
          <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
              <!-- Mobile menu toggle-->
              <a class="navbar-toggle nav-link">
                <div class="lines">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </a>
              <!-- End mobile menu toggle-->
            </li>

            <li class="d-none d-sm-block">
              <form class="app-search">
                <div class="app-search-box">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <button class="btn" type="submit">
                        <i class="fe-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </li>

            <li class="dropdown notification-list">
              <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                  <h5 class="m-0">
                    <span class="float-right">
                      <a href="" class="text-dark">
                        <small>Clear All</small>
                      </a>
                    </span>Notification
                  </h5>
                </div>

                <div class="slimscroll noti-scroll">

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item active">
                    <div class="notify-icon">
                      <img src="./images/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                    <p class="notify-details">Cristina Pride</p>
                    <p class="text-muted mb-0 user-msg">
                      <small>Hi, How are you? What about our next meeting</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-primary">
                      <i class="mdi mdi-comment-account-outline"></i>
                    </div>
                    <p class="notify-details">Caleb Flakelar commented on Admin
                      <small class="text-muted">1 min ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon">
                      <img src="./images/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                    <p class="notify-details">Karen Robinson</p>
                    <p class="text-muted mb-0 user-msg">
                      <small>Wow ! this admin looks good and awesome design</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-warning">
                      <i class="mdi mdi-account-plus"></i>
                    </div>
                    <p class="notify-details">New user registered.
                      <small class="text-muted">5 hours ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-info">
                      <i class="mdi mdi-comment-account-outline"></i>
                    </div>
                    <p class="notify-details">Caleb Flakelar commented on Admin
                      <small class="text-muted">4 days ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-secondary">
                      <i class="mdi mdi-heart"></i>
                    </div>
                    <p class="notify-details">Carlos Crouch liked
                      <b>Admin</b>
                      <small class="text-muted">13 days ago</small>
                    </p>
                  </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                  View all
                  <i class="fi-arrow-right"></i>
                </a>

              </div>
            </li>

            <li class="dropdown notification-list">
              <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <img src="./images/user-1.jpg" alt="user-1" class="rounded-circle">
                <span class="pro-user-1 ml-1">
                  Nowak <i class="mdi mdi-chevron-down"></i>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-user"></i>
                  <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-settings"></i>
                  <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-lock"></i>
                  <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <i class="fe-log-out"></i>
                  <span>Logout</span>
                </a>

              </div>
            </li>

          </ul>

          <!-- LOGO -->
          <div class="logo-box">
            <a href="index.html" class="logo logo-light">
              <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="16">
              </span>
              <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="24">
              </span>
            </a>
            <a href="index.html" class="logo logo-dark">
              <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="16">
              </span>
              <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="24">
              </span>
            </a>
          </div>

          <div class="clearfix"></div>
        </div> <!-- end container-fluid-->
      </div>
      <!-- end Topbar -->

      <div class="topbar-menu">
        <div class="container-fluid">
          <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

              <li class="has-submenu">
                <a href="index.html"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
              </li>

              <li class="has-submenu">
                <a href="index.html"><i class="mdi mdi-view-dashboard"></i>{{ __('Order') }}</a>
              </li>

              <li class="has-submenu">
                <a href="#"> <i class="mdi mdi-invert-colors"></i>User Interface <div class="arrow-down"></div></a>
                <ul class="submenu megamenu">
                  <li>
                    <ul>
                      <li>
                        <a href="ui-buttons.html">Buttons</a>
                      </li>
                      <li>
                        <a href="ui-cards.html">Cards</a>
                      </li>
                      <li>
                        <a href="ui-draggable-cards.html">Draggable Cards</a>
                      </li>
                      <li>
                        <a href="ui-checkbox-radio.html">Checkboxs-Radios</a>
                      </li>
                      <li>
                        <a href="ui-material-icons.html">Material Design</a>
                      </li>
                      <li>
                        <a href="ui-font-awesome-icons.html">Font Awesome 5</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <ul>
                      <li>
                        <a href="ui-dripicons.html">Dripicons</a>
                      </li>
                      <li>
                        <a href="ui-themify-icons.html">Themify Icons</a>
                      </li>
                      <li>
                        <a href="ui-feather-icons.html">Feather Icons</a>
                      </li>
                      <li>
                        <a href="ui-modals.html">Modals</a>
                      </li>
                      <li>
                        <a href="ui-notification.html">Notification</a>
                      </li>
                      <li>
                        <a href="ui-range-slider.html">Range Slider</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <ul>
                      <li>
                        <a href="ui-components.html">Components</a>
                      </li>
                      <li>
                        <a href="ui-sweetalert.html">Sweet Alert</a>
                      </li>
                      <li>
                        <a href="ui-treeview.html">Tree view</a>
                      </li>
                      <li>
                        <a href="ui-widgets.html">Widgets</a>
                      </li>
                      <li>
                        <a href="ui-typography.html">Typography</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="has-submenu">
                <a href="#"> <i class="mdi mdi-invert-colors"></i>User Interface <div class="arrow-down"></div></a>
                <ul class="submenu megamenu">
                  <li>
                    <ul>
                      <li>
                        <a href="ui-buttons.html">Buttons</a>
                      </li>
                      <li>
                        <a href="ui-cards.html">Cards</a>
                      </li>
                      <li>
                        <a href="ui-draggable-cards.html">Draggable Cards</a>
                      </li>
                      <li>
                        <a href="ui-checkbox-radio.html">Checkboxs-Radios</a>
                      </li>
                      <li>
                        <a href="ui-material-icons.html">Material Design</a>
                      </li>
                      <li>
                        <a href="ui-font-awesome-icons.html">Font Awesome 5</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <ul>
                      <li>
                        <a href="ui-dripicons.html">Dripicons</a>
                      </li>
                      <li>
                        <a href="ui-themify-icons.html">Themify Icons</a>
                      </li>
                      <li>
                        <a href="ui-feather-icons.html">Feather Icons</a>
                      </li>
                      <li>
                        <a href="ui-modals.html">Modals</a>
                      </li>
                      <li>
                        <a href="ui-notification.html">Notification</a>
                      </li>
                      <li>
                        <a href="ui-range-slider.html">Range Slider</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <ul>
                      <li>
                        <a href="ui-components.html">Components</a>
                      </li>
                      <li>
                        <a href="ui-sweetalert.html">Sweet Alert</a>
                      </li>
                      <li>
                        <a href="ui-treeview.html">Tree view</a>
                      </li>
                      <li>
                        <a href="ui-widgets.html">Widgets</a>
                      </li>
                      <li>
                        <a href="ui-typography.html">Typography</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="has-submenu">
                <a href="#">
                  <i class="mdi mdi-lifebuoy"></i>Components <div class="arrow-down"></div></a>
                <ul class="submenu">
                  <li class="has-submenu">
                    <a href="#">Forms <div class="arrow-down"></div></a>
                    <ul class="submenu">
                      <li>
                        <a href="form-elements.html">General Elements</a>
                      </li>
                      <li>
                        <a href="form-advanced.html">Advanced Form</a>
                      </li>
                      <li>
                        <a href="form-validation.html">Form Validation</a>
                      </li>
                      <li>
                        <a href="form-wizard.html">Form Wizard</a>
                      </li>
                      <li>
                        <a href="form-fileupload.html">Form Uploads</a>
                      </li>
                      <li>
                        <a href="form-quilljs.html">Quilljs Editor</a>
                      </li>
                      <li>
                        <a href="form-xeditable.html">X-editable</a>
                      </li>
                    </ul>
                  </li>
                  <li class="has-submenu">
                    <a href="#">Tables <div class="arrow-down"></div></a>
                    <ul class="submenu">
                      <li>
                        <a href="tables-basic.html">Basic Tables</a>
                      </li>
                      <li>
                        <a href="tables-datatable.html">Data Tables</a>
                      </li>
                      <li>
                        <a href="tables-responsive.html">Responsive Table</a>
                      </li>
                      <li>
                        <a href="tables-editable.html">Editable Table</a>
                      </li>
                      <li>
                        <a href="tables-tablesaw.html">Tablesaw Table</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="apps-chat.html">Chat</a>
                  </li>
                  <li>
                    <a href="calendar.html">Calendar</a>
                  </li>
                  <li>
                    <a href="inbox.html">Mail</a>
                  </li>

                </ul>
              </li>

            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
          </div>
          <!-- end #navigation -->
        </div>
        <!-- end container -->
      </div>
      <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
            <div class="col-12">
              <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title">Starter page</h4>

                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Starter page</li>
                  </ol>
                </div>

              </div>
            </div>
          </div>
          <!-- end page title -->



        </div> <!-- container-fluid -->

      </div> <!-- content -->

      <!-- Footer Start -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              2016 - 2020 &copy; Adminto theme by <a href="">Coderthemes</a>
            </div>
            <div class="col-md-6">
              <div class="text-md-right footer-links d-none d-sm-block">
                <a href="javascript:void(0);">About Us</a>
                <a href="javascript:void(0);">Help</a>
                <a href="javascript:void(0);">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


  </div>
  <!-- END wrapper -->

  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
