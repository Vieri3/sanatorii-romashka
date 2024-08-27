<?php include "header.php" ?>
<? require_once "admin/connect.php" ?>

<div class="container">
    <?php foreach($news as $item){ ?>
        <div class="alert alert-<?=$item[3] ?>" role="alert">
            <p><?=$item[1] ?></p>
                <?=$item[2] ?>
        </div>
    <?php } ?>
</div>

<?php include "footer.php" ?>