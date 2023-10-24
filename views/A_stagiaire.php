<?php
$title ="Ajouter Stagiaire";

ob_start();
 ?> 
<form method="post" action="index.php?action=store">
    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" class="form-control" name="nom">
    </div>
    <div class="form-group">
        <label for="">Prenom</label>
        <input type="text" class="form-control" name="prenom">
    </div>
    <div class="form-group">
        <label for="">Age</label>
        <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
        <label for="">Login</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>
</form>
<?php $content =  ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>


