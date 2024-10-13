<?php
    include "header.php";
    $news = selectDBdata("SELECT * FROM `news`");
?>

<div class="container">
    <?php foreach($news as $item){ ?>
    <div class="alert alert-<?php echo $item['news_color'] ?>" role="alert">
        <p><?php echo $item['news_date'] ?></p>
        <?php echo $item['news_text'] ?>
    </div>
    <?php } ?>
</div>

<?php include "footer.php" ?>