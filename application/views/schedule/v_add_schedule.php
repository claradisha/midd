<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Basic Form Element | Kiaalap - Kiaalap Admin Template</title>
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
  <!-- touchspin CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/touchspin/jquery.bootstrap-touchspin.min.css">
  <!-- datapicker CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/datapicker/datepicker3.css">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/form/themesaller-forms.css">
  <!-- colorpicker CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/colorpicker/colorpicker.css">
  <!-- select2 CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/select2/select2.min.css">
  <!-- chosen CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/chosen/bootstrap-chosen.css">
  <!-- ionRangeSlider CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionRangeSlider/ion.rangeSlider.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
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
    <div class="header-advance-area">


      <!-- Main Content -->


    </div>
    <!-- Basic Form Start -->

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
          <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
              <h1>Schedule Event</h1>
            </div>
          </div>
          <form method="post" action="<?= base_url() ?>addSchedule/postSchedule">
            <div class="sparkline12-graph">
              <div class="basic-login-form-ad">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-form-element-inner">
                      <form action="#">
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">Display</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="form-select-list">
                                <select class="form-control custom-select-value" name="displayName" id="displayName">
                                  <?php foreach ($display as $key) { ?>
                                    <option value="<?= $key->displayGroupId ?>"><?= $key->display ?></option>
                                    <!-- <option>Display 2</option>
                                <option>Display 3</option>
                                <option>Display 4</option> -->
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">Dayparting</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="form-select-list">
                                <select class="form-control custom-select-value" name="account">
                                  <option>Custom</option>
                                  <option>Always</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">Start Time</label>
                            </div>
                            <div class="form-group data-custon-pick" id="data_3">
                              <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="startTime" id="startTime">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">End Time</label>
                            </div>
                            <div class="form-group data-custon-pick" id="data_3">
                              <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="endTime" id="endTime">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">Layout</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <div class="form-select-list">
                                <!-- <select id="js-example-basic-hide-search-multi" class="form-control custom-select-value" name="account">
                                
                            </select> -->
                                <select data-placeholder="Please select a Layout for this Event to show..." class="chosen-select" multiple="" tabindex="-1" id="layoutName" name="layoutName">
                                  <?php foreach ($layout as $key) { ?>

                                    <option value=<?= $key->campaignId ?>><?= $key->layout ?></option>

                                  <?php } ?>
                                </select>
                              </div>
                            </div>


                          </div>
                        </div>






                        <div class="form-group-inner">
                          <div class="login-btn-inner">
                            <div class="row">
                              <div class="col-lg-3"></div>
                              <div class="col-lg-9">
                                <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                  <button class="btn btn-white" type="submit">Cancel</button>
                                  <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Basic Form End-->

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
  <!-- touchspin JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/touchspin/touchspin-active.js"></script>
  <!-- colorpicker JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/colorpicker/jquery.spectrum.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/colorpicker/color-picker-active.js"></script>
  <!-- datapicker JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/datapicker/bootstrap-datepicker.js"></script>
  <script src="<?= base_url('assets/'); ?>js/datapicker/datepicker-active.js"></script>
  <!-- input-mask JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/input-mask/jasny-bootstrap.min.js"></script>
  <!-- chosen JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/chosen/chosen.jquery.js"></script>
  <script src="<?= base_url('assets/'); ?>js/chosen/chosen-active.js"></script>
  <!-- select2 JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/select2/select2.full.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/select2/select2-active.js"></script>
  <!-- ionRangeSlider JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/ionRangeSlider/ion.rangeSlider.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/ionRangeSlider/ion.rangeSlider.active.js"></script>
  <!-- rangle-slider JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/rangle-slider/rangle-active.js"></script>
  <!-- knob JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/knob/jquery.knob.js"></script>
  <script src="<?= base_url('assets/'); ?>js/knob/knob-active.js"></script>
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