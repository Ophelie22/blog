# Requêtes

## Auteurs

### Lister les auteurs
SELECT *FROM author;

### L'auteur ayant l'id 2
SELECT * FROM author WHERE id = 2;

### Lister les auteurs par ordre alphabétique (sur le nom)
SELECT * FROM author ORDER BY `name`;

### Lister les auteurs dont l'e-mail contient @gmail.com
SELECT * FROM author WHERE email LIKE '%@gmail.com%%';

### Lister les auteurs qui n'ont pas d'image de profil
SELECT * FROM author WHERE image IS NULL;

# Articles

### Lister tous les articles
SELECT * FROM post;

### Lister le titre et la date de publication de tous les articles
SELECT title, published_date FROM post

### Afficher le titre d'un article en particulier (en passant l'id de l'article)
SELECT title FROM post WHERE id = 3;

### Lister les 2 derniers articles publiés
SELECT * FROM post ORDER BY published_date DESC LIMIT 2;

### Compter le nombre d'articles
SELECT count(*) FROM post

### Compter le nombre d'articles et renommer la colonne en nbArticles
SELECT count(*) FROM post AS nbArticles.
Le résultat afichera nb Articles ds un tableau
