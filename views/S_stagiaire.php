<?php
$title = "supprimer stagiaires" ;
ob_start();
echo "Voulez vous vraiment supprimer le stagiaires $id ?";
?>
<br>
<br>
    <a class="btn btn-danger" href="index.php?action=destroy&id=<?php echo $id?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=list">Annuler la suppression</a>
<?php
$content =ob_get_clean();
include_once 'views/layout.php';