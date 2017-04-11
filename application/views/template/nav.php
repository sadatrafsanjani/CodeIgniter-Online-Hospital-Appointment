
<li class="<?php
if ($title == 'Home') {
    echo 'active';
}
?>"><a href="<?= base_url(); ?>welcome/index.html">Home</a></li>
<li class="<?php
if ($title == 'Virtual') {
    echo 'active';
}
?>"><a href="<?= base_url(); ?>welcome/virtual.html">Virtual</a></li>
<li class="<?php
if ($title == 'Token') {
    echo 'active';
}
?>"><a href="<?= base_url(); ?>welcome/token.html">Token</a></li>
<li class="<?php
if ($title == 'Medicare') {
    echo 'active';
}
?>"><a href="<?= base_url(); ?>welcome/medicare.html">Medicare</a></li>
<li class="<?php
if ($title == 'Contact') {
    echo 'active';
}
?>"><a href="<?= base_url(); ?>welcome/contact.html">Contact Us</a></li>


