


<!DOCTYPE html>
<html lang="en">

<head>
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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="data_table">
                  <table id="example" class="table table-striped table-bordered">
                    <thead class="table-dark">
                      <tr>
                        <th>Employee ID</th>
                        <th>Employee First Name</th>
                        <th>Employee Last Name</th>
                        <th>Birth Date</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Type</th>
                        <th>Joining Date</th>
                        <th>Salary</th>
                        <th>Phone Number</th>
                        <th>E-mail</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>

                      <?php
                    include "config.php";
                    $sql = "SELECT e_id, e_fname, e_lname, bdate, e_age, e_sex, e_type, e_jdate, e_sal, e_phno, e_mail, e_add FROM employee where e_id<>1";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                
                    echo "<tr>";
                        echo "<td>" . $row["e_id"]. "</td>";
                        echo "<td>" . $row["e_fname"] . "</td>";
                        echo "<td>" . $row["e_lname"] . "</td>";
                        echo "<td>" . $row["bdate"] . "</td>";
                        echo "<td>" . $row["e_age"]. "</td>";
                        echo "<td>" . $row["e_sex"]. "</td>";
                        echo "<td>" . $row["e_type"]. "</td>";
                        echo "<td>" . $row["e_jdate"]. "</td>";
                        echo "<td>" . $row["e_sal"]. "</td>";
                        echo "<td>" . $row["e_phno"]. "</td>";
                        echo "<td>" . $row["e_mail"]. "</td>";
                        echo "<td>" . $row["e_add"]. "</td>";
                        echo "<td align=center>";
                        echo "<a class='button1 edit-btn' href=employee-update.php?id=".$row['e_id'].">Edit</a>";
                        echo "<a onclick='return confirm('Are you sure to delete?');' class='button1 del-btn' href=employee-delete.php?id=".$row['e_id'].">Delete</a>";
                        echo "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                
                    $conn->close();
                    
                      
                    
                      
                      
                      
                      
                      ?>
                    </tbody>


                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include './Components/footer.php' ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->















  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>

  <script src="datatable/js/bootstrap.bundle.min.js"></script>
  <script src="datatable/js/jquery-3.6.0.min.js"></script>
  <script src="datatable/js/datatables.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/custom.js"></script>
</body>

</html>