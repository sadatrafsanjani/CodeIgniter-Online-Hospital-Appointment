<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php require_once("template/head.php"); ?>
    <body>
        <div class="main">
            <?php require_once("template/header.php"); ?>
            <div class="hbg">
                <div class="hbg_resize">
                    <div class="nav_menu">
                        <ul>
                            <?php require_once("template/nav.php"); ?>
                        </ul>
                    </div>
                    <img src="<?= base_url() ?>resources/images/hbg_img.jpg" width="446" height="241" alt="pix" class="hbgimg" />
                    <div class="hbg_r">
                        <h2>We Welcome You...</h2>
                        <p>
                            <strong>
                                Virtual Doctor is a community based hospital where you can get advised and consulted 
                                about your health. Our medical team is online 24x7 to support you. Here you can get treatment
                                virtually with the state-of-the-art doctors and our eligible medical team members. Just fill up 
                                the form in the page titled "Virtual" and wait for the consultant to reach you as soon as possible. 
                            </strong>
                        </p>
                        <a href="#"><img src="<?= base_url() ?>resources/images/readmore.jpg" width="156" height="49" alt="read more" border="0" /></a>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="content_resize">
                    <div class="mainbar">
                        <div class="article">
                            <?php echo $main; ?>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <?php require_once("template/sidebar.php"); ?>
                    <div class="clr"></div>
                </div>
            </div>

            <div class="fbg">
                <div class="fbg_resize">
                    <div class="col c1">
                        <h2>About</h2>
                        <img src="<?= base_url(); ?>resources/images/white.gif" width="66" height="66" alt="pix" />
                        <p>
                            Virtual Doctor is a community based hospital where you can get advised and consulted 
                            about your health. Our medical team is online 24x7 to support you. Here you can get treatment
                            virtually with the state-of-the-art doctors and our eligible medical team members. Just fill up 
                            the form in the page titled "Virtual" and wait for the consultant to reach you as soon as possible.
                        </p>
                    </div>
                    <div class="col c2">
                        <h2>Trusties-Board of Directors</h2>
                        <p>
                            Virtual Doctor was established by a following people. It is an effort to reach the
                            mass through the online to assist them, help them and support them. So please admire them, appreciate their 
                            novel approach.
                        </p>
                        <ul class="sb_menu">
                            <li><a href="#">Mr. AAB</a></li>
                            <li><a href="#">Mr. BBC</a></li>
                            <li><a href="#">Mr. CCD</a></li>
                            <li><a href="#">Mr. DDE</a></li>
                            <li><a href="#">Mr. EEF</a></li>
                        </ul>
                    </div>
                    <div class="col c3">
                        <h2>Contact</h2>
                        <p>
                            Presently we are just giving online support. Soon we are going to the live medium. Here at this adress
                            you can reach us all.
                        </p>
                        <a href="#"><img src="<?= base_url() ?>resources/images/pix1.jpg" width="66" height="66" alt="ad" class="ad" /></a>
                        <a href="#"><img src="<?= base_url() ?>resources/images/pix2.jpg" width="66" height="66" alt="ad" class="ad" /></a>
                        <a href="#"><img src="<?= base_url() ?>resources/images/pix3.jpg" width="66" height="66" alt="ad" class="ad" /></a>
                        <p><strong>Phone:</strong> +1234567<br />
                            <strong>Address:</strong> 123 TemplateAccess Rd<br />
                            <strong>E-mail:</strong> <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <?php require_once("template/footer.php"); ?>
        </div>
        <?php require_once("template/script.php"); ?>
    </body>
</html>
