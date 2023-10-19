<select class="form-select" id="did" name="did">
<?php while ($doctorItem = $doctorList->fetch_assoc()) { ?>
    <option value="<?php echo $doctorItem['doctor_id']; ?>"><?php echo $doctorItem['doctor_name']; ?></option>
<?php } ?>
</select>
