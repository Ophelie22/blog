Étape 2 - Dynamiser 💥
On va dynamiser les templates, pour afficher les données des articles.

N'hésitez pas à faire plusieurs commits, avec des messages clairs 👌

Créer une branche dynamiser et se placer dedans.

Dynamiser l'affichage des articles dans le template home.tpl.php :
adapter la boucle sur les objets Article pour dynamiser la liste d'article…
… en veillant à conserver intacte l'intégration HTML/CSS
Dynamiser l'affichage d'un article dans le template article.tpl.php
adapter l'utilisation de l'objet Article pour dynamiser la page d'un article…
… en veillant à conserver intacte l'intégration HTML/CSS
On veut aussi dynamiser les catégories (affichées en haut et à droite) :
récupérer la liste des catégories en PHP
itérer sur la liste dans les templates adaptés et afficher les catégories dynamiquement
On veut aussi dynamiser les auteurs (affichés à droite) :
récupérer la liste des auteurs en PHP
itérer sur la liste dans le template adapté et afficher les auteurs dynamiquement
Ajouter et commiter les modifications avec git :)
Revenir sur la branche master et y fusionner la branche dynamiser.

Exemple de code pour le template author.tpl.php
<!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
<div class="card">
<h3 class="card-header">Auteurs</h3>
<ul class="list-group list-group-flush">
    <?php foreach ($authors as $authorId => $authorName) : ?>
    <li class="list-group-item"><?= $authorName ?></li>
    <?php endforeach; ?>
</ul>
</div>