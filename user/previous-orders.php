<?php include 'links.php' ?>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label">Quick Boosters</p>
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
        <!-- chart box one -->
        <!-- ============================================================== -->
        <div class="row">
          <!--column starts-->
          <div class="col-lg-12 col-md-12">
            <div class="card panel-main o-income panel-refresh">
              <div>
                <div class="card-body panel-wrapper">
                  <div class="d-flex m-b-10 no-block">
                    <h5 class="card-title m-b-3 mt-3  align-self-center">Your Previous Orders</h5>
                  </div>
                  <div  id="slimtest2" style="height:460px;">
                    <div class="table-responsive">
                      <div class="table-responsive">
                        <table class="table color-table">
                          <tbody>
                            <tr>
                              <th></th>
                              <th>Name</th>
                              <th>User Name</th>
                              <th>Email</th>
                              <th>Status</th>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>full name</td>
                              <td>Username</td>
                              <td>muradmalik7@gmail.com</td>
                              <td>status</td>
                              <td><button class="btn btn-danger">Ban User</button></td>
                              <td><button class="btn btn-primary">Un-Ban</button></td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>full name</td>
                              <td>Username</td>
                              <td>muradmalik7@gmail.com</td>
                              <td>status</td>
                              <td><button class="btn btn-danger">Ban User</button></td>
                              <td><button class="btn btn-primary">Un-Ban</button></td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>full name</td>
                              <td>Username</td>
                              <td>muradmalik7@gmail.com</td>
                              <td>status</td>
                              <td><button class="btn btn-danger">Ban User</button></td>
                              <td><button class="btn btn-primary">Un-Ban</button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- Column ends-->
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
