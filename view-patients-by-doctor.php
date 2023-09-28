<h1>Patients by doctor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>Pat ID</th>
      <th>Patient Name</th>
      <th>Description</th>
      <th>Treatment Name</th>
      <th>Treatment StartDate</th>
      <th>Treatment EndDate</th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($patient = $patients-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $patient['patient_id'];?></td>
                    <td><?php echo $patient['patient_name'];?></td>
                    <td> <?php echo $patient['patient_description'];?></td>
                    <td><?php echo $patient['treatment_name'];?></td>
                    <td><?php echo $patient['patient_description'];?></td>
                    <td><?php echo $patient['patient_description'];?></td>
                  </tr>                  
                <?php
              }
        ?>
      </tbody>    
  </table>
</div>
