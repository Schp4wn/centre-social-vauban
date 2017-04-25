
<!-- permet de fr des include du header ou footer -->
<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<h1>Le blog </h1>

	<?php foreach ($articles as $article): ?>
		<article class="">
			<h2><?php echo $article['title'] ?></h2>
			<p><?php echo $article['content'] ?></p>
			<p class="text-right">
				<a href="#" class="btn btn-primary">lire l'article</a>
			</p>
		</article>
	<?php endforeach; ?>

<?php $this->stop('main_content') ?>
