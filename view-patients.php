<h1>Patients</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>Patient ID</th>
      <th>Patient Name</th>
      <th>Description</th>
      <th></th>
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
                    <td><?php echo $patient['patient_description'];?></td>
                    <td>
                      <form method="post" action="treatments-by-patient.php">
                        <input type="hidden" name="pid" value="<?php echo $patient['patient_id'];?>"/>
                            <button type="submit" class="btn btn-primary">Treatments</button>
                          </form>
                    </td>           
                  </tr>                  
                <?php
              }
        ?>
      </tbody>    
  </table>
</div>
