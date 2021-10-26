<?php

// $dataArticlesList est une variable de data.php qui contient tous nos articles
// Chaque article est identifiable avec un index

// L'index de l'article demandé est dans le paramètre id de l'url
// On le récupère dans $index
$index = $_GET['id'];

// Pour récupérer l'article demandé :
$article = $dataArticlesList[$index];

// On a récupéré notre objet Article, on peut l'afficher
?>
<!-- emmet : article.container>.row>.col -->
<article class="container">
    <div class="row">
        <div class="col">
            <h2><?= $article->title ?></h2>
            <p><?= $article->content ?></p>
        </div>
    </div>
</article>