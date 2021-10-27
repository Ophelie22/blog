<?php
// On récupère un objet author à partir de l'id dans l'url

// L'id de la Author, est dans le paramètre id de l'url
if (!empty($_GET['id'])) {
    $index = $_GET['id'];
} else {
    die('Arrête de jouer avec les URL !!');
}

// On récupère l'auteur à afficher à partir de $index
if (isset($dataAuthorsList[$index])) {
    $author = $dataAuthorsList[$index];
} else {
    die('Arrête de jouer avec les URL !!');
}

// On récupère la liste des articles de l'auteur en cours
// On va stocker les articles concernés dans un tableau qu'on exploitera plus tard
// On initialise $authorArticles
$authorArticles = [];
foreach ($dataArticlesList as $index => $article) {
    // On remplit un tableau $authorArticles avec les articles de l'auteur demandée
    if ($author->name == $article->author) {
        $authorArticles[] = $article;
    }
}
// À la fin de la boucle, on a un tableau contenant uniquement les articles à afficher
?>

<div class="container">
    <div class="row">
        <main class="col-lg-9">
            <h1><?= $author->name ?></h1>
            <?php
            foreach ($authorArticles as $index => $article) {
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