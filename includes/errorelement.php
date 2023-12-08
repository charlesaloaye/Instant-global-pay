   <?php
 
    $page_err = getError('page');
    if (!empty($page_err)) { ?>
       <small class="text-danger"> <i class="fa fa-warning"></i> <?= getError('page') ?></small>

   <?php } ?>