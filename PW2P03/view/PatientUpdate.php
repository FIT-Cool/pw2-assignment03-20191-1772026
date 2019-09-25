<?php
//Block below for delete
$id=filter_input(INPUT_GET,'id');
if (isset($id)){
    $patient=getPatient($id);

}
//Block below for insert
$submitted = filter_input(INPUT_POST, 'btnSubmit');
if (isset($submitted)) {
    header("Location: index.php?menu=in");
    $name = filter_input(INPUT_POST, 'txtName');
    updateInsurance($id,$name);
}
?>
<form method="post">
    <fieldset>
        <legend>Update Patient</legend>

        <label class="form-label">Medical_Record</label>
        <input type="text" id="txtNameIdx" name="txtMedical_Record" placeholder="Medical_Record" autofocus required
               class="form-input" value="<?php echo $patient['med_record_number']; ?>">
        <br>
        <label class="form-label">Citizen_ID</label>
        <input type="text" id="txtNameIdx" name="txtCitizen_ID" placeholder="Citizen_ID" autofocus required
               class="form-input" value="<?php echo $insurance['citizen_id_number']; ?>">
        <br>
        <label class="form-label">Name</label>
        <input type="text" id="txtNameIdx" name="txtName" placeholder="Name" autofocus required
               class="form-input" value="<?php echo $insurance['name']; ?>">
        <br>
        <label class="form-label">Address</label>
        <input type="text" id="txtNameIdx" name="txtAddress" placeholder="Address" autofocus required
               class="form-input" value="<?php echo $insurance['address']; ?>">
        <br>
        <label class="form-label">Birth_Place</label>
        <input type="text" id="txtNameIdx" name="txtBirth_Place" placeholder="Birth_Place" autofocus required
               class="form-input" value="<?php echo $insurance['birth_place']; ?>">
        <br>
        <label class="form-label">Birth_Date</label>
        <input type="date" id="txtNameIdx" name="txtBirth_Date" placeholder="Birth_Date" autofocus required
               class="form-input" value="<?php echo $insurance['birth_date']; ?>">
        <br>
        <label  class="form-label">Name_Class</label>
        <select name="Name_Class" id="" >
            <?php
            $insurances = getAllInsurance();
            foreach ($insurances as $insurance) {
                echo '<option value="'.$insurance['id'].'">' . $insurance['name_class'] . '</option>';
            }
            ?>
        </select>
        <br>
        <input type="submit" name="btnSubmit" value="Update Patient" class="button button-primary">

    </fieldset>
</form>