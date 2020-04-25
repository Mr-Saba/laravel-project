<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "news") {
$dbh = new PDO('mysql:host=localhost;dbname=baza', 'root'); 
$Statement = $dbh->prepare('INSERT into `baza` SET `title`=:title, `picture`=:picture, `author`=:author, `summary`=:summary, `category`=:category');
try {
    $Statement->execute([
        ':title' => $_POST['title'],
        ':picture' => $_POST['picture'],
        ':author' => $_POST['author'],
        ':summary' => $_POST['summary'],
        ':category' => $_POST['category']
       ]);
    //    echo $dbh->errorInfo();
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
    .button {
        border: 0;
        padding: 10px;
        background-color: green;
    }
    </style>
</head>

<body>
    <form class="form" action="/mziuri/news.php" method="POST">
        <input type="hidden" name="action" value="news" />
        <input type="text" name="title" placeholder="Enter Title" class="input" />
        <input type="text" name="picture" placeholder="Enter Picture Adress" class="input" />
        <input type="text" name="author" placeholder="Enter Author" class="input" />
        <input type="text" name="summary" placeholder="Enter Text" class="input" />
        <input type="text" name="category" placeholder="Enter Category" class="input" />
        <button type="submit" class="input button">Submit</button>
    </form>
</body>

</html>