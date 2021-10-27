<?php
// On récupère un objet Category à partir de l'id dans l'url

// L'id de la Category, est dans le paramètre id de l'url
if (!empty($_GET['id'])) {
    $index = $_GET['id'];
} else {
    die('Arrête de jouer avec les URL !!');
}

// On récupère la catégorie à afficher à partir de $index
if (isset($dataCategoriesList[$index])) {
  $category = $dataCategoriesList[$index];
} else {
    die('Arrête de jouer avec les URL !!');
}

// On récupère la liste des articles de la catégorie en cours
// On va stocker les articles concernés dans un tableau qu'on exploitera plus tard
// On initialise $categoryArticles
$categoryArticles = [];
foreach ($dataArticlesList as $index => $article) {
    // On remplit un tableau $categoryArticles avec les articles de la catégorie demandée
    if ($category->name == $article->category) {
        $categoryArticles[] = $article;
    }
}
// À la fin de la boucle, on a un tableau contenant uniquement les articles à afficher
?>

<div class="container">
    <div class="row">
        <main class="col-lg-9">
            <h1><?= $category->name ?></h1> <!-- notre h1-->
            <?php
            foreach ($categoryArticles as $index => $article) {
                ?>
                <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
                <article class="card">
                    <div class="card-body">
                        <h2 class="card-title"><a href="?page=article&id=<?= $index ?>"><?= $article->title ?></a></h2>
                        <p class="card-text"><?= $article->content ?></p>
                        <p class="infos">
                        Posté par <a href="#" class="card-link"><?= $article->author ?></a> le <time datetime="<?= $article->date ?>"><?= $article->getDateFr() ?></time> dans <a href="#"
                        class="card-link">#<?= str_replace(' ', '', $article->category) ?></a>
                        </p>
                    </div>
                </article>
                <?php
            }
            ?>
        </main>

        <?php
            require __DIR__.'/sidebar.tpl.php';
        ?>
    </div>