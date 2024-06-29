

<?php
include "config.php";

if(isset($_GET['med_id'])) {
    $med_id = $_GET['med_id'];
    // Sanitize and validate the input
    $med_id = mysqli_real_escape_string($conn, $med_id);

    // Check if there are related records in the purchase table
    $check_sql = "SELECT COUNT(*) as count FROM purchase WHERE MED_ID='$med_id'";
    $check_result = $conn->query($check_sql);
    $check_row = $check_result->fetch_assoc();
    
    if($check_row['count'] > 0) {
        header("location: inventory.php");
          } else {
        // No related records found, proceed with deletion
        $delete_sql = "DELETE FROM meds WHERE MED_ID='$med_id'";
        if ($conn->query($delete_sql)) {
            header("location: inventory.php");
            exit(); // Always exit after redirection
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
