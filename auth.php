<?php include "header.php" ?>

<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Авторизация</h3>
					<form method="POST" action="/admin/auth.php">
						<div class="form-group">
							<label for="name">Имя</label>
							<input type="text" name="name" class="form-control" placeholder="Имя">
						</div>
						<br>
						<div class="form-group">
							<label for="password">Пароль</label>
							<input type="password" name="password" class="form-control" placeholder="Пароль">
						</div>
						<br>
						<button type="submit" class="btn btn-success">Авторизоваться</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-3"></div>
	</div>
</div>

<?php include "footer.php" ?>