<?php
require_once("util-db.php");
require_once("model-treatments-by-patient.php");

$pageTitle = "Treatments by Patient";
include "view-header.php";
$treatments = selectTreatmentsByPatient($_POST['pid']);
include "view-treatments-by-patient.php";
include "view-footer.php";
?>
