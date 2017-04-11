<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Ward</th>
          <th>Name</th>
          <th>Email</th>
          <th>Speciality</th>
          <th>Shift</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($physician as $p){ ?>
        <tr>
          <td><?php echo $p->doctor_id; ?></td>
          <td><?php echo $p->ward_id; ?></td>
          <td><?php echo $p->doctor_name; ?></td>
          <td><?php echo $p->doctor_email; ?></td>
          <td><?php echo $p->speciality; ?></td>
          <td><?php echo $p->shift; ?></td>
          <td>
              <a href="<?= base_url() ?>super/doctor_delete/<?php echo $p->doctor_id; ?>" role="button" title="Delete" onClick="return dump();">
                  <i class="icon-remove"></i>
              </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>