<?php
include "header.php";
require_once "admin/connect.php";
$cinema_mass;
foreach($cinema as $key){
    if($key[0] == $_GET["id"]){
        $cinema_mass = $key;
    }
}

$cinema_mass_place = explode(",", $cinema_mass[5]);

?>

<div class="container monitor"><?=$cinema_mass[3] ?></div>

<form action="admin/folder-cinema/ticket-check.php" method="POST">
    
    <div class="container" id="cinema-hall">

        <?php foreach($cinema_mass_place as $index=>$place) { 
            if($place == 0) {
        ?>
            <div class = "not-sold-ticket"> 
                М-<?php echo ($index + 1) ?> 
                <input type="hidden" name="pl[]" value="<?php echo $place ?>">
            </div>

         <?php } else { ?>

            <div class = "sold-ticket"> 
                М-<?php echo ($index + 1) ?> 
                <input type="hidden" name="pl[]" value="<?php echo $place ?>">
            </div>

        <?php } } ?>


    </div>

    <input type="hidden" name="pl[]" value="<?=$cinema_mass[0] ?>">

    <div class="btn_otpravit">
        <button type="submit" class="btn btn-danger">Отправить</button>
    </div>
    
</form>

<?php include "footer.php"; ?>