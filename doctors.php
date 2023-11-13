<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
require_once("util-db.php");
require_once("model-doctors.php");

$pageTitle = "Doctors";
include "view-header.php";
$doctors = selectDoctors();
include "view-doctors.php";
include "view-footer.php";
?>
