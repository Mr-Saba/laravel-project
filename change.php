<?php
if($_SERVER["REQUEST_METHOD"] == "post" && $_POST["action"] == "change") {
$dbh = new PDO('mysql:host=localhost;dbname=baza', 'root'); 
$Statement = $dbh->prepare('UPDATE `baza` SET `id`=:id, `picture`=:picture, `author`=:author, `summary`=:summary, `category`=:category');
try {
    $Statement->execute([
        ':title' => $_POST['title'],
        ':picture' => $_POST['picture'],
        ':author' => $_POST['author'],
        ':summary' => $_POST['summary'],
        ':category' => $_POST['category']
       ]);
       echo $dbh->errorInfo();
}
catch(Exception $err) {
    echo $err->getMessage();
}
}
?>
<html>

<head>
    <style>
    .input {
        display: block;
        margin: 30px;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>

<body>
    <form class="form" action="/mziuri/change.php" method="POST">
        <input type="hidden" name="action" value="change" />
        <input type="text" name="title" value="id" placeholder="Enter Title" class="input" />
        <input type="text" name="picture" value="picture" placeholder="Enter Picture Adress" class="input" />
        <input type="text" name="author" value="author" placeholder="Enter Author" class="input" />
        <input type="text" name="summary" value="summary" placeholder="Enter Text" class="input" />
        <input type="text" name="category" value="category" placeholder="Enter Category" class="input" />
        <button type="submit" class="input button">Submit</button>
    </form>
</body>

</html>