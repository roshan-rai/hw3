<!-- Modal -->
<div class="modal fade" id="newTreatmentModal" tabindex="-1" aria-labelledby="newTreatmentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTreatmentModalLabel">New Patients</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="did" class="form-label">Doctor</label>
                  <input type="text" class="form-control" id="did" name="did">
            </div>
             <div class="mb-3">
              <label for="pid" class="form-label">Patient ID</label>
                  <input type="text" class="form-control" id="pid" name="pid">
            </div>
            <div class="mb-3">
              <label for="treatment_name" class="form-label">Treatment Name</label>
                  <input type="text" class="form-control" id="treatment_name" name="treatment_name">
            </div>
            <div class="mb-3">
              <label for="sDate" class="form-label">Start Date </label>
              <input type="text" class="form-control" id="sDate" name="sDate">
            </div>
            <div class="mb-3">
              <label for="eDate" class="form-label">End Date </label>
              <input type="text" class="form-control" id="eDate" name="eDate">
            </div>
                <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
