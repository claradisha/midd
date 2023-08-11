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
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/xibologo.png">
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
  <style>
    .button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    /* Gaya tombol khusus untuk opsi 'Media' */
    .button-media {
      background-color: #2196F3;
    }

    /* Gaya tombol khusus untuk opsi 'Clock' */
    .button-clock {
      background-color: #FF9800;
    }

    /* Gaya tombol khusus untuk opsi 'Embed' */
    .button-embed {
      background-color: #FF5722;
    }

    /* Gaya tombol khusus untuk opsi 'Website' */
    .button-website {
      background-color: #9C27B0;
    }

    /* Gaya text area */
    .textarea-visible {
      display: block;
    }
  </style>
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
  <!-- Start Left menu area -->

  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">

    <div class="header-advance-area">

    </div>
    <!-- Main Content -->


    <!-- Basic Form Start -->
    <div class="basic-form-area mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
              <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                  <h1>Edit Layout</h1>
                </div>
              </div>
              <form method="post" action="<?= base_url() ?>postMedia/<?= $playlistId ?>/<?= $layoutId ?>">
                <div class="sparkline12-graph">
                  <div class="basic-login-form-ad">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="all-form-element-inner">
                          <!-- <form method="post" action=""> -->
                          <div class="form-group-inner">
                            <div class="row">
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label class="login2 pull-right pull-right-pro">Name</label>
                              </div>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <!-- <input type="text" class="form-control" id="layoutId" name="layoutId" /> -->

                                <?php
                                if (is_array($layout)) {
                                  foreach ($layout as $key) {
                                    echo '<input type="text" class="form-control" id="layoutName" name="layoutName" value="' . $key->layout . '">';
                                  }
                                } elseif (is_object($layout)) {
                                  echo '<input type="text" class="form-control" id="layoutName" name="layoutName" value="' . $layout->layout . '">';
                                } else {
                                  echo '<input type="text" class="form-control" id="layoutName" name="layoutName" value="' . $layout . '">';
                                }
                                ?>


                              </div>
                            </div>
                          </div>
                          <div class="form-group-inner">
                            <div class="row">
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label class="login2 pull-right pull-right-pro">Playlist Id</label>
                              </div>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                <?php
                                if (is_array($playlistId)) {
                                  foreach ($playlistId as $key) {
                                    echo '<input type="text" class="form-control" id="layoutName" name="layoutName" value="' . $key->playlistId . '">';
                                  }
                                } elseif (is_object($layout)) {
                                  echo '<input type="text" class="form-control" id="layoutName" name="layoutName" value="' . $layout->playlistId . '">';
                                } else {
                                  echo '<input type="text" class="form-control" id="layoutName" name="layoutName" value="' . $playlistId . '">';
                                }
                                ?>
                              </div>
                            </div>
                          </div>

                          <div class="form-group-inner">
                            <div class="row">
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label class="login2 pull-right pull-right-pro">Media</label>
                              </div>
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="form-select-list">
                                  <select data-placeholder="Please select a Layout for this Event to show..." class="form-control custom-select-value" id="Media" name="Media">
                                    <?php foreach ($name as $key) {
                                      if ($key->mediaType === 'image' || $key->mediaType === 'video') { ?>
                                        <option value=<?= $key->mediaId ?>><?= $key->name ?></option>
                                    <?php }
                                    } ?>
                                  </select>
                                  <p> Select one media that you wanna to assign in the Layout</p>
                                </div>
                              </div>
                            </div>
              </form>
              <div class="form-group-inner">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Widget</label>
                  </div>
                  <div class="login-horizental cancel-wp pull-left form-bc-ele">
                    <p for="options">Select an Widget:</p>
                    <select id="options" name="options" onchange="showAdditional(this.value)">
                      <!-- <option value="media">Media</option>
                      <option value="website">Website</option> -->
                      <option value="embed">Embeded</option>
                      <option value="clock">Clock</option>
                    </select>
                    <div id="additionalOptions" style="display: none;">
                      <label for="mediaName">Fill in the Url that you wanna to embeded:</label>
                      <!-- Text area untuk opsi selain 'Media' -->
                      <textarea id="comments" name="comments" rows="4" cols="50" class="textarea-visible"></textarea>
                      <!-- Tombol-tombol unik berdasarkan opsi yang dipilih -->
                      <button type="button" class="button dynamic-button-hidden" id="dynamicButtonEmbed" onclick="handleButtonClick('embed')">Submit Embed</button>
                      <a href="<?= base_url() ?>designLayout/Clock/<?= $playlistId ?>/<?= $layoutId ?>">
                        <button type="button" class="button dynamic-button-hidden" id="dynamicButtonClock" onclick="handleButtonClick('clock')">Submit Clock</button>
                      </a>
                      <!-- Tombol "Submit" di sini akan muncul setelah pengguna memilih opsi selain "Media"  -->
                      <a href="<?= base_url() ?>designLayout/Clock/<?= $playlistId ?>/<?= $layoutId ?>">
                        <button type="submit" class="button dynamic-button-hidden" id="submitButton">Submit</button>
                      </a>
                    </div>
                  </div>`
                </div>
              </div>
              <div class="form-group-inner">
                <div class="login-btn-inner">
                  <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                      <div class="login-horizental cancel-wp pull-right form-bc-ele">
                        <a href="<?= base_url() ?>layout">
                          <button class="btn btn-white" type="submit">Cancel</button>
                        </a>
                        <button class=" btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <!-- handleButtonClick
		============================================ -->
  <script>
    function showAdditional(choice) {
      var additionalOptionsDiv = document.getElementById("additionalOptions");
      var dynamicButtonMedia = document.getElementById("dynamicButtonMedia");
      var dynamicButtonWebsite = document.getElementById("dynamicButtonWebsite");
      var dynamicButtonEmbed = document.getElementById("dynamicButtonEmbed");
      var dynamicButtonClock = document.getElementById("dynamicButtonClock");
      var submitButton = document.getElementById("submitButton");
      var dropdown = document.getElementById("mediaName");
      var textarea = document.getElementById("comments");

      // Sembunyikan semua tombol dinamis
      dynamicButtonMedia.style.display = "none";
      dynamicButtonWebsite.style.display = "none";
      dynamicButtonEmbed.style.display = "none";
      dynamicButtonClock.style.display = "none";
      submitButton.style.display = "none";
      dropdown.style.display = "none";
      textarea.style.display = "none";

      if (choice === "media") {
        additionalOptionsDiv.style.display = "block";
        dynamicButtonMedia.style.display = "block";
        dropdown.style.display = "block"; // Tampilkan select option hanya untuk opsi 'Media'
      } else if (choice === "clock") {
        additionalOptionsDiv.style.display = "block";
        dynamicButtonClock.style.display = "block";
      } else {
        additionalOptionsDiv.style.display = "block";
        textarea.style.display = "block"; // Tampilkan textarea untuk opsi selain 'Media' dan 'Website'
        switch (choice) {
          case "website":
            dynamicButtonWebsite.style.display = "block";
            break;
          case "embed":
            dynamicButtonEmbed.style.display = "block";
            break;
        }
      }
    }

    function handleButtonClick(option) {
      // Tambahkan logika di sini untuk menangani klik tombol dinamis berdasarkan opsi yang dipilih
      alert("Button clicked: " + option);
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
  <script src="<?= base_url('assets/'); ?>js/sparkline/sparkline-active.js"></script>
  <!-- calendar JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/calendar/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/calendar/fullcalendar.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/calendar/fullcalendar-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <!-- tawk chat JS
		============================================ -->

</body>

</html>