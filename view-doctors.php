<h1>Doctors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Area</th>
  
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($doctor = $doctors-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $doctor['doctors_id];?></td>
                    <td>
                      <?php echo $doctor['doctors_name];?></td>
                    </td>
                    <td>
                      <?php echo $doctor['doctors_area];?></td>
                    </td>
                  </tr>
                  
                <?php
              }
        ?>
      </tbody>
    
  </table>
</div>
