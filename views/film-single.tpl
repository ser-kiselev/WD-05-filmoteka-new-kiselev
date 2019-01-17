<div class="title-1">Информация о фильме</div>
			
<div class="card mb-20">
	<div class="row">
		<div class="col-auto">
			<img src="<?=HOST?>data/films/min/<?=$film['poster']?>" alt="<?=$film['title']?>">
		</div>

		<div class="col">
			<div class="card-header">
				<h4 class="title-4"><?=$film['title']?></h4>
				<?php if ( isset($_SESSION['user']) ) { 
					if ( $_SESSION['user'] == 'admin' ) { ?>
						<div class="buttons">
							<a href="edit.php?id=<?=$film['id']?>" class="button button--editsmall">Редактировать</a>
							<a href="?action=delete&id=<?=$film['id']?>" class="button button--removesmall">Удалить</a>
						</div>
					<?php }
				} ?>
			</div>
			<div class="badge"><?=$film['genre']?></div>
			<div class="badge"><?=$film['year']?></div>
			<div class="user-content">
				<p><?=$film['description']?></p>
			</div>
		</div>
	</div>
</div>
