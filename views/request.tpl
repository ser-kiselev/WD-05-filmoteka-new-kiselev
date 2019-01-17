<div class="title-1">Укажите ваши данные</div>

<div class="panel-holder mt-40 mb-40">
	<form action="set-cookie.php" method="POST">
		<div class="form-group">
			<label class="label">
				Ваше имя
				<input class="input" name="user-name" type="text" />
			</label>
		</div>
		<div class="form-group">
			<label class="label">
				Ваш город
				<input class="input" name="user-city" type="text" />
			</label>
		</div>
		<input class="button" type="submit" name="user-submit" value="Сохранить" />
	</form>

	<form action="unset-cookie.php" method="POST" class="mt-15">
		<input class="button" type="submit" name="user-unset" value="Удалить данные" />
	</form>
</div>