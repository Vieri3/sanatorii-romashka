<?php
include "header.php";
include "cinema-ticket.php"
?>

<div class="container monitor"><?php echo $_GET["date"]; ?> || <?php echo $_GET["time"]; ?> || <?php echo $_GET["cinema"]; ?></div>

<form action="check-list.php" method="POST">

    <div class="container" id="cinema-hall">
    
        <?php foreach($cinema_ticket as $key=>$value) { 
            if($_GET["date"] == $key){
                foreach($value as $k=>$v){
                  if($_GET["time"] == $k && $_GET["cinema"] == $v["title"]){
                    foreach($v["hall"] as $index=>$place){
                        if($place === 0){
                            echo '<div class = "not-sold-ticket">М-'. ($index + 1) . '<input type="hidden" name="pl[]" value="' . $place .' "></div>';
                        }else{
                            echo '<div class = "sold-ticket">М-'. ($index + 1) . '<input type="hidden" name="pl[]" value="' . $place .' "></div>';
                        }

                    }
                  }
                }
            }
        }
        ?>

     
           
                  
           

            
        <?php ?>    

    </div>

    <button type="submit" class="btn btn-danger">Отправить</button>
    
</form>



<?php include "footer.php"; ?>