<?php

// On fait ici le même travail que data.php
// On va donc créer 3 variables avec la liste des Articles, des Catègories et des Auteurs
// depuis la base de données

// IL nous faut avant tout se connecter la BDD

// $pdo = new PDO(
//     'mysql:dbname=oblog;host=localhost;charset=UTF8',
//     'ophelie',
//     'pensee',//mdp a rectifier
//     [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
// );

// // On peut maintenant exécuter des requêtes

// // On détermine les requêtes SQL
// $sqlArticle = '
//     SELECT *
//     FROM post
// ';

// $sqlCategory = '
//     SELECT *
//     FROM category
// ';

// $sqlAuthor = '
//     SELECT *
//     FROM author
// ';

// // On les exécute et on récupère le résultat
// // On obtient bien des tableaux contenant des tableaux associatifs et non des objets comme avant

// $dataArticlesResults = $pdo->query($sqlArticle)->fetchAll(PDO::FETCH_ASSOC);
// $dataCategoriesResults = $pdo->query($sqlCategory)->fetchAll(PDO::FETCH_ASSOC);
// $dataAuthorsResults = $pdo->query($sqlAuthor)->fetchAll(PDO::FETCH_ASSOC);


// // On transforme ces tableaux de tableaux en tableaux d'objets
// $dataArticlesList = [];
// foreach ($dataArticlesResults as $arrayArticle) {
//     $dataArticlesList[] = new Article(
//         $arrayArticle['title'],
//         $arrayArticle['content'],
//         $arrayArticle['author_id'],
//         $arrayArticle['published_date'],
//         $arrayArticle['category_id']
//     );
// }

// // d($dataArticlesResults, $dataArticlesList);

// $dataCategoriesList = [];
// foreach ($dataCategoriesResults as $arrayCategory) {
//     $dataCategoriesList[] = new Category(
//         $arrayCategory['name']
//     );
// }

// // d($dataCategoriesResults, $dataCategoriesList);

// $dataAuthorsList = [];
// foreach ($dataAuthorsResults as $arrayAuthor) {
//     $dataAuthorsList[] = new Author(
//         $arrayAuthor['name']
//     );
// }

// d($dataAuthorsResults, $dataAuthorsList);