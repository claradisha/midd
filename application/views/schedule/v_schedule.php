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
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/favicon.ico">
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
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.1.0/main.min.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.1.0/main.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
        initialView: 'dayGridMonth',
        initialDate: '2023-07-07',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [<?= $Events ?>]
      });

      calendar.render();
    });







    // document.addEventListener('DOMContentLoaded', function() {
    //   var calendarEl = document.getElementById('calendar');

    //   // fetch('https://xibo.yntkts.my.id/api/schedule/data/events?from=2022-09-01%2000%3A00%3A00&to=2023-10-01%2000%3A00%3A00&displayGroupIds[]=-1')
    //   //   .then(response => response.json())
    //   //   .then(data => {
    //   //     // Gunakan data yang diterima
    //   //     console.log(data);
    //   var calendar = new FullCalendar.Calendar(calendarEl, {
    //     schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
    //     initialView: 'dayGridMonth',
    //     initialDate: '2023-07-07',
    //     headerToolbar: {
    //       left: 'prev,next today',
    //       center: 'title',
    //       right: 'dayGridMonth,timeGridWeek,timeGridDay'
    //     },
    //     events: data // Menggunakan data sebagai sumber events
    //   });

    //   calendar.render();
    // });
    //     .catch(error => {
    //       // Tangani kesalahan jika ada
    //       console.error(error);
    //     });
    // });
  </script>

</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- Start Left menu area -->

  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="<?= base_url('assets/'); ?>img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>



    <!-- Main content -->
    <div class="breadcome-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcome-list">
              <ul class="breadcome-menu">
                <a href="<?= base_url() ?>addSchedule"><button type="button" class="btn btn-success">Add Event</button></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="calender-area mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="calender-inner">
              <div id="calendar">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Full Calendar 
    =========================================== -->
  <script>

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
  <script src="<?= base_url('assets/'); ?>js/sparkline/sparkline-active.js"></script>
  <!-- calendar JS
		============================================ -->
  <!-- <script src="<?= base_url('assets/'); ?>js/calendar/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/calendar/fullcalendar.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/calendar/fullcalendar-active.js"></script> -->
  <!-- plugins JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <!-- tawk chat JS
		============================================ -->
  <!-- <script src="<?= base_url('assets/'); ?>js/tawk-chat.js"></script> -->
</body>

</html>