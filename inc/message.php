<?php

if(isset($_GET['error'])){?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo $_GET ['error'];?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php } ?>

<?php

if(isset($_GET['succ'])){?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $_GET ['succ'];?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php } ?>
