<!DOCTYPE html>
<html lang="en">

<head>
<script src="echarts.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EPR System | Pharmaceutical Inventory Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/datatables.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'Components/navbar.php'; ?>
    <!-- partial -->

    <!-- partial:partials/_sidebar.html -->
    <?php include 'Components/sidebar.php'; ?>
    <!-- partial -->


    <!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>

var xValues = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var yValues = [23,34,56,73,47,54,34,56];
var barColors = ["red", "green","blue","orange","brown","blue","orange","brown"];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor:'skyblue',
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Weekly Sales"
    }
  }
});
</script>


<canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

<script>

var xValues = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var yValues = [1,2,3,4,5,6,7,8,9,];
var barColors = ["red", "green","blue","orange","brown","blue","orange","brown"];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor:'skyblue',
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Monthly Sales"
    }
  }
});
</script>

</body>
</html>

