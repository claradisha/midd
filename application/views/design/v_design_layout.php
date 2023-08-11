<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mail Compose | Kiaalap - Kiaalap Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/normalize.css">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/meanmenu.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/main.css">
  <!-- dropzone CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/dropzone/dropzone.css">
  <!-- educate icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/educate-custon-icon.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/calendar/fullcalendar.print.min.css">
  <!-- summernote CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/summernote/summernote.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css">
  <style>
    #dropzone {
      width: 480px;
      height: 270px;
      border: 1px dashed gray;
      position: relative;
      overflow: hidden;
    }

    .widget-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .widget {
      width: 100%;
      height: 100%;
      background-color: lightblue;
      text-align: center;
    }
  </style>
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url('assets/'); ?>http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
  <!-- Start Left menu area -->

  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3>Design Area</h3>
        </div>
      </div>
    </div>

    <!-- Design Area -->
    <div class="header-advance-area">

      <div class="mailbox-compose-area mg-b-15">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
              <div class="hpanel shadow-inner responsive-mg-b-30">
                <div class="panel-body">
                  <a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Compose</a>
                  <ul class="mailbox-list">
                    <li>
                      <a href="#">
                        <span class="pull-right">12</span>
                        <i class="fa fa-envelope"></i> Inbox
                      </a>
                    </li>
                    <li>
                      <a href="<?= base_url() ?>designLayout/Clock/<?= $playlistId ?>">
                        <button id="widgetDiv" name="widget" ondragstart="dragStart(event)" data-widget="clock" onmousedown="handleMouseDown(event)">
                        </button>
                      </a>
                    </li>
                    <li>
                      <a href="<?= base_url() ?>designLayout/Clock/<?= $playlistId ?>">
                        <button id="widgetType" name="widgetType" draggable="true" ondragstart="dragStart(event)" value="countdown">Countdown</button>
                        <!-- <a href="#"><i class="fa fa-pencil"></i> Draft</a> -->
                      </a>
                    </li>
                    <li>
                      <button id="widgetType" name="widgetType" draggable="true" ondragstart="dragStart(event)" value="caledar">Calendar</button>
                    </li>
                    <li>
                      <button id="widgetType" name="widgetType" draggable="true" ondragstart="dragStart(event)" value="weather">Weather</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
              <div class="hpanel email-compose">
                <div class="panel-body no-padding">
                  <div id="dropzone" class="dropmail">
                    <!-- <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo-upload"> -->
                    <!-- </form> -->
                  </div>
                  <div class="pull-right">
                    <div class="btn-group active-hook">
                      <button class="btn btn-default"><i class="fa fa-edit"></i> Save</button>
                      <a href="<?= base_url() ?>layout">
                        <button class="btn btn-default"><i class="fa fa-trash"></i> Cancel</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>


    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- moment js
    ============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/calendar/moment.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/calendar/fullcalendar-active.js"></script>
    <!-- summernote JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/summernote/summernote.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/summernote/summernote-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/form-validation/jquery.form.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/form-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/form-validation/form-active.js"></script>
    <!-- multiple email JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/multiple-email/multiple-email-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
</body>

</html>