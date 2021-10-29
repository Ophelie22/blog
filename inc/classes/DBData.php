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
                $arrayArticle['id'],
                $arrayArticle['title'],
                $arrayArticle['resume'],
                $arrayArticle['content'],
                $arrayArticle['author_id'],
                $arrayArticle['published_date'],
                $arrayArticle['category_id']
            );
        }

        return $dataArticlesList;
    }

    public function getOnePost($id)
    {
       
        $sql = 'SELECT * FROM post WHERE id = ' . $id;
        $arrayArticle = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        // On utilise fetch au lieu de fetchAll car on sait qu'on n'obtiendra qu'un seul résultat
      //d($this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC));

      $article = new Article(
        $arrayArticle['id'],
        $arrayArticle['title'],
        $arrayArticle['resume'],
        $arrayArticle['content'],
        $arrayArticle['author_id'],
        $arrayArticle['published_date'],
        $arrayArticle['category_id']
    );

        return $article;
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
                $arrayCategory['id'],
                $arrayCategory['name'],
                $arrayCategory['position']
            );
        }

        return $dataCategoriesList;
    }
    public function getOneCategory($id)
    {
        $sql = 'SELECT * FROM category WHERE id = ' . $id;

        $arrayCategory = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        $category = new Category(
            $arrayCategory['id'],
            $arrayCategory['name'],
            $arrayCategory['position']
        );

        return $category;
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
                $arrayAuthor['id'],
                $arrayAuthor['name'],
                $arrayAuthor['image'],
                $arrayAuthor['email']

            );
        }

        return $dataAuthorsList;
    }

    public function getOneAuthor($id)
    {
        $sql = 'SELECT * FROM author WHERE id = ' . $id;

        $arrayAuthor = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        $author = new Author(
            $arrayAuthor['id'],
            $arrayAuthor['name'],
            $arrayAuthor['image'],
            $arrayAuthor['email']
        );

        return $author;
    }

    public function addCategory($name)
    {
        $sql = "
            INSERT INTO category (`name`)
            VALUES ('$name');
        ";

        // On utilise exec et non query parce qu'on ajoute une donnée
        $result = $this->pdo->exec($sql);
        
        // Notre méthode ici retourne true si l'ajout a fonctionné, false sinon
        if (is_int($result)) {
            return true;
        } else {
            return false;
        }
    }
}


  