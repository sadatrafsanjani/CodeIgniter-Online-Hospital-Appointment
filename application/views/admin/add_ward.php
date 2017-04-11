<h2>Add Ward</h2>
<?php
$message = $this->session->userdata('message');

if ($message) {

    echo "<h3>".$message."</h3>";
    $message = $this->session->unset_userdata('message');
}
?>
<form action="<?= base_url(); ?>super/ward_save.html" method="POST" id="sendemail">
    <ol style="list-style:none;">
        <li>
            <label for="ward_name">Ward Name (required)</label>
            <input type="text" id="name" name="ward_name" class="text" />
        </li>
        <li>
            <label for="accommodation">Accommodation (required)</label>
            <input type="text" id="email" name="accommodation" class="text" />
        </li>
        <li>
            <label for="status">Status</label>
            Available <input type="radio" id="status" name="status" value="1" class="radio" />
            Unavailable <input type="radio" id="status" name="status" value="0" class="radio" />
        </li>
        <br>
        <li>
            <input type="image" name="imageField" id="imageField" src="Gandi Baatimages/submit.gif" class="send" />
            <div class="clr"></div>
        </li>
    </ol>
</form>