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
                      <div id="widgetDiv" draggable="true" ondragstart="dragStart(event)" data-widget="clock" onmousedown="handleMouseDown(event)">
                      </div>
                    </li>
                    <li>
                      <button id="widgetType" name="widgetType" draggable="true" ondragstart="dragStart(event)" value="countdown">Countdown</button>
                      <!-- <a href="#"><i class="fa fa-pencil"></i> Draft</a> -->
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
                      <button class="btn btn-default"><i class="fa fa-trash"></i> Discard</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    <script>
      // WARNING: For GET requests, body is set to null by browsers.
      var data = "layoutId=94";

      var xhr = new XMLHttpRequest();
      xhr.withCredentials = true;

      xhr.addEventListener("readystatechange", function() {
        if (this.readyState === 4) {
          console.log(this.responseText);
        }
      });

      xhr.open("GET", "https://xibo.yntkts.my.id/api/layout?layoutId=94&embed=regions%2Cplaylists%2Cwidgets%2Cwidget_validity%2Ctags%2Cpermissions%2Cactions");
      xhr.setRequestHeader("Authorization", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJpbmZvQHhpYm9zaWduYWdlLmNvbSIsImF1ZCI6ImFjOWZiN2Y3NGM3OTFiNmNmMTIwYzE0NWExYTY3NThiZDQxY2M1MDEiLCJqdGkiOiIzNzEzZjUzYzY3MTY4YjIzZWYxM2M2ODljNWMyNjQxNjlmNzQzY2ZjMzQ3YjdmMzIzZDA2NTM4ZmQxNWJhMDM1MjhmMzUxMjY0MTU0ZGQ3ZiIsImlhdCI6MTY4OTU1MTEwNCwibmJmIjoxNjg5NTUxMTA0LCJleHAiOjE2ODk1NTQ3MDQsInN1YiI6IjEiLCJzY29wZXMiOlsiYWxsIl19.c_SE9HwtLgtOMLAlWeyG-LKntOyZtOhHiPUEXyEDetredcrGUSzz8in8wuPodqN_6clwuntxzx32VVtG02RQSQ4L3KM0MYrTmvEpi4nEAOiool9U4-0mIVIXfQGdsyZ9sOApDFtrlMAFSWLlWN6QYwDHqGZz0WZX1Zon8lXCzTU_jaQcj6SUQGjE1zRl42H05p3JnRKZC5lpSJwBerFEQnWRJ1vt91NfCY1aEmIKnXS90on6wLJgT8mrUugGbgVONE3idjzQZ7CEcOz-Af-XpZ2XoXZ223lLbEUPOVyVtbvqWjbnNekiTDuncVQvJHwnuvKCiUkI1mZjfpmoGI2YOw");
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      // WARNING: Cookies will be stripped away by the browser before sending the request.
      // xhr.setRequestHeader("Cookie", "PHPSESSID=ndq1jsnq35ptkf9tr293curkdm");

      // xhr.onreadystatechange = function() {
      //   if (xhr.readyState === 4 && xhr.status === 200) {
      //     var widgetData = JSON.parse(xhr.responseText);
      //     renderWidgetPreview(widgetData);
      //   }
      // };

      xhr.send(data);

      // var xhr = new XMLHttpRequest();
      // xhr.open("GET", "https://xibo.yntkts.my.id/api/layout?layoutId=94&embed=regions%2Cplaylists%2Cwidgets%2Cwidget_validity%2Ctags%2Cpermissions%2Cactions", true);
      // xhr.onreadystatechange = function() {
      //   if (xhr.readyState === 4 && xhr.status === 200) {
      //     var widgetData = JSON.parse(xhr.responseText);
      //     renderWidgetPreview(widgetData);
      //   }
      // };
      // xhr.send();

      // Membangun tampilan preview widget
      function renderWidgetPreview(widgetData) {
        var widgetPreview = document.getElementById("dropzone");
        widgetPreview.innerHTML = "<h2>" + widgetData.title + "</h2>";
        widgetPreview.innerHTML += "<p>" + widgetData.description + "</p>";
        widgetPreview.innerHTML += "<img src='" + widgetData.imageUrl + "' alt='Widget Preview'>";
      }
    </script>
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