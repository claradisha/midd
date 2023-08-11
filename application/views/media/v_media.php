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
  <!-- x-editor CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/editor/select2.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/editor/datetimepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/editor/bootstrap-editable.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/editor/x-editor-style.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/data-table/bootstrap-table.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/data-table/bootstrap-editable.css">
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



      <!-- Main content -->
      <div class="breadcome-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcome-list single-page-breadcome">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="breadcome-heading">
                      <form role="search" class="sr-input-func">
                        <h3>Library Media</h3>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcome-menu">
                      <a href="<?= base_url() ?>media/addMedia"><button type="button" class="btn btn-success">Add Media</button></a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
              <div class="sparkline13-hd">
                <?php
                if ($this->session->flashdata('succ_msg')) {
                  echo '
                                    <div class="alert alert-success">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <span class="alert-icon">
                                                <i class="anticon anticon-check-o"></i>
                                            </span>
                                            <span>' . $this->session->flashdata('succ_msg') . '</span>
                                        </div>
                                    </div>
                                ';
                }
                if ($this->session->flashdata('error')) {
                  echo '
                                      <div class="alert alert-danger">
                                          <div class="d-flex align-items-center justify-content-start">
                                              <span class="alert-icon">
                                                  <i class="anticon anticon-close-circle"></i>
                                              </span>
                                              <span>' . $this->session->flashdata('error') . '</span>
                                          </div>
                                      </div>
                                  ';
                }
                ?>
                <div class="main-sparkline13-hd">
                  <h1>Library Media</h1>
                </div>
              </div>

              <table id="table" data-toggle="table" data-pagination="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="id">ID</th>
                    <th data-field="name" data-editable="true">Name</th>
                    <th data-field="mediaType" data-editable="true">Media Type</th>
                    <th data-field="fileName" data-editable="true">File Name</th>
                    <th data-field="fileSize" data-editable="true">File Size</th>
                    <!-- <th data-field="fileSize">Owner</th> -->
                    <!-- <th data-field="task" data-editable="true">orientation</th>
                                                <th data-field="date" data-editable="true">Stats?</th> -->
                    <th data-field="action">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($media as $key) {
                    if ($key->mediaType === 'image' || $key->mediaType === 'video') { ?>
                      <tr>
                        <td></td>
                        <td><?= $key->mediaId ?></td>
                        <td><?= $key->name ?></td>
                        <!-- <td><?= $key->description ?></td> -->
                        <td><?= $key->mediaType ?></td>
                        <td><?= $key->fileName ?></td>
                        <td><?= $key->fileName ?></td>
                        <!-- <td><?= $key->orientation ?></td>
                                              <td><?= $key->status ?></td> -->
                        <td>
                          <button>Edit</button>
                          <button>delete</button>
                        </td>
                      </tr>
                  <?php }
                  } ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Static Table End -->




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
  <!-- data table JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/data-table/bootstrap-table.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/tableExport.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/data-table-active.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/bootstrap-table-editable.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/bootstrap-editable.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/bootstrap-table-resizable.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/colResizable-1.5.source.js"></script>
  <script src="<?= base_url('assets/'); ?>js/data-table/bootstrap-table-export.js"></script>
  <!--  editable JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/editable/jquery.mockjax.js"></script>
  <script src="<?= base_url('assets/'); ?>js/editable/mock-active.js"></script>
  <script src="<?= base_url('assets/'); ?>js/editable/select2.js"></script>
  <script src="<?= base_url('assets/'); ?>js/editable/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/editable/bootstrap-datetimepicker.js"></script>
  <script src="<?= base_url('assets/'); ?>js/editable/bootstrap-editable.js"></script>
  <script src="<?= base_url('assets/'); ?>js/editable/xediable-active.js"></script>
  <!-- Chart JS
		============================================ -->
  <script src="<?= base_url('assets/'); ?>js/chart/jquery.peity.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/peity/peity-active.js"></script>
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