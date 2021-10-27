<?php
class Article
{
    public $title;
    public $content;
    public $author;
    public $date;
    public $category;

    public function __construct($titleParam = '', $contentParam = '', $authorParam = '', $dateParam = '', $categoryParam = '')
    {
        $this->title = $titleParam;     //propriete title et cette propriete title aura pour valeur 
                                        //ce qui se trouve dans $titleParams
        $this->content = $contentParam;
        $this->author = $authorParam;
        $this->date = $dateParam;
        $this->category = $categoryParam;
    }

    // Bonus : on veut une méthode getDateFr() qui affiche la date de l'article dans un format français
    public function getDateFr()
    {
        return $this->getDate('fr');
    }

    public function getDate($lang = 'en')
    {
        // Tout comme getDateFr(), on crée un objet DateTime, de la même façon
        $date = new DateTime($this->date);

        // On pourrait aussi utiliser un switch
        // qui a pour avantage de pouvoir combiner les différents dont les actions seront identiques
        // Ici, en fr, de, et es, on affiche le même format
        // En anglais et par défaut (tous formats inconnus), on affiche m/d/Y
        switch ($lang) {
            case 'fr':
            case 'de':
            case 'es':
                return $date->format('d/m/Y');
                break;
            case 'en':
            default:
                return $date->format('m/d/Y');
        }
    }
} 