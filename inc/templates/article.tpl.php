<?php

// $dataArticlesList est une variable de data.php qui contient tous nos articles
// Chaque article est identifiable avec un index

// L'index de l'article demandé est dans le paramètre id de l'url
// On le récupère dans $index
//$index = $_GET['id'];


// Supposons qu'un petit malin modifie l'url.
//      Soit il supprime le paramètre «id»
//      Soit il met un id qui n'existe pas
//  On obtient alors un erreur et on souhaite éviter à tout prix d'afficher une erreur PHP au client (navigateur)
// Il faudrait vérifier que le paramètre id existe, qu'il n'est pas vide et qu'il est valide !
if (!empty($_GET['id'])) {
    $index = $_GET['id'];
} else {
    exit('Petit malin !!');
}

// On n'a pas encore vérifié que cet id est valide
if (isset($dataArticlesList[$index])) {
    // Pour récupérer l'article demandé :
    $article = $dataArticlesList[$index];
} else {
    exit('Petit malin !!');
}

// Les deux if-else précédents peuvent être raccourcis ainsi :
// if (!empty($_GET['id']) && isset($dataArticlesList[$_GET['id']])) {
//     $article = $dataArticlesList[$index];
// } else {
//     exit('Petit malin !!');
// }


// On a récupéré notre objet Article, on peut l'afficher
?>

