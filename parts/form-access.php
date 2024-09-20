<?php 
    $isRegistrationPage = $_SERVER['PHP_SELF'] == '/reg.php';
    $title = $isRegistrationPage ? 'Регистрация' : 'Авторизация';
?>
<div class="form-wrap mx-auto">
    <h3><?php echo $title ?></h3>
    <div id="form-msg" class="alert alert-warning d-none"></div>
    <form id="form-access" class="border p-4 rounded" method="POST" action="actions/form-access.php" novalidate>
        <div class="form-group mb-3">
            <label for="name">Имя</label>
            <input type="text" name="name" class="form-control" placeholder="User">
        </div>
        <?php if($isRegistrationPage) { ?>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="user@mail.com">
            </div>
        <?php } ?>
        <div class="form-group mb-3">   
            <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control" placeholder="1234">
        </div>
        <button type="submit" class="btn btn-success">Регистрация</button>
    </form>
</div>

