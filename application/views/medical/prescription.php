<h2>Prescription</h2>
<form action="<? base_url(); ?>superdoctor/prescribed.html" method="POST">
    <ol style="list-style:none;">
        <li>
            <input type="hidden" id="treatment_id" name="treatment_id" class="text" value="<?php echo $treatment_id; ?>"/>
        </li>
        <li>
            <input type="hidden" id="doctor_id" name="doctor_id" class="text" value="<?php echo $doctor_id; ?>"/>
        </li>
        <li>
            <label for="detail">Detail</label>
            <textarea id="detail" name="detail" row="15" cols="20"></textarea>
        </li>
        <li>
            <input type="image" name="imageField" id="imageField" src="<?= base_url(); ?>resources/images/submit.gif" class="send" />
            <div class="clr"></div>
        </li>
    </ol>
</form>