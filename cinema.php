<?php 
    include "header.php";
    $movies = selectDBdata("SELECT * FROM `cinema`");
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
                <ul>
                    <?php foreach($cinema as $key) { ?>
                        <li>
                            <a href = "/cinema-hall.php?id=<?=$key[0]?>"> <?=$key[1]?> <?=$key[2]?> <?=$key[3]?> </a>
                        </li>
                    <?php }?>
                </ul>
            </aside>
        </div>
    </div>

<?php include "footer.php" ?>