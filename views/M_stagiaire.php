<?php
$title ="Modifier Stagiaire";

ob_start();
// var_dump($stagiaires);
 ?> 
<form method="post" action="index.php?action=update">
<div class="form-group">
        <input type="hidden" class="form-control" name="id" value="<?= $stagiaires->id?>">
    </div>
    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" class="form-control" name="nom" value="<?= $stagiaires->nom?>">
    </div>
    <div class="form-group">
        <label for="">Prenom</label>
        <input type="text" class="form-control" name="prenom" value="<?= $stagiaires->prenom?>">
    </div>
    <div class="form-group">
        <label for="">Age</label>
        <input type="number" class="form-control" name="age" value="<?= $stagiaires->age?>">
    </div>
    <div class="form-group">
        <label for="">Login</label>
        <input type="text" class="form-control" name="login" value="<?= $stagiaires->login?>">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" value="<?= $stagiaires->password?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary my-2" value="Modifier" name="Modifier">
    </div>
</form>
<?php $content =  ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>


