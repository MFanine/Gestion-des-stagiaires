<?php

require_once 'model/stagiaires.php';

function indexAction()
{
    $req = latest();
    require_once 'views/liste_stagiaires.php';
}

function createAction()
{
    require_once 'views/A_stagiaire.php';
}

function storeAction()
{
   $isCreated = create();
   header('location:index.php?action=list');
}

function editAction()
{
    $id=$_GET['id'];
    $stagiaires= view($id);
    require_once 'views/M_stagiaire.php';

}

function updateAction()
{
    extract($_POST);
    edit($id,$nom,$prenom,$age,$login,$password);
    header('location:index.php?action=list');

}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/S_stagiaire.php';

}

function destroyAction()
{
    destroy($_GET['id']);
    header("Location: index.php?action=list");

}