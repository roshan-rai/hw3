<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if(insertPatients($_POST['pName'], $_POST['pDescription']))
      {
        echo '<div class="alert alert-success" role="alert"> Patients successfully added!</div>';
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


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertCourse($_POST['pName'], $_POST['pDescription']);
      break;
    // Add more cases here if needed
  }
}

$patients = selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
