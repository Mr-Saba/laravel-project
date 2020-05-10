<?php
$dbh = new PDO('mysql:host=localhost;dbname=baza', 'root');
$statement = $dbh->prepare('SELECT * FROM `baza` ORDER BY `date` DESC');
$statement->execute();
?>
<?php foreach($statement as $fields) { ?>
<li>
<p><?=$fields['id']?></p>
<p><?=$fields['title']?></p>
<img src="<?=$fields['picture']?> " width='100px' height='100px' /> 
<p><?=$fields['author']?></p>
<p><?=$fields['summary']?></p>
<p><?=$fields['category']?></p>

<?php } ?>
