<table width="100%" align="center" cellpadding="3" cellspacing="2" border="1">
    <tr>
        <th width="30%">Ward Name</th>
        <th width="10%">Ward Accommodation</th>
        <th width="60%">Doctors</th>
    </tr>
    <?php foreach($ward_info as $wi){ ?>
    <tr>
        <td><?php echo $wi->ward_name; ?></td>
        <td><?php echo $wi->accommodation; ?></td>
        <td><?php
            foreach($doctor_info as $di){
                
                echo $di->doctor_name."<br>";
            }
            ?>
        </td>
    </tr>
    <?php } ?>
</table>