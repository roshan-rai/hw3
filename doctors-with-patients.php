<?php
require_once("util-db.php");
require_once("model-doctors-with-patients.php");

$pageTitle = "Doctors";
include "view-header.php";
$doctors = selectDoctors();
include "view-doctors-with-patients.php";
include "view-footer.php";
?>
