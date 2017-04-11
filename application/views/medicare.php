<h2>Medicare</h2>
<table border="1" width="100%" align="center" cellpadding="3" cellspacing="3">
    <tr>
        <th>Doctor Name</th>
        <th>Email</th>
        <th>Speciality</th>
        <th>Visiting Time</th>
    </tr>
    
    <?php foreach($physician as $p){ ?>
    <tr>
        <td><?php echo $p->doctor_name; ?></td>
        <td><?php echo $p->doctor_email; ?></td>
        <td><?php echo $p->speciality; ?></td>
        <td><?php echo $p->shift; ?></td>
    </tr>        
    <?php } ?>
    
</table>