<?php include 'Components/navbar.php';
include 'Components/sidebar.php'; 



include "config.php";
	 
	if(isset($_POST['addinventory']))
	{
	$id = mysqli_real_escape_string($conn, $_REQUEST['medid']);
	$name = mysqli_real_escape_string($conn, $_REQUEST['medname']);
	$qty = mysqli_real_escape_string($conn, $_REQUEST['qty']);
	$category = mysqli_real_escape_string($conn, $_REQUEST['cat']);
	$sprice = mysqli_real_escape_string($conn, $_REQUEST['sp']);
	$location = mysqli_real_escape_string($conn, $_REQUEST['loc']);

	 
	$sql = "INSERT INTO meds VALUES ($id, '$name', $qty,'$category',$sprice, '$location')";
	$query=mysqli_query($conn, $sql);
    
    }
	 
	$conn->close();
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
                        <h2 class="text-primary text-center">Add Medicine Details</h2>
                        <form class="forms-sample" method="post" action="addinventory.php">
                            <div class="form-group">
                                <label for="medicineid">Medicine ID</label>
                                <input type="text" name="medid" class="form-control" id="medicineid" placeholder="Medicine ID">
                            </div>
                            <div class="form-group">
                                <label for="medicinename">Medicine Name</label>
                                <input type="text" name="medname" class="form-control" id="medicinename" placeholder="Medicine Name">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Qantity</label>
                                <input type="number" name="qty" min="1" class="form-control" id="quantity" placeholder="Quantity">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-select" name="cat" aria-label="Default select example" id="category">
                                    <option value="1">Tablet</option>
                                    <option value="2">Capsule</option>
                                    <option value="3">Syrup</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="sp" class="form-control" id="price" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="loc" class="form-control" id="location" placeholder="Location">
                            </div>
                            <button type="submit" name="addinventory" class="btn btn-primary me-5">Add Medicine</button>
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