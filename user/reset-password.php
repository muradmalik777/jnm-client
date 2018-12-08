<?php include 'links.php' ?>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label">Quick Booster</p>
  </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
  <!-- ============================================================== -->
  <!-- Container1140px -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Topbar header - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <?php include 'header.php' ?>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <div class="container" style="margin-top:40px">
    <?php include 'navbar.php' ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- form starts -->
          <div class="col-lg-8 col-md-12 box">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-uppercase m-b-25">Reset Password</h4>
                <form class="form" id="resetPasswordForm">
                  <div class="form-group row">
                    <div class="col-8">
                      <div class="ico-addon addon-lg">
                        <input class="form-control" type="text" value="<?php echo $_SESSION["userId"]; ?>" name="userId" required readonly hidden>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-4 col-form-label">Previous Password</label>
                    <div class="col-8">
                      <div class="ico-addon addon-lg">
                        <input class="form-control" type="password" name="prev_password"  placeholder="enter previous password" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-4 col-form-label">New Password</label>
                    <div class="col-8">
                      <div class="ico-addon addon-lg">
                        <input class="form-control" type="password" name="new_password"  placeholder="enter password" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-4 col-form-label">Confirm New Password</label>
                    <div class="col-8">
                      <div class="ico-addon addon-lg">
                        <input class="form-control" type="password" name="confirm_password"  placeholder="confirm new password" required>
                      </div>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-primary pull-right">Reset Password</button>
                </form>
              </div>
            </div>
          </div>
          <!--form ends-->
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card panel-main o-income panel-refresh">
              <div class="refresh-container">
                <div class="preloader">
                  <div class="loader">
                    <div class="loader__figure"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="plugins/vendors/bootstrap/js/popper.min.js"></script>
<script src="plugins/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="plugins/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--c3 JavaScript -->
<script src="assets/js/main.js"></script>
<script src="plugins/vendors/d3/d3.min.js"></script>
<script src="plugins/vendors/c3-master/c3.min.js"></script>
<!--jquery knob -->
<script src="plugins/vendors/knob/jquery.knob.js"></script>
<!--Sparkline JavaScript -->
<script src="plugins/vendors/sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="plugins/vendors/toast-master/js/jquery.toast.js"></script>
<!-- Dashboard JS -->
<script src="assets/js/dashboard-shop.js"></script>
</body>
</html>
