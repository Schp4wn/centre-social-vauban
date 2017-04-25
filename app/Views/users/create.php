TEST DE CREATE un USER
<?php $this->layout('layout', ['title' => 'Inscription ' ]) ?>


<?php $this->start('main_content'); ?>

  <form class="col-lg-7" method="POST">

    <div class="form-group">
      <label for="firstname">Prenom :</label>
      <input type="text" class="form-control" name="firstname" value="">
    </div>

    <div class="form-group">
      <label for="lastname">nom :</label>
      <input type="text" class="form-control" name="lastname" value="">
    </div>

    <div class="form-group">
      <label for="email">Email :</label>
      <input type="text" class="form-control" name="email" value="">
    </div>

    <div class="form-group">
      <label for="password">Mot de passe  :</label>
      <input type="password" class="form-control" name="password" value="">
    </div>

    <input type="submit" class="btn btn-submit" value="Publier l'article">

  </form>
<?php $this->stop('main_content'); ?>
