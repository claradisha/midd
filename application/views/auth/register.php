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
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/');?>img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/main.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
				<p>Help you to make Sinage Content</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?= base_url()?>proses_regis" id="regisForm" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Email Address</label>
                                    <input class="form-control">
                                </div>
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			
		</div>   
    </div>
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
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= base_url('assets/');?>js/icheck/icheck.min.js"></script>
    <script src="<?= base_url('assets/');?>js/icheck/icheck-active.js"></script>
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