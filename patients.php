<?php
require_once("util-db.php");
require_once("model-patients.php");

$pageTitle = "Patients";
include "view-header.php";

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
