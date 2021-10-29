<?php
class Article
{
    public $id;
    public $title;
    public $resume;
    public $content;
    public $author;
    public $date;
    public $category;

    public function __construct($id = '', $title = '', $resume = '', $content = '', $author = '', $date = '', $category = '')
    {
        $this->id = $id;  
        $this->title = $title;     //propriete title et cette propriete title aura pour valeur 
        $this->resume = $resume;                                  //ce qui se trouve dans $titleParams
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    // Bonus : on veut une méthode getDateFr() qui affiche la date de l'article dans un format français
    public function getDateFr()
    {
        // La fonction date permet d'afficher une date selon le format souhaite
        // Le format est défini avec des lettres dont la signification est sur https://www.php.net/manual/fr/datetime.format.php

        // strtotime est une fonction PHP qui retrouve le timestamp d'une date à partir d'une chaine de caractère en anglais
        // $this->date contient justement une chaine de caractère qui représente une date au format YYYY-MM-DD
        // On peut résoudre ce bonus en une seul ligne :
        // return date('d/m/Y', strtotime($this->date));

        // Pour décomposer et peut-être mieux comprendre, on va le refaire en plusieurs ligne
        // On récupère le timestamp de la date de l'article
        $timestamp = strtotime($this->date);
        // On génère la string de cette date au format d/m/Y
        $dateFr = date('d/m/Y', $timestamp);
        // On retourne la date;
        return $dateFr;
    }
} 
 // Pour décomposer et peut-être mieux comprendre, on va le refaire en plusieurs ligne
        // // On récupère le timestamp de la date de l'article
        // $timestamp = strtotime($this->date);
        // // On génère la string de cette date au format d/m/Y
        // $dateFr = date('d/m/Y', $timestamp);
        // // On retourne la date;
        // return $dateFr;

        // Super bonus : Utilisons la classe DateTime de PHP au lieu d'utiliser la fonction date()
        // DateTime est une classe native, il n'est pas nécessaire de l'inclure
        // On crée un nouvel objet DateTime à partir de la date dans notre Article
        // $date = new DateTime($this->date);

        // On a maintenant, dans $date, un objet DateTime qu'on peut manipuler comme on veut
        // Ce qu'on souhaite, c'est retourner cette date au format dd/mm/YYYY
        // Pour ça on utilise la méthode ->format()
        // return $date->format('d/m/Y');

        // On aurait pu tout faire en une seule ligne
        // Ce n'est pas des plus lisibles mais on rendontre parfois cette notation
        // Notez bien les parenthèses qui entourent la création de l'objet
        // return (new DateTime($this->date))->format('d/m/Y');

        // Voici une toute autre méthode qui permet de se passer de manipuler des dates
        // Ici on prend une date en string au format YYYY-MM-DD pour retourner
        // une autre string au format DD/MM/YYYY
        // return implode('/', array_reverse(explode('-', $this->date)));

        // Mega bonus : utilisons getDate
        // return $this->getDate('fr');
    // }
//methode
    // public function getDate($lang = 'en')
    // {
        // Tout comme getDateFr(), on crée un objet DateTime, de la même façon
        // $date = new DateTime($this->date);

        // Ensuite, on retourne la date dans le format demandé
        // Avec ce if-elseif-else on a un comportement où, si un développer demande un format inconnu, on retourner «Format de date inconnu»
        // if ($lang == 'en') {
        //     return $date->format('m/d/Y');
        // } elseif ($lang == 'fr') {
        //     return $date->format('d/m/Y');
        // } else {
        //     return 'Format de date inconnu';
        // }

        // On pourrait aussi utiliser un switch
        // qui a pour avantage de pouvoir combiner les différents dont les actions seront identiques
        // Ici, en fr, de, et es, on affiche le même format
        // En anglais et par défaut (tous formats inconnus), on affiche m/d/Y
        // switch ($lang) {
            // case 'fr':
            // case 'de':
            // case 'es':
            //     // // return $date->format('d/m/Y');
            //     // break;
            // case 'en':
            // default:
                // return $date->format('m/d/Y');
        // }
    // }
// } 