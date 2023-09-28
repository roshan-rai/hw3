<h1>Doctors with Patients</h1>
<div class="card-group">
        <?php
            while ($doctor = $doctors-> fetch_assoc())
              {
                ?>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $doctor['doctor_name'];?></h5>
                      <p class="card-text">
                        <?php
                          $patients=selectPatientsByDoctor($doctor['doctor_id']);
                              while ($patient=$patients->fetch_assoc())
                                      {
                                            ?>
                                              
                                         <?php
                                      }
                        ?>
                      </p>
                      <p class="card-text"><small class="text-body-secondary">Specialist:  <?php echo $doctor['doctor_area'];?></small></p>
                    </div>
                    </div>             
                <?php
              }
        ?>
    </div>   
