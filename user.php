<?php include "header.php" ?>
<?php if($_COOKIE['name'] == ""){ header("Location:/");} ?>

<div class="container">
	<div class="p-3 mb-2 bg-success text-white d-flex justify-content-between">
		<div>
			<span>Привет, </span>
			<b><?php echo $_COOKIE['name']; ?></b>
			<span>!!!</span>
		</div>
		<div>
			<?php echo date("Y-m-d H:i:s"); ?>
		</div>
	</div>
</div>

<div class="container">	

	<form method="POST" action="admin/folder-food/user-order-food.php" id="form-food">

	<div class="row row-cols-sm-3 row-cols-1 row-cols-md-6">
		<div class="col">
			<div class="p-3 mb-2 bg-primary text-white text-center align-middle">Напитки</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="чай" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Чай
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Kофе" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Кофе
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Сок" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Сок
				</label>
			</div>
		</div>

		<div class="col">
			<div class="p-3 mb-2 bg-primary text-white text-center align-middle">Первое</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Борщ" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Борщ
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Суп" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Суп
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Солянка" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Солянка
				</label>
			</div>
		</div>

		<div class="col">
			<div class="p-3 mb-2 bg-primary text-white text-center align-middle">Гарнир</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Пюре с котлетой" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Пюре с котлетой
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Макароны по флотски" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Макароны по флотски
				</label>
			</div>
		</div>

		<div class="col">
			<div class="p-3 mb-2 bg-primary text-white text-center align-middle">Спиртное</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Пиво" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Пиво
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Водка" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Водка
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Вино" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Вино
				</label>
			</div>
		</div>

		<div class="col">
			<div class="p-3 mb-2 bg-primary text-white text-center align-middle">Перекус</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Хот-Дог" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Хот-Дог
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Пицца" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Пицца
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Беляш" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Беляш
				</label>
			</div>
		</div>

		<div class="col">
			<div class="p-3 mb-2 bg-primary text-white text-center align-middle">Замолодь</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Чипсы" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Чипсы
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Шоколадки" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Шоколалки
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="Пироженки" name="food-selection[]">
				<label class="form-check-label" for="food-selection[]">
					Пироженки
				</label>
			</div>
		</div>
	</div>

		<div class="d-grid gap-2">
			<button type="submit" name="submit" class="btn btn-warning btn-block btn-dis" id="sending_order">Отправить заявку</button>
			<button type="button" class="btn btn-danger" id="reset_order">Сброс заказа</button>
		</div>
		
	</form>

</div>


<?php include "footer.php" ?>