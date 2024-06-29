<?php include 'Components/navbar.php';
include 'Components/sidebar.php'; 



include "config.php";
	
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $qry1="SELECT * FROM meds WHERE med_id='$id'";
    $result = $conn->query($qry1);
    $row = $result -> fetch_row();
}
	
?>

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
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-primary text-center">Add Medicine Details</h2>
                        <form class="forms-sample" method="post" action="updateinventory.php">
                            <div class="form-group">
                                <label for="medicineid">Medicine ID</label>
                                <input type="text" name="medid" value="<?php echo $row[0]; ?>" class="form-control" id="medicineid" placeholder="Medicine ID">
                            </div>
                            <div class="form-group">
                                <label for="medicinename">Medicine Name</label>
                                <input type="text" name="medname" value="<?php echo $row[1]; ?>" class="form-control" id="medicinename" placeholder="Medicine Name">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Qantity</label>
                                <input type="number" name="qty" min="1" value="<?php echo $row[2]; ?>" class="form-control" id="quantity" placeholder="Quantity">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-select" name="cat" value="<?php echo $row[3]; ?>" aria-label="Default select example" id="category">
                                    <option value="1">Tablet</option>
                                    <option value="2">Capsule</option>
                                    <option value="3">Syrup</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="sp" class="form-control" value="<?php echo $row[4]; ?>" id="price" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="loc" class="form-control" value="<?php echo $row[5]; ?>" id="location" placeholder="Location">
                            </div>
                            <button type="submit" name="updateinventory" class="btn btn-primary me-5">Add Medicine</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>				
	<?php
if(isset($_POST['updateinventory'])){
		if( isset($_POST['medname'])||isset($_POST['qty'])||isset($_POST['cat'])||isset($_POST['sp'])||isset($_POST['loc'])) {
			 $id=$_POST['medid'];
			 $name=$_POST['medname'];
			 $qty=$_POST['qty'];
			 $cat=$_POST['cat'];
			 $price=$_POST['sp'];
			 $lcn=$_POST['loc'];
			 
		$sql="UPDATE meds SET med_name='$name',med_qty='$qty',category='$cat',med_price='$price',location_rack='$lcn' where med_id='$id'";
		$query=mysqli_query($conn,$sql);
        header("location:inventory.php");
        if ($conn->query($sql)){
            
        }
		
		else
		echo "<p style='font-size:8;color:red;'>Error! Unable to update.</p>";
		}
    }
	?>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <?php include 'Components/footer.php' ?>
    <!-- partial -->
</div>