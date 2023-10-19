<h1>Doctors with Patients</h1>
<?php include "view-patients-newform.php"; ?>

<div class="card-group">
    <?php while ($doctor = $doctors->fetch_assoc()) { ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $doctor['doctor_name']; ?></h5>
                <p class="card-text">
                    <ul class="list-group">
                        <?php
                        $patients = selectPatientsByDoctor($doctor['doctor_id']);
                        while ($patient = $patients->fetch_assoc()) {
                        ?>
                            <li class="list-group-item">
                                <?php echo $patient['patient_name']; ?> - <?php echo $patient['treatment_name']; ?> - <?php echo $patient['treatment_startdate']; ?> - <?php echo $patient['treatment_enddate']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </p>
                <p class="card-text"><small class="text-body-secondary">Specialist: <?php echo $doctor['doctor_area']; ?></small></p>
                
                <form method="post" action="treatments-by-patient.php">
                    <input type="hidden" name="pid" value="<?php echo $patient['patient_id']; ?>"/>
                    <button type="submit" class="btn btn-primary">Treatments</button>
                </form>

                <form method="post" action="">
                    <input type="hidden" name="pid" value="<?php echo $patient['patient_id']; ?>"/>
                    <input type="hidden" name="actionType" value="Delete">
                    <button type="submit" class="btn btn-primary"
