<?php

function database_connection()
{
    return new PDO('mysql:dbname=ofppt;host=localhost','root','' );
}

function latest()
{
    $pdo = database_connection();

    return $pdo->query('SELECT * FROM Stagaires order by id desc')->fetchAll(PDO::FETCH_OBJ);
}

function create()
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("insert into stagaires values(null,?,?,?,?,?)");
    return $sqlState->execute([$_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['login'], $_POST['password']]);
}

function edit($id,$nom,$prenom,$age,$login,$password)
{
     $pdo = database_connection();
     $sqlState = $pdo->prepare("update stagaires set nom=?,prenom=?,age=?,login=?,password = ? where id = ?");
     return $sqlState->execute([$nom,$prenom,$age,$login,$password,$id]);
}

function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("delete from stagaires where id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare('SELECT * FROM Stagaires where id = ?');
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}