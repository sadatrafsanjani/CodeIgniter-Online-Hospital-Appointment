<?php
$message = $this->session->userdata('message');

if ($message) {

    echo "<h3>".$message."</h3>";
    
    $message = $this->session->unset_userdata('message');
}
?>