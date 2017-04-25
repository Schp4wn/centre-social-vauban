

<?php $this->layout('layout',['title'=>'Contact'] ); ?>


<?php $this->start('main_content') ?>

<h1>Exemple Formulaire</h1>
<form  method="POST">
  <input type="text" name="lastname" value="">
  <input type="text" name="firstname" value="">
  <input type="submit" name="" value="Envoyer">
</form>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<?php var_dump($_POST); ?>
<?php $this->stop('main_content') ?>
