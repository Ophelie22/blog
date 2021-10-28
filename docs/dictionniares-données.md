# Dictionnaire de données

## Auteurs (`author`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|entier|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre auteur|
|name|chaîne de caractères|NOT NULL|Le nom de l'auteur|
|image|chaîne de caractères|NULL|L'avatar de l'auteur|
|email|chaîne de caractères|NOT NULL, UNIQUE|L'e-mail de l'auteur|

## Catégories (`category`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|entier|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|chaîne de caractères|NOT NULL|Le nom de la catégorie|
|position|entier|NOT NULL, UNSIGNED, DEFAULT 0|La position de la catégorie dans le menu|

## Articles (`post`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|entier|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de l'article|
|title|chaîne de caractères|NOT NULL|Le titre de l'article|
|resume|chaîne de caractères|NOT NULL|Le résumé de l'article|
|content|longue chaîne de caractères|NOT NULL|Le contenu de l'article|
|published_date|date avec heure minutes et secondes|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de publication de l'article|
|views|entier|NOT NULL, UNSIGNED, DEFAULT 0|Le nombre de vues de l'article|