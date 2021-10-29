<?php

// $dataArticlesList est une variable de data.php qui contient tous nos articles
// Chaque article est identifiable avec un index

// L'index de l'article demandé est dans le paramètre id de l'url
// On le récupère dans $index
// Supposons qu'un petit malin modifie l'url.
//      Soit il supprime le paramètre «id»
//      Soit il met un id qui n'existe pas
//  On obtient alors un erreur et on souhaite éviter à tout prix d'afficher une erreur PHP au client (navigateur)
// Il faudrait vérifier que le paramètre id existe, qu'il n'est pas vide et qu'il est valide !
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    exit('Petit malin !!');
}

// On obtient l'article demandé depuis DBData
$article = $dbData->getOnePost($id);

// On récupère l'objet Category et l'objet Author de notre article
$category = $dbData->getOneCategory($article->category);
$author = $dbData->getOneAuthor($article->author);

// On a récupéré notre objet Article, on peut l'afficher
?>

<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><?= $article->title ?></h2>
            <p class="infos">
              Posté par <a href="#" class="card-link"><?= $author->name ?></a> le <time datetime="<?= $article->date ?>"><?= $article->getDateFr() ?></time> dans <a href="#"
                class="card-link">#<?= str_replace(' ', '', $category->name) ?></a>
            </p>
            <p class="card-text font-weight-bold"><?= $article->resume ?></p>
            <p class="card-text"><?= $article->content ?></p>
          </div>
        </article>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="./"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
          </ul>
        </nav>

      </main>

      <?php
        require __DIR__.'/sidebar.tpl.php';
      ?>
    </div>

      