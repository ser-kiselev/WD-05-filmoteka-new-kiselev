<div class="title-1">Фильмотека</div>

<?php foreach ($films as $key => $film) { ?>
			
	<div class="card mb-20">
		<div class="row">
			<div class="col-auto">
				<a href="single.php?id=<?=$film['id']?>" class="title__link">
					<img src="<?=HOST?>data/films/min/<?=$film['poster']?>" alt="<?=$film['title']?>">
				</a>
			</div>
			<div class="col">
				<div class="card-header">
					<a href="single.php?id=<?=$film['id']?>" class="title__link">
						<h4 class="title-4"><?=$film['title']?></h4>
					</a>
					
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
			</div>
		</div>
	</div>

<?php } ?>