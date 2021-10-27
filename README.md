# oBlog :eyes:

On va démarrer notre projet **oBlog**, sans avoir encore le rendu HTML/CSS.  
Ce n'est pas grave, on peut commencer par anticiper la structure de notre projet => fichiers & dossiers.

## Code fourni :palm_tree:

- une intégration HTML/CSS (qui n'en est pas vraiment une) est fournie
- seule la page d'accueil est mise en place
- la nav nous permettra de naviguer facilement entre nos pages

## Créons les fichiers "point d'entrée" :hammer:

Un **point d'entrée** est un fichier qui sera accédé via une requête HTTP effectuée par le navigateur.  
`http://www.monsite.fr/`, le point d'entrée n'est pas stipulé, mais c'est `index.php`  
`http://www.monsite.fr/test.php`, le point d'entrée est `test.php` à la racine du projet  
`http://www.monsite.fr/dossier/article.php`, le point d'entrée est `article.php` dans le sous-dossier "dossier"

### Etapes :computer:

- à la racine, créer les fichiers :
  - `category.php` => page listant les articles d'une catégorie
  - `author.php` => page listant les articles d'un auteur
  - `article.php` => page affichant un article
- dans le dossier `inc/templates` :
  - créer un fichier de templates par page
  - y écrire le nom de la page (et un peu d'HTML si vous voulez :wink:)
- dans chaque fichier à la racine :
  - inclure toutes les classes utiles
  - afficher le code HTML grâce aux templates
- vérifier l'affichage correct des 3 nouvelles pages

## Factorisation :hocho:

En tant que dévs, on est fainéant. Et on voit bien que des bouts de code vont se répéter dans chaque "point d'entrée".  
On va donc, désormais, n'utiliser qu'un seul et unique point d'entrée : `index.php`

### #1 - Distinguer chaque page :mag:

- se baser sur un paramètre d'URL : "page"
- `category.php` => `http://localhost/folder/subfolder/S04-E03-oBlog/index.php?page=category`
- `author.php` => `http://localhost/folder/subfolder/S04-E03-oBlog/index.php?page=author`
- `article.php` => `http://localhost/folder/subfolder/S04-E03-oBlog/index.php?page=article`
- récupérer ce paramètre en GET dans `index.php`
- si le paramètre n'est pas fourni, c'est qu'on est sur la home
- grâce à des `if`, `else if` et `else`, afficher le nom de la page
  - le but est de vérifier qu'on arrive bien à distinguer chaque page

### #2 - Gérer l'affichage de chaque page :lipstick:

- analyser les bouts de code _qui changent_ dans les fichiers à la racine
- remplacer les chaînes de caractères _qui changent_ par une variable
- coder l'affichage de toutes les pages dans `index.php`
  - _si la page demandée est l'accueil, alors je charge la template correspondante_
  - _sinon si la page demandée est la page catégorie, alors je charge la template correspondante_
  - etc.

**On a réussi à factoriser, à ne pas se répéter** :tada:

Donc on peut désormais supprimer les fichiers `category.php`, `author.php` et `article.php`.

## Récupérer les données

### #1 - Page d'accueil

- inclure le fichier de données `inc/data.php`
- récupérer le tableau des articles
- dans la template :
  - parcourir le tableau pour afficher titre et texte des articles
  - renseigner le lien vers la page de chaque article (ajouter l'id dans l'URL `?page=article&id=45`)

<details><summary>Spoiler</summary>

```php
<?php
// ...
// Inclusion du fichier contenant les données
require 'inc/data.php';
// ...
// Récupération des articles
$articlesList = $dataArticlesList;
// Debug pour vérifier le contenu de la variable
print_r($articlesList); exit; // à commenter une fois vérifié
// ...
```

</details>

### #2 - Page Article

- inclure le fichier de données `inc/data.php`
- récupérer l'id fourni en paramètre de l'URL (`$_GET`)
- récupérer l'objet article pour l'id fourni
- dans la template (à créer si besoin) :
  - afficher titre et texte de l'article

<details><summary>Spoiler</summary>

```php
<?php
// ...
// Inclusion du fichier contenant les données
require 'inc/data.php';
// ...
// Récupération des données de l'article #3
$articleData = $dataArticlesList[3];
// Debug pour vérifier le contenu de la variable
print_r($articleData); exit; // à commenter une fois vérifié
// ...
```

</details>

**On a réussi à dynamiser le contenu de notre site** :tada:
# blog
Créer une branche cut-cut-cut et se placer dedans.

À partir de l'intégration HTML/CSS fournie dans le dossier integration-html-css/ :
découper l'intégration en plusieurs morceaux, un morceau par template PHP
3 templates => 3 morceaux (cf. le code source de oBlog 😉)
pour le template central qui affiche les articles, commenter la boucle foreach pour le moment
Bien contrôler le bon affichage de l'intégration HTML/CSS :
le site doit être « plein de couleurs » et ne doit plus ressembler à une maquette filaire 👌
la page d'accueil doit s'afficher correctement (pas de bugs PHP)
Ajouter et commiter les modifications avec git :)
Revenir sur la branche master et y fusionner la branche cut-cut-cut.

