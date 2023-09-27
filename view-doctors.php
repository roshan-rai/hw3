<h1>Doctors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Area</th>
         <th></th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($doctor = $doctors-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $doctor['doctor_id'];?></td>
                    <td>
                      <?php echo $doctor['doctor_name'];?></td>
                    </td>
                    <td>
                      <?php echo $doctor['doctor_area'];?></td>
                    </td>
                    <td><a href="patients-by-doctor.php?id=<?php echo $doctor['doctor_id'];?>">Patients</a></td>
                  </tr>
                  
                <?php
              }
        ?>
      </tbody>
    
  </table>
</div>
