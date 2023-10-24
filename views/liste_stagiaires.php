<?php
$title ="Liste des stagiaires";

ob_start();
 ?> 
 <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
  <table class ="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">Login</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php  foreach($req as $stagaire):?>
        <tr>
        <td><?php echo$stagaire -> id;?></td> 
        <td><?php echo$stagaire -> nom;?></td> 
        <td><?php echo$stagaire -> prenom;?></td> 
        <td><?php echo$stagaire -> age;?></td> 
        <td><?php echo$stagaire -> login;?></td> 
        <td>
            <a href="index.php?action=edit&id=<?= $stagaire->id?>" class="btn btn-success btn-sm">Modifier</a>
            <a href="index.php?action=delete&id=<?= $stagaire->id?>" class="btn btn-danger btn-sm">Supprimer</a>

        </td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php $content =  ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>


