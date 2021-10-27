<?php
// Point d'entrée pour la page d'accueil
// Inclusion des fichiers nécessaires
/// : définir une classe Article (ou charger le fichier déclarant la classe Article)
include('inc/Article.php');

// Vérification de la classes Article demandée.
if(!class_exists('Article')){
      die('La classe n\a a pas été incluse');
}
// crétaion du premier objet
$prems = new Article();
$prems->title = 'Ivre, il refait tous les challenges en un week-end sans dormir.';     //propriete title et cette propriete title aura pour valeur 
//ce qui se trouve dans $titleParams
$prems->content = 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.';
$prems->author = 'Alexandre';
$prems->date = '2017-07-13';
$prems->category = 'Ma Vie De Dev';

$deuz = new Article();
$deuz->title ='POO or not POO, that is the question.';
$deuz->content ='La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.';
$deuz->date ='2017-07-04';
$deuz->author = 'Julie';
$deuz->category ='TeamBack';


// Auto-contrôle visuel, à nouveau.
print_r($deuz);

$troiz = new Article();
$troiz->title = 'Git, pour les n00bs.';
$troiz->content = 'Un p\'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning';
$troiz->author = 'Lucie';
$troiz->date = '2017-06-19';
$troiz->category = ' Collaboration';





//debug
print_r($prems);