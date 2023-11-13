<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.all.min.js"></script>

<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPatients($_POST['pName'], $_POST['pDescription'])) {
        echo '<div class="alert alert-success" role="alert">Patients successfully added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updatePatients($_POST['pName'], $_POST['pDescription'], $_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Patients successfully edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deletePatients($_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Patient successfully deleted!</div>';
        // Include SweetAlert2 JavaScript for success here
        <script>;
        Swal.fire({';
       title: "Success",;
        text: "Patient deleted successfully",;
        icon: "success",;
        echo '});';
        echo '</script>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
        // Include SweetAlert2 JavaScript for error here
        echo '<script>';
        echo 'Swal.fire({';
        echo '  title: "Failed",';
        echo '  text: "Delete patient failed",';
        echo '  icon: "error",';
        echo '});';
        echo '</script>';
      }
      break;
    
  }
}

$patients = selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
