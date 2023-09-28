<h1>Patients by doctor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>Pat ID</th>
      <th>Patient Name</th>
      <th>Description</th>
      <th>treatment_name</th>
      <th>treatment_startdate</th>
      <th>treatment_enddate</th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($patient = $patients-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $patient['patient_id'];?></td>
                    <td>
                      <?php echo $patient['patient_name'];?></td>
                    </td>
                    <td>
                      <?php echo $patient['patient_description'];?></td>
                    </td>
                  </tr>                  
                <?php
              }
        ?>
      </tbody>    
  </table>
</div>
