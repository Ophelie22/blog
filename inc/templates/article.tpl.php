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
            Posté par <a href="#" class="card-link"><?= $article->author ?></a> le <time datetime="<?= $article->date ?>"><?= $article->getDateFr() ?></time> dans <a href="#"
                class="card-link">#<?= str_replace(' ', '', $article->category) ?></a>
            </p>
            <p class="card-text"><?= $article->content ?></p>
          </div>
        </article>
          <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
          <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="index.php"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
          </ul>
        </nav>
      </main>
      <aside class="col-lg-3">
        <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>
        <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">TeamBack</li>
            <li class="list-group-item">TeamFront</li>
            <li class="list-group-item">Collaboration</li>
            <li class="list-group-item">Ma Vie De Dev</li>
          </ul>
        </div>
        <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
        <div class="card">
          <h3 class="card-header">Auteurs</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Maxime</li>
            <li class="list-group-item">Anthony</li>
            <li class="list-group-item">Alexandre</li>
            <li class="list-group-item">Dario</li>
            <li class="list-group-item">Julie</li>
            <li class="list-group-item">Lucie</li>
            <li class="list-group-item">Xavier</li>
          </ul>
        </div>
      </aside>
    </div><!-- /.row -->


      