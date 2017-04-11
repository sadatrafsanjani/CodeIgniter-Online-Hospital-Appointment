<h2>Feedback</h2>
<?php
$message = $this->session->userdata('message');

if ($message) {

    echo "<h3>".$message."</h3>";
    $message = $this->session->unset_userdata('message');
}
?>
<form action="<?= base_url(); ?>welcome/feedback.html" method="post" id="sendemail">
    <ol>
        <li>
            <label for="contact_name">Name (required)</label>
            <input id="name" name="contact_name" class="text" />
        </li>
        <li>
            <label for="contact_email">Email Address (required)</label>
            <input id="email" name="contact_email" class="text" />
        </li>
        <li>
            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="8" cols="50"></textarea>
        </li>
        <li>
            <input type="image" name="imageField" id="imageField" src="<?= base_url(); ?>resources/images/submit.gif" class="send" />
            <div class="clr"></div>
        </li>
    </ol>
</form>