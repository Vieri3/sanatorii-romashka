<?php 
    include "header.php";
    $movie_id = $_GET['id'];
    $movie = selectDBdata("SELECT * FROM `cinema` WHERE `cinema_id` = '$movie_id'")[0];
    $movie_seats = explode(",", $movie['cinema_place']);
?>

<div class="container monitor"><?php echo $movie['cinema_title'] ?></div>

<form action="/admin/cinema/cinema-ticket-check.php" method="POST">
    
    <div class="container" id="cinema-hall">

        <?php foreach( $movie_seats as $seatIndex => $seat ) { ?> 
            <?php $seatNo = $seatIndex + 1; ?>
            <?php if( $seat == 0 ) { ?>
                <div class="not-sold-ticket"> 
                    М-<?php echo $seatNo; ?> 
                    <input type="hidden" name="pl[]" value="<?php echo $seat ?>">
                </div>
            <?php } else { ?>
                <div class="sold-ticket"> 
                    М-<?php echo $seatNo; ?> 
                    <input type="hidden" name="pl[]" value="<?php echo $seat ?>">
                </div>
            <?php } ?>
        <?php } ?>

    </div>

    <input type="hidden" name="pl[]" value="<?php echo $movie['cinema_id'] ?>">

    <div class="btn_otpravit">
        <button type="submit" class="btn btn-danger">Отправить</button>
    </div>
    
</form>

<?php include "footer.php" ?>