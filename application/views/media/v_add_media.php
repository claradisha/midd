<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Multi Upload | Kiaalap - Kiaalap Admin Template</title>
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
  <!-- dropzone CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/dropzone/dropzone.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>



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
    <div class="header-advance-area">



      <!-- Mobile Menu start -->

      <!-- Mobile Menu end -->

      <div class="breadcome-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcome-list single-page-breadcome">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="breadcome-heading">
                      <form role="search" class="sr-input-func">
                        <h3>Add Media</h3>
                        <p>Add your media here!</p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Multi Upload Start-->
    <div class="multi-uploaded-area mg-b-15">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?= form_open_multipart('media/postMedia') ?>
            <div class="dropzone-pro mg-tb-30">
              <!-- <div id="dropzone1" class="multi-uploader-cs" >
                                <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload" name="files">
                                    <div class="dz-message needsclick download-custom">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <h2>Drop files here or click to upload.</h2>
                                        <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                        </p>
                                    </div>
                                </form>
                            </div> -->
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label class="login2 pull-left pull-left-pro">image</label>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input type="file" class="form-control" id="urlMedia" name="urlMedia" value="upload">
                  <p>Please provide the remote Url to the file </p>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label class="login2 pull-left pull-left-pro">Media Name</label>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input type="file" class="form-control" id="fileMedia" name="fileMedia" value="upload">
                  <p>The name of the media (1 - 50 character)</p>
                </div>
              </div> -->

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label class="login2 pull-left pull-left-pro">Media Name</label>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input type="text" class="form-control" id="mediaName" name="mediaName" />
                  <p>The name of the media (1 - 50 character)</p>
                </div>
              </div>
              <div class="login-btn-inner">
                <div class="row">
                  <div class="col-lg-3"></div>
                  <div class="col-lg-9">
                    <div class="login-horizental cancel-wp pull-right form-bc-ele">
                      <button class="btn btn-white" type="submit">Cancel</button>
                      <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Multi Upload End-->

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
  <!-- tawk chat JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/tawk-chat.js"></script>
</body>

</html>