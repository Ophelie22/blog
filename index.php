<?php

// Point d'entrée pour la page d'accueil

// Inclusion des fichiers nécessaires
require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/classes/Author.php';
require __DIR__ . '/inc/classes/Category.php';
require __DIR__ . '/inc/classes/DBData.php';
//ajout du kint.phar  pour debuger
require __DIR__ . '/inc/kint.phar';
// Récupération des données nécessaires à la page (si besoin)
// On récupère le paramètre page reçu en GET (dans l'url), s'il existe !
// Avec ce if, on détermine la valeur de $requestedPage
// $requestedPage existe toujours, et prend pour valeur, ce qui est dans le paramètre «page» dans l'url
// Si l'url ne précise pas la page, alors la valeur de $requestedPage est "home"
if (!empty($_GET['page'])) {
    $requestedPage = $_GET['page'];
} else {
    $requestedPage = 'home';
}

// On insère les données qui sont dans data.php
// On peut ensuite utiliser les trois variables déclarées dans data.php
// On commande la ligne précédente et on utilise maintenant les données en BDD
//require __DIR__ . '/inc/data_from_db.php';


// On instancie notre objet DBData
// Dans son constructeur, il crée un objet PDO et le place en propriété privée
$dbData = new DBdata();
// On va retrouver les tableaux d'articles, de catégories et d'auteurs qu'on se servait
$dataArticlesList = $dbData->getAllPosts();
$dataCategoriesList = $dbData->getAllCategories();
$dataAuthorsList = $dbData->getAllAuthors();
//d($dataArticlesList);
// Affichage
require __DIR__ . '/inc/templates/header.tpl.php';
require __DIR__ . '/inc/templates/' . $requestedPage . '.tpl.php';
require __DIR__ . '/inc/templates/footer.tpl.php';