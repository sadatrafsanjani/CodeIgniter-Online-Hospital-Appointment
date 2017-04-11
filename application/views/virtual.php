<h2>Patient Entry</h2>
<?php
$message = $this->session->userdata('message');
$token = $this->session->userdata('token');

if (!empty($message)) {

    echo "<h3>".$message."</h3>";
    echo "<h2>Token No: ".$token."</h3>";
    
    $message = $this->session->unset_userdata('message');
    $token = $this->session->userdata('token');
}
else{
?>
<form action="<?= base_url(); ?>welcome/entry.html" method="POST" id="sendemail">
    <ol>
        <li>
            <label for="ward_id">Ward Name (required)</label>
            <select name="ward_id">
                <option value=" ">-Select-</option>
                <?php foreach ($facility as $f) { ?>
                    <option value="<?php echo $f->ward_id; ?>"><?php echo $f->ward_name; ?></option>
                <?php } ?>
            </select>
        </li>
        <li>
            <input type="hidden" id="name" name="treatment_id" class="text" value="<?php echo date("ymdhs", time()); ?>"/>
        </li>
        <li>
            <label for="patient_name">Name (required)</label>
            <input type="text" id="name" name="patient_name" class="text" />
        </li>
        <li>
            <label for="age">Age (required)</label>
            <select name="age">
                <option value=" ">-Select-</option>
                <?php for ($i = 1; $i <= 140; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </li>
        <li>
            <label for="sex">Sex (required)</label>
            <select name="sex">
                <option value=" ">-Select-</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
            </select>
        </li>
        <li>
            <label for="email">Email Address (required)</label>
            <input type="text" id="email" name="patient_email" class="text" />
        </li>
        <li>
            <input type="image" name="imageField" id="imageField" src="<?= base_url(); ?>resources/images/submit.gif" class="send"/>
            <div class="clr"></div>
        </li>
    </ol>
</form>
<?php } ?>