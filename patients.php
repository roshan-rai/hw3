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
    // Add more cases here if needed
  }
}

$patients = selectPatients();
include "view-patients.php";
include "view-footer.php";
?>
