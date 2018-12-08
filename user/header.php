<?php
if (!isset($_SESSION["userId"])) {
  echo '<script>window.location.replace("../index.php");</script>';
}
?>

<header class="topbar">
  <div Class="container">
    <nav class="navbar top-navbar navbar-expand-md navbar-light" style="padding: 10px 5px">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">
          <span><img src="assets/imgs/logo.png" width="230px" height="80px" alt="homepage" class="dark-logo dark-logo2" /></span>
        </a>
      </div>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <div class="top-bar-main" >
        <a href="queries/signout.php" class="btn btn-primary pull-right">Logout</a>
      </div>
    </nav>
  </div>
</header>
