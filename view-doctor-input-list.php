<select class="form-select" id="did" name="did">
<?php while ($doctorItem = $doctorList->fetch_assoc()) { 
    $selText="";
    if($selectedDoctor==$doctorItem['doctor_id'])
    {
        $selText=" selected";
        
    }
    ?>
    <option value="<?php echo $doctorItem['doctor_id']; ?>"<?=$selText?>><?php echo $doctorItem['doctor_name']; ?></option>
<?php } ?>
</select>
