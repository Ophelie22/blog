<?php

// On fait ici le même travail que data.php
// On va donc créer 3 variables avec la liste des Articles, des Catègories et des Auteurs
// depuis la base de données

// IL nous faut avant tout se connecter la BDD

$pdo = new PDO(
    'mysql:dbname=oblog;host= 127.0.0.1:3306;charset=UTF8',
    'ophelie',
    'test',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
);

// On peut maintenant exécuter des requêtes

// On détermine les requêtes SQL
$sqlArticle = '
    SELECT *
    FROM post
';

$sqlCategory = '
    SELECT *
    FROM category
';

$sqlAuthor = '
    SELECT *
    FROM author
';
// On les exécute et on récupère le résultat
// On obtient bien des tableaux contenant des tableaux associatifs et non des objets comme avant

$dataArticlesList = $pdo->query($sqlArticle)->fetchAll(PDO::FETCH_ASSOC);
$dataCategoriesList = $pdo->query($sqlCategory)->fetchAll(PDO::FETCH_ASSOC);
$dataAuthorsList = $pdo->query($sqlAuthor)->fetchAll(PDO::FETCH_ASSOC);