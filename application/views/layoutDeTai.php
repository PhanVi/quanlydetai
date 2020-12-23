<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>public/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Đề tài</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Danh Sách đề tài</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
									<?php
										if(isset($path)){
											foreach($path as $path_view){
												$this->load->view($path_view);
											}
										}
									?>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>public/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url() ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url() ?>public/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url() ?>public/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url() ?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url() ?>public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>public/js/main.js"></script>

</body>

</html>
<!-- end document-->
