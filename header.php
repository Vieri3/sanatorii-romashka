<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./img/logo.ico" type="image">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/shop.css">
	<title>Санаторий Ромашка</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light py-4">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img class="img-fluid" src="./img/logo.ico" alt="logo" width="48px" height="48px">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="nav_lc">
					<ul class="navbar-nav my-3 my-lg-0 ms-lg-3 me-auto">

					<li class="nav-item me-4"><a class="nav-link" href="/admin/admin.php">ADMIN</a></li>
			
					<?php
						if (isset($_COOKIE['name'])) {
							echo '
						<li class="nav-item me-4"><a class="nav-link" href="/">ГЛАВНАЯ</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/gallery.php">ГАЛЕРЕЯ</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/contacts.php">КОНТАКТЫ</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/about.php">О НАС</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/cinema.php">КИНОТЕАТР</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/news.php">НОВОСТИ</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/chat.php">ЧАТ</a></li>
						<li class="nav-item me-4"><a class="nav-link" href="/shop.php">МАГАЗИН</a></li>
						';
						}else{
							echo '
							<li class="nav-item me-4"><a class="nav-link" href="/">ГЛАВНАЯ</a></li>
							<li class="nav-item me-4"><a class="nav-link" href="/gallery.php">ГАЛЕРЕЯ</a></li>
							<li class="nav-item me-4"><a class="nav-link" href="/contacts.php">КОНТАКТЫ</a></li>
							<li class="nav-item me-4"><a class="nav-link" href="/about.php">О НАС</a></li>
							';
						}
						?>
					</ul>
					<div>
						<?php
						if (isset($_COOKIE['name'])) {
							echo '
							<ul class="navbar-nav my-3 my-lg-0 ms-lg-3 me-auto">
								<li class="nav-item me-4">
									<a class="btn btn-primary" href="/user.php">Мой Кабинет</a>
								</li>
								<br>
								<li class="nav-item me-4">
									<a class="btn btn-danger" href="/admin/exit.php">Выход</a>
								</li>
							</ul>
								';
						} else {
							echo '
							<ul class="navbar-nav my-3 my-lg-0 ms-lg-3 me-auto">
								<li class="nav-item me-4">
									<a class="btn btn-primary" href="/reg.php">Регистрация</a>
								</li>
								<br>
								<li class="nav-item me-4">
									<a class="btn btn-primary" href="/auth.php">Авторизация</a>
								</li>
							</ul>
								';
						}
						?>
					</div>
				</div>
			</div>
		</nav>
	</header>