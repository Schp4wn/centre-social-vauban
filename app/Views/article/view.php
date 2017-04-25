<?php $this->layout('layout', ['title' => 'Article']) ?>

<?php $this->start('main_content') ?>



		<article >
			<h2><?php echo $article['title'] ?></h2>
			<p><?php echo $article['content'] ?></p>
		</article>


<?php $this->stop('main_content') ?>
