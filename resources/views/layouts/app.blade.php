<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/simple/layouts/horizontal/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 08:05:41 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Chiến Quốc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/chienquoc/ico.png">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body data-layout="horizontal">

    <!-- Begin page -->
    <div id="wrapper">

        <div id="banner">
            <img src="assets/images/chienquoc/cq3.png" alt="" srcset="">
        </div>
        <!-- Navigation Bar-->
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    @if(session("id"))
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
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/logo_cq.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name d-none d-xl-inline-block ml-2">
                                    {{session("hoten")}}<i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Xin Chào !</h6>
                                </div>

                                <!-- item-->
                                <a href="/show" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span>Thông Tin</span>
                                </a>

                                <!-- item-->
                                <a href="/cash" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings-outline"></i>
                                    <span>Nạp Thẻ</span>
                                </a>



                                <!-- item-->
                                <a href="/logout" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout-variant"></i>
                                    <span>Đăng Xuất</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                    @endif
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="/" class="logo text-center">
                            <span class="logo-lg">
                                <img src="assets/images/chienquoc/Logo_Stroke.png" alt="" srcset="">
                                <!-- <span class="logo-lg-text-light">Simple</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">S</span> -->
                                <h2 style="color: white"> Chiến Quốc</h2>
                            </span>
                        </a>
                    </div>

                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="/">
                                    <i></i>Trang Chủ
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="/show">
                                    <i></i>Thông Tin
                                </a>
                            </li>
                            @if(!session("id"))
                            <li class="has-submenu">
                                <a href="/reg">
                                    Đăng Ký
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="/log">
                                    Đăng Nhập
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="/forget">
                                    Quên Mật Khẩu
                                </a>
                            </li>
                            <!--   <li class="has-submenu">
                                <a href="/forget">
                                    Quên Mật Khẩu
                                </a>
                            </li>-->
                            @endif
                            @if(session("id"))
                            <li class="has-submenu">
                                <a href="/change">
                                    Đổi Mật Khẩu
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="/cash">
                                    Nạp Thẻ
                                </a>
                            </li>

                            @endif
                            @if(session("chucvu")==2)

                            <li class="has-submenu">
                                <a href="/thongke">
                                    Thống Kê Nạp Thẻ (Admin)
                                </a>
                            </li>
                            @endif
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
        </header>

        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->

                @include('flash-message')

                @section('content')

                @show
                <!-- end container-fluid -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2021 &copy; Chiến Quốc @ <a href="#">Guogames</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>
    <!-- END wrapper -->



    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

</body>


<!-- Mirrored from coderthemes.com/simple/layouts/horizontal/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 08:05:41 GMT -->

</html>