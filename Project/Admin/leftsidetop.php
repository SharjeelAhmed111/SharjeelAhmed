      <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="index.php"><img src="../images/logo.jpg "  class="me-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/logo.jpg " alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Can price changes this product
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Hi,can i make custom cake
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Your cakes very delicious
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo $_SESSION['Admin']['Image']?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="./pages/setting/setting.php">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="user.php">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User</span>
              
            </a>

          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-blackboard menu-icon"></i>
              <span class="menu-title">Banners</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php"> <i class="ti-plus menu-icon"></i> Add Banners </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.php"><i class="ti-menu menu-icon"></i> Banners List </a></li>
                
              </ul>
            </div>

          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="banner.php">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Banners</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="product.php">
              <i class="ti-package menu-icon"></i>
              <span class="menu-title">Product</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <i class="ti-truck menu-icon"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="catagories.php">
              <i class="ti-direction-alt menu-icon"></i>
              <span class="menu-title">Catagories</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="payment.php">
              <i class="ti-money menu-icon"></i>
              <span class="menu-title">Payment Gateway</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pin.html">
              <i class="ti-pin menu-icon"></i>
              <span class="menu-title">Pin code</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cities.html">
              <i class="ti-location-pin menu-icon"></i>
              <span class="menu-title">Cities</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="invoice.html">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Invoice </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="enquity.php">
              <i class="ti-id-badge menu-icon"></i>
              <span class="menu-title">Enquiry </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compaint.php">
              <i class="ti-headphone-alt menu-icon"></i>
              <span class="menu-title">Complaint</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ad.php">
              <i class="ti-archive menu-icon"></i>
              <span class="menu-title">Ads</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gst.php">
              <i class="ti-wallet menu-icon"></i>
              <span class="menu-title">GST / Non GST Product</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          

          
        </ul>
      </nav>