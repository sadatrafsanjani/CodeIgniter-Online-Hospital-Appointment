<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Ward Name</th>
          <th>Accommodation</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($facility as $f){ ?>
        <tr>
          <td><?php echo $f->ward_id; ?></td>
          <td><?php echo $f->ward_name; ?></td>
          <td><?php echo $f->accommodation; ?></td>
          <td>
              <?php
              
                if($f->status == 1){
                    
                    echo "Available";
                }
                else{
                 
                    echo "Unavailable";
                }
              ?>
          </td>
          <td>
              <a href="<?= base_url() ?>super/ward_delete/<?php echo $f->ward_id; ?>" role="button" title="Delete" onClick="return dump();">
                  <i class="icon-remove"></i>
              </a>
              <a href="<?= base_url() ?>super/ward_update/<?php echo $f->ward_id; ?>" role="button" title="Update">
                  <i class="icon-arrow-up"></i>
              </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>