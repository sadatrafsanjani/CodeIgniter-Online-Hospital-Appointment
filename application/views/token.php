<h2>Prescription Check</h2>
<?php
$message = $this->session->userdata('message');

if ($message) {

    echo "<h3>".$message."</h3>";
    
    $message = $this->session->unset_userdata('message');
}
else{
?>
<form action="<?= base_url(); ?>welcome/answer.html" method="POST">
    <ol>
        
        <li>
            <label for="token">Token Number</label>
            <input type="text" id="token" name="token" class="text" />
        </li>
        <li>
            <input type="image" name="imageField" id="imageField" src="<?= base_url(); ?>resources/images/submit.gif" class="send"/>
            <div class="clr"></div>
        </li>
    </ol>
</form>
<?php } ?>