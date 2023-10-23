<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPatientModal<?php echo $patient['patient_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <!-- SVG icon code -->
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editPatientModal<?php echo $patient['patient_id']; ?>" tabindex="-1" aria-labelledby="editPatientModalLabel<?php echo $patient['patient_id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editCourseModalLabel<?php echo $patient['patient_id']; ?>">Edit Doctor With Patients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="pName<?php echo $patient['patient_id']; ?>" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="pName<?php echo $patient['patient_id']; ?>" name="pName" value="<?php echo $patient['patient_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="treatmentName<?php echo $patient['patient_id']; ?>" class="form-label">Treatment Name</label>
                        <input type="text" class="form-control" id="treatmentName<?php echo $patient['patient_id']; ?>" name="treatmentName" value="<?php echo $patient['treatment_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="startDate<?php echo $patient['patient_id']; ?>" class="form-label">Start Date</label>
                        <input type="text" class="form-control" id="startDate<?php echo $patient['patient_id']; ?>" name="startDate" value="<?php echo $patient['treatment_startdate']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="endDate<?php echo $patient['patient_id']; ?>" class="form-label">End Date</label>
                        <input type="text" class="form-control" id="endDate<?php echo $patient['patient_id']; ?>" name="endDate" value="<?php echo $patient['treatment_enddate']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="doctor<?php echo $patient['patient_id']; ?>" class="form-label">Doctor</label>
                        <input type="text" class="form-control" id="doctor<?php echo $patient['patient_id']; ?>" name="doctor" value="<?php echo $patient['doctor_id']; ?>">
                    </div>
                    <input type="hidden" name="pid" value="<?php echo $patient['patient_id']; ?>">
                    <input type="hidden" name="actionType" value="Edit">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
