<?php

include "../config.php";

if (isset($_POST['submit'])) {

  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $password = mysqli_real_escape_string($conn, $_POST['pwd']);

  if ($uname != "" && $password != "") {

    $sql = "SELECT * FROM admin WHERE a_username='$uname' AND a_password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    if (!$row) {
      echo "<p style='color:red;'>Invalid username or password!</p>";
    } else {
      session_start();
      $_SESSION['user'] = $uname;
      header('location:../dashboard.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h2 class="text-center text-primary justify-content-center">Admin Login</h2>
              <form class="pt-3" method="post" action="login.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="uname" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="pwd" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
              
                  <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Log In</button>
                </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
</body>

</html>