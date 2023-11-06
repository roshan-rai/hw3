<?php
require_once("util-db.php");
require_once("model-doctors-with-patients.php");

$pageTitle = "Doctors";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
        if(insertDoctorWithPatients( $_POST['did'], $_POST['pid'], $_POST['treatment_name'], $_POST['sDate'], $_POST['eDate']) )
      {
        echo '<div class="alert alert-success" role="alert"> Information successfully added!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error in Adding!</div>';
      }
      break;
    case "Edit":
        if( updateDoctorWithPatients($_POST['tid'], $_POST['did'], $_POST['pid'], $_POST['treatment_name'], $_POST['sDate'], $_POST['eDate']))
      {
        echo '<div class="alert alert-success" role="alert"> Information successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
        case "Delete":
      if (deleteDoctorWithPatients($_POST['tid'])) 
      {
            echo '<div class="alert alert-success" role="alert"> Treatment successfully deleted!</div>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }  
  }
}
$doctors = selectDoctors();

include "view-doctors-with-patients.php";
include "view-footer.php";
?>
