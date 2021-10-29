<?php

// Cette clase doit nous permettre de mettre au même endroit toutes les requêtes SQL
// L'objectif est que le reste du code ne contienne aucun SQL
// On appaelera des méthodes de DBData pour botenir nos données

class DBData
{
    private $pdo;

    // Le constructeur instancie un objet PDO et le place dans la propriété privéee $pdo
    public function __construct()
    {
        $pdo = new PDO(
            'mysql:dbname=oblog;host=localhost;charset=UTF8',
            'ophelie',
            'pensee',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
        );

        $this->pdo = $pdo;
    }

    /**
     * Obtient tous les articles en BDD
     * Retourne un tableau d'objet Article
     */
    public function getAllPosts()
    {
        // On détermine le SQL
        $sql = '
            SELECT *
            FROM post
        ';

        // On obtient un tableau de tableaux
        $dataArticlesResults = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        // On transforme ce tableau de tableaux en un tableau d'objets
        $dataArticlesList = [];
        foreach ($dataArticlesResults as $arrayArticle) {
            $dataArticlesList[] = new Article(
                $arrayArticle['title'],
                $arrayArticle['content'],
                $arrayArticle['author_id'],
                $arrayArticle['published_date'],
                $arrayArticle['category_id']
            );
        }

        return $dataArticlesList;
    }

    public function getAllCategories()
    {
        $sql = '
            SELECT *
            FROM category
        ';

        $dataCategoriesResults = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $dataCategoriesList = [];
        foreach ($dataCategoriesResults as $arrayCategory) {
            $dataCategoriesList[] = new Category(
                $arrayCategory['name']
            );
        }

        return $dataCategoriesList;
    }

    public function getAllAuthors()
    {
        $sql = '
            SELECT *
            FROM author
        ';

        $dataAuthorsResults = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $dataAuthorsList = [];
        foreach ($dataAuthorsResults as $arrayAuthor) {
            $dataAuthorsList[] = new Author(
                $arrayAuthor['name']
            );
        }

        return $dataAuthorsList;
    }
}    