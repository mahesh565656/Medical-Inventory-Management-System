<?php 
include "Components/navbar.php";
include "Components/sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
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
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-primary text-center">Add Purchase Details</h2>
                        <form class="forms-sample" method="post" action="addpurchase.php">
                            <div class="form-group">
                                <label for="Purchaseid">Purchase ID</label>
                                <input type="text" name="P_ID" class="form-control" id="Purchaseid" placeholder="Purchase ID">
                            </div>
                            <div class="form-group">
                                <label for="Purchasename">Date of Purchase</label>
                                <input type="text" name="SUP_ID" class="form-control" id="Purchasename" placeholder="Purchase Name">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Manufacturing Date</label>
                                <input type="number" name="MED_ID" min="1" class="form-control" id="quantity" placeholder="Quantity">
                            </div>
                            
                            <div class="form-group">
                                <label for="price">Expiry Date</label>
                                <input type="text" name="sp" class="form-control" id="price" placeholder="Price">
                            </div>
                            
                            <button type="submit" name="addpurchase" class="btn btn-primary me-5">Add Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <?php include 'Components/footer.php' ?>
    <!-- partial -->
</div>