<?php

// Point d'entrée pour la page d'accueil

// Inclusion des fichiers nécessaires
require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/data.php';

// Récupération des données nécessaires la page (si besoin)



// nous récupérons dans la variable $_GET['page'], la page que nous souhaitons afficher
$page = filter_input(INPUT_GET, 'page');

// déclaration de la variable $pageTemplate qui va nous permettre de savoir quel template doit être affiché

// par défaut nous afficherons le template de la homepage si aucune page n'est spécifiée
$pageTemplate = 'home.tpl.php';

if($page === 'index') {
    // si la page demandée est "index" ; nous voulons afficher le template
    $pageTemplate = 'home.tpl.php';
}
elseif( $page === 'category') {
    $pageTemplate = 'category.tpl.php';
}
elseif( $page === 'author') {
    $pageTemplate = 'author.tpl.php';
}
elseif( $page === 'article') {
    $pageTemplate = 'article.tpl.php';
}

// Affichage
require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/' . $pageTemplate;
require __DIR__.'/inc/templates/footer.tpl.php';