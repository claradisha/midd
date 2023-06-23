<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xibo Middleware</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/');?>img/xibologo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="v_dashboard.php"><img class="main-logo" src="<?= base_url('assets/');?>img/logo/xibo-mid-logo.png" alt="" /></a>
               
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Schedule Page" href="<?= base_url()?>schedule" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Schedule</span></a>
                        </li>
                        <li>
                            <a title="Layout Page" href="<?= base_url()?>layout" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Layout</span></a>
                        </li>                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?= base_url('assets/');?>img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
        <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="<?= base_url('assets/');?>img/profile/user.png" alt="" />
															<span class="admin-name">User</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">  
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Profile</a>
                                                        </li>                                                  
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>                                                
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- Main content -->
            <div class="breadcome-area">
            <div class="container-fluid">
               <h1>Add Layout</h1>
               <p>Please select one of the option below</p>
            </div>
        </div>
        </div>
        <div class="courses-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="<?= base_url('assets/');?>img/template/full screen.png" alt=""></a>
                                <h2>Full Screen</h2>
                                <p>Full screen content</p>
                            </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner">
                            <div class="courses-title">
                                <a href="#"><img src="<?=base_url('assets/');?>img/template/L Shape Left.png" alt=""></a>
                                <h2>L Shape Left</h2>
                                <p>3 region in an L shape, on the left</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                            <div class="courses-title">
                                <a href="#"><img src="<?=base_url('assets/');?>img/template/L Shape Right.png" alt=""></a>
                                <h2>L Shape Right</h2>
                                <p>3 region in an L shape, on the right</p>
                            </div>
                         </div>
                    </div>
                    
                </div>
             </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Xibo Middleware</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/');?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/');?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/');?>js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/');?>js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?= base_url('assets/');?>js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/calendar/moment.min.js"></script>
    <script src="<?= base_url('assets/');?>js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url('assets/');?>js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/tawk-chat.js"></script>
</body>

</html>