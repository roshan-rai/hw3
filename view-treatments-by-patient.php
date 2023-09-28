<h1>Treatments by Patient</h1>
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
            while ($treatment = $treatments-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $treatment['patient_id'];?></td>
                    <td><?php echo $treatment['patient_name'];?></td>
                    <td> <?php echo $treatment['patient_description'];?></td>
                    <td><?php echo $treatment['treatment_name'];?></td>
                    <td><?php echo $treatment['treatment_startdate'];?></td>
                    <td><?php echo $treatment['treatment_enddate'];?></td>
                  </tr>                  
                <?php
              }
        ?>
      </tbody>    
  </table>
</div>
