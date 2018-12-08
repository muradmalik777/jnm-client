<?php
include 'links.php';
?>
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
  <?php
  include 'header.php';
  ?>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <div class="container" style="margin-top:40px">
    <?php
      include 'navbar.php';
    ?>
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
          <!-- Column -->
          <div class="col-lg-12 col-md-12">
            <div class="card" style="min-height: 570px">
              <div class="card-body">
                <ul class="nav nav-pills pull-left m-b-20 mt-3">
                  <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Division Boost</a> </li>
                  <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Win Boost</a> </li>
                  <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Duo Queue</a> </li>
                  <li class="nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="true">Placement Matches</a> </li>
                  <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="true">Normal Draft</a> </li>
                </ul>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="tab-content br-n pn mt-4">
                  <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 left">
                        <div class="one">
                          <h5>Current Rank</h5>
                          <img src="assets/imgs/one.png" alt="">
                          <select class="select-box">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                            <option value="diamond">Diamond</option>
                          </select>
                          <select class="select-box">
                            <option value="division 1">Division 1</option>
                            <option value="division 2">Division 2</option>
                            <option value="division 3">Division 3</option>
                            <option value="division 4">Division 4</option>
                            <option value="division 5">Division 5</option>
                          </select>
                          <select class="select-box">
                            <option value="0-20 LP">0-20 LP</option>
                            <option value="21-40 LP">21-40 LP</option>
                            <option value="41-60 LP">41-60 LP</option>
                            <option value="61-80 LP">61-80 LP</option>
                            <option value="81-100 LP">81-100 LP</option>
                          </select>

                        </div>
                        <div class="two">
                          <h5>Desired Rank</h5>
                          <img src="assets/imgs/two.png" alt="">
                          <select class="select-box">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                            <option value="diamond">Diamond</option>
                          </select>
                          <select class="select-box">
                            <option value="division 1">Division 1</option>
                            <option value="division 2">Division 2</option>
                            <option value="division 3">Division 3</option>
                            <option value="division 4">Division 4</option>
                            <option value="division 5">Division 5</option>
                          </select>

                        </div>

                      </div>
                      <div class="col-lg-6 col-md-6 right">
                        <h5>Your Order</h5>

                      </div>
                    </div>
                  </div>
                  <div id="navpills-2" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 left">
                        <div class="one">
                          <h5>Current Rank</h5>
                          <img src="assets/imgs/one.png" alt="">
                          <select class="select-box">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                            <option value="diamond">Diamond</option>
                          </select>
                          <select class="select-box">
                            <option value="division 1">Division 1</option>
                            <option value="division 2">Division 2</option>
                            <option value="division 3">Division 3</option>
                            <option value="division 4">Division 4</option>
                            <option value="division 5">Division 5</option>
                          </select>
                        </div>
                        <div class="two">
                          <h5>Number of Wins</h5>
                          <!-- <img src="assets/imgs/two.png" alt=""> -->
                          <p id="demo"></p>
                          <input type="range" name="range" min="0" max="35" value="20" class="slider" id="myRange">

                        </div>

                      </div>
                      <div class="col-lg-6 col-md-6 right">
                        <h5>Your Order</h5>

                      </div>
                    </div>
                  </div>
                  <div id="navpills-3" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 left">
                        <div class="one">
                          <h5>Summoner</h5>
                          <input type="text" name="name" value="" placeholder="Name" class="select-box">
                          <select class="select-box">
                            <option value="Solo/Duo (5v5)">Solo/Duo (5v5)</option>
                            <option value="Flex Summoners Rift (5v5)">Flex Summoners Rift (5v5)</option>
                            <option value="Flex Twist Treeline (3v3)">Flex Twist Treeline (3v3)</option>
                          </select>
                          <select class="select-box">
                            <option value="division 1">Division 1</option>
                            <option value="division 2">Division 2</option>
                            <option value="division 3">Division 3</option>
                            <option value="division 4">Division 4</option>
                            <option value="division 5">Division 5</option>
                          </select>
                        </div>
                        <div class="two">
                          <h5>Current Rank</h5>
                          <img src="assets/imgs/three.png" alt="">
                          <select class="select-box">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                            <option value="diamond">Diamond</option>
                          </select>
                          <select class="select-box">
                            <option value="division 1">Division 1</option>
                            <option value="division 2">Division 2</option>
                            <option value="division 3">Division 3</option>
                            <option value="division 4">Division 4</option>
                            <option value="division 5">Division 5</option>
                          </select>

                        </div>

                      </div>
                      <div class="col-lg-6 col-md-6 right">
                        <h5>Your Order</h5>

                      </div>
                    </div>
                  </div>
                  <div id="navpills-4" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 left">
                        <div class="one">
                          <h5>Last Season Rank</h5>
                          <img src="assets/imgs/four.png" alt="">
                          <select class="select-box">
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                            <option value="diamond">Diamond</option>
                          </select>
                        </div>
                        <div class="two">
                          <h5>Number of Wins</h5>
                          <!-- <img src="assets/imgs/two.png" alt=""> -->
                          <p id="demo2"></p>
                          <input type="range" name="range" min="0" max="50" value="20" class="slider" id="myRange2">

                        </div>

                      </div>
                      <div class="col-lg-6 col-md-6 right">
                        <h5>Your Order</h5>

                      </div>
                    </div>
                  </div>
                  <div id="navpills-5" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 left">
                          <h5>Number of Wins</h5>
                          <!-- <img src="assets/imgs/two.png" alt=""> -->
                          <p id="demo3"></p>
                          <input type="range" name="range" min="0" max="50" value="20" class="slider" id="myRange3">
                      </div>
                      <div class="col-lg-6 col-md-6 right">
                        <h5>Your Order</h5>

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
<!--Morris JavaScript -->
<script src="plugins/vendors/raphael/raphael-min.js"></script>
<script src="plugins/vendors/morrisjs/morris.js"></script>
<!-- Popup message jquery -->
<script src="plugins/vendors/toast-master/js/jquery.toast.js"></script>
<!-- Dashboard JS -->
<script src="assets/js/dashboard-shop.js"></script>
<!-- Vector map JavaScript -->
<script src="plugins/vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="plugins/vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/vendors/vectormap/jvectormap.custom.js"></script>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

var slider = document.getElementById("myRange2");
var output = document.getElementById("demo2");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

var slider = document.getElementById("myRange3");
var output = document.getElementById("demo3");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
</body>

</html>
