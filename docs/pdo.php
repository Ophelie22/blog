<?php

// Le constructeur de PDO prend :
//   - le DSN, une chaine de caractère qui représente le type de connexion
//        'mysql:dbname=DATABASENAME;host=localhost'
// $pdo = new PDO('mysql:dbname=oblog;host=localhost', 'explorateur', 'Ereul9Aeng');
$pdo= new PDO('mysql: dbname=oblog;host=127.0.0.1:3306;charset=UTF8',
'ophelie',
'',// vrai md passe non communiqué :)
[
    // Option to display an error when SQL syntax is incorrect
    // On envoie une option supplémentaire pour indiquer à PHP de prendre les erreurs de MySQL transmises par PDO
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
);
// On a un objet de la classe PDO, qui est connecté à la base de données
// et qui permet de faire des requêtes, avec les méthodes ->query() et ->exec()

// On créer la requête dans une variable

$sql = '
    SELECT *
    FROM post
';
//var_dump($pdo, $sql);
// Il existe deux méthodes distinctes,
// exec va exécuter du code et query va aller chercher des données

// Pour une requête SELECT, il faut donc utiliser query()
// query() retourne un objet de la classe PDOStatement
$result = $pdo->query($sql);
//var_dump($result->fetchAll());
//Avec fetchAll on obtient tous les résultats d'un coup
// On précise en argument de qu'elle on souhaite que les données soient réprésentées
$tableauAssociatif = $result->fetchAll(PDO::FETCH_ASSOC);
// var_dump($tableauAssociatif);
foreach ($tableauAssociatif as $article) {
    echo $article['title'] . ' - ' . $article['published_date'] . '<br>';
}
// @question on peut demander à afficher le 4e article quand on a pas ID 4 mais le 4e article a l'ID 7 ?
// Oui :
$article4 = $tableauAssociatif[3];

while ($article = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $article['title'] . ' - ' . $article['published_date'] . '<br>';
}
// Si on veut faire des inserts, des updates ou des delete avec la méthode exec()
// On peut s'en servir pour l'écriture

//$sql = "
   // INSERT INTO `category` (`name`)
   // VALUES ('Humour'),('Horreur'),('Et que la lumière soit…')
//";

// On l'exécute comme query()
//$result = $pdo->exec($sql);
// $result contient soit FALSE en cas d'erreur, soit le nombre de lignes affectées par un INSERT, un UPDATE ou un DELETE
//var_dump($result);// On peut tester is on a un FALSE :
if ($result === false) {
    // Si on a des erreurs, on souhaite les voir
    // var_dump($pdo->errorCode()); // retourne un code d'erreur qui ne veut pas dire grand chose
    var_dump($pdo->errorInfo()); // retourne un tableau avec le code d'erreur et le message qui va avec
}
