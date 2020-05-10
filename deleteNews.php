<?php
 $dbh = new PDO('mysql:host=localhost;dbname=baza', 'root');

 $file = $dbh->prepare('SELECT * from `baza` WHERE `id`=:id');
 $file->bindParam(':id', $_GET['id']);
 $file->execute();
 $fetched = $file->fetch();
 $deleteStatement = $dbh->prepare('DELETE from `baza` WHERE `id`=:id');
  $deleteStatement ->execute([
      ':id' => $_GET['id']
     ]);
   var_dump($fetched);
   unlink(__DIR__ . '/..' . $fetched['picture']);
 header('Location: /mziuri/posts.php');
?>
 