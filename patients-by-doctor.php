<?php
require_once("util-db.php");
require_once("model-patients-by-doctor.php");

$pageTitle = "Patients by Doctor";
include "view-header.php";
$patients = selectPatientsByDoctor($_GET['patient_id']);
include "view-patients-by-doctor.php";
include "view-footer.php";
?>
