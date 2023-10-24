<?php
  require_once 'controller/stagiaires_controller.php';
// creation d'un routeur
if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch($action){
        case 'create':    
         createAction();
            break;
        case 'list':
            indexAction();
            break;
         case 'destroy':
            destroyAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'delete':
            deleteAction();
            break;
        case 'update':
            updateAction();
            break;
    }
}