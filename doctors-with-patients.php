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
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
    case "Edit":
      if(updatePatients($_POST['pName'], $_POST['pDescription'], $_POST['pid']))
      {
        echo '<div class="alert alert-success" role="alert"> Patients successfully edited!</div>';
      }
      else
      {
       echo '<div class="alert alert-danger" role="alert"> Error</div>';
      }
      break;
        case "Delete":
      if (deletePatients($_POST['pid'])) 
      {
            echo '<div class="alert alert-success" role="alert"> Patient successfully deleted!</div>';
        } 
      else {
    echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }  

$treatments = selectDoctors();

include "view-doctors-with-patients.php";
include "view-footer.php";
?>
