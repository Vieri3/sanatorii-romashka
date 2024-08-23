<?php
include "header.php";
include "cinema-ticket.php"
?>

 <div class="container text-center">
    <h1>Кинотеатр от санатория Ромашка</h1>
</div>
    
        <div class="container">

            <div class="row">

                <article class="col">
                    <section class="card" style="width: 18rem;">
                        <img src="./img/cinema-img/term.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Terminator</h5>
                            <p class="card-text">и восстали машины из пепла ядерного огня...</p>
                        </div>
                    </section>
                    <section class="card" style="width: 18rem;">
                        <img src="./img/cinema-img/robo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Robocop</h5>
                            <p class="card-text">корпоративные войны OCP и все дела</p>
                        </div>
                    </section>
                    <section class="card" style="width: 18rem;">
                        <img src="./img/cinema-img/pred.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Predator</h5>
                            <p class="card-text">убийства происходят в самые жаркие дни лета! а это летосамое жаркое</p>
                        </div>
                    </section>
                    <section class="card" style="width: 18rem;">
                        <img src="./img/cinema-img/al.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alien</h5>
                            <p class="card-text">космический пришелец-монстр не станет щадить никого</p>
                        </div>
                    </section>
                </article>

                <aside class="col">
                    <?php foreach($cinema_ticket as $key => $value) { ?>
                        <h5> <?php echo $key?> </h5>
                            <ul>
                                <?php foreach($value as $k => $v) { ?>

                                    <?php echo '<li><a href = "/cinema-hall.php?date='. $key . '&time=' . $k .  '&cinema=' . $v["title"] . '">' . $k .' '. $v["title"]  .  '</a></li>' ?>

                                <?php }?>
                            </ul>
                    <?php }?>
                       
                </aside>
            </div>
        </div>


<?php
include "footer.php"
?>