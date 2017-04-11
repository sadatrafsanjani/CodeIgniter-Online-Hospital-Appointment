<h2>Add Doctor</h2>
<?php
$message = $this->session->userdata('message');

if ($message) {

    echo "<h3>".$message."</h3>";
    $message = $this->session->unset_userdata('message');
}
?>
<form action="<?= base_url(); ?>super/doctor_save.html" method="POST">
    <ol style="list-style:none;">
        <li>
            <label for="ward_id">Ward Name (required)</label>
            <select name="ward_id">
                <option value=" ">-SELECT WARD-</option>
                <?php foreach ($facility as $f) { ?>
                    <option value="<?php echo $f->ward_id; ?>"><?php echo $f->ward_name; ?></option>
                <?php } ?>
            </select>
        </li>
        <li>
            <label for="doctor_name">Name</label>
            <input type="text" id="name" name="doctor_name" class="text" />
        </li>
        <li>
            <label for="doctor_email">Email</label>
            <input type="text" id="email" name="doctor_email" class="text" required="required"/>
        </li>
        <li>
            <label for="doctor_password">Password</label>
            <input type="text" id="password" name="doctor_password" class="text" required="required"/>
        </li>
        <li>
            <label for="speciality">Speciality</label>
            <input type="text" id="speciality" name="speciality" class="text" required="required"/>
        </li>
        <li>
            <label for="shift">Shift</label>
            <input type="text" id="shift" name="shift" class="text" required="required"/>
        </li>
        <li>
            <input type="image" name="imageField" id="imageField" src="<?= base_url(); ?>resources/images/submit.gif" class="send" />
            <div class="clr"></div>
        </li>
    </ol>
</form>