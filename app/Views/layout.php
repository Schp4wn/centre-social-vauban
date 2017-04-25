<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<nav class="navbar navbar-default">
  	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><?= $w_site_name ; ?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">

	        <li <?= ($w_current_route == 'default_home') ? 'class="active"' : '' ; ?>><a href="<?php echo $this->url('default_home'); ?>">Accueil</a></li>

	        <li <?= ($w_current_route == 'default_contact') ? 'class="active"' : '' ; ?>><a href="<?php echo $this->url('default_contact'); ?>">Contact</a></li>

					<li <?= ($w_current_route == 'article_create') ? 'class="active"' : '' ; ?>><a href="<?php echo $this->url('article_create'); ?>">Creer un article</a></li>



					<li <?= ($w_current_route == 'user_create') ? 'class="active"' : '' ; ?>><a href="<?php echo $this->url('user_create'); ?>">Inscription</a></li>
	      </ul>
				<ul class="nav navbar-nav navbar-right">
					<li <?= ($w_current_route == 'article_index') ? 'class="active"' : '' ; ?>><a href="<?php echo $this->url('article_index'); ?>">Liste d'article</a></li>
				</ul>
	    </div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>


		<footer>
		</footer>
	</div>
	<script type="text/javascript"></script>
</body>
</html>
