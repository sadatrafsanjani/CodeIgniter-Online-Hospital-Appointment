<div class="sidebar">
    <div class="gadget">
        <h2>Facilities</h2>
        <ul class="sb_menu">
            <?php foreach ($facility as $f) { ?>
                <li><a href="<?= base_url() ?>welcome/detail/<?php echo $f->ward_id; ?>"><?php echo $f->ward_name; ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="gadget">
        <h2>Sponsors</h2>
        <ul class="ex_menu">
            <li><a href="#" title="Boshundhora Group">Boshundhora Group</a>Builder group</li>
            <li><a href="#" title="Hamim Group">Hamim Group</a><br />Independent Group</li>
            <li><a href="#" title="Square Pharmaceutical">Square</a><br />Pharmaceutical Company</li>
            <li><a href="#" title="ACI">ACI</a><br />Industry</li>
            <li><a href="#" title="Sharif Melamine">Sharif Melamine</a><br />Melamine Company, Bangladesh</li>
            <li><a href="#" title="Ibne Sina">Ibne Sina</a><br />Medical facilities</li>
        </ul>
    </div>
</div>