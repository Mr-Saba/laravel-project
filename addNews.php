  
<?php
$dbh = new PDO('mysql:host=localhost;dbname=baza', 'root'); 
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "addNews") {  
if(isset ($_FILES['picture'])) {
    $target_dir = "files/";
    $file = $target_dir . $_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], $file); 
}
$Statement = $dbh->prepare('INSERT into `baza` SET `title`=:title, `picture`=:picture, `author`=:author, `summary`=:summary, `category`=:category');
try {
    $Statement->execute([
        ':title' => $_POST['title'],
        ':picture' => '/mziuri/' . $file,
        ':author' => $_POST['author'],
        ':summary' => $_POST['summary'],
        ':category' => $_POST['category']
       ]);
       header('Location: /mziuri/posts.php');
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
    h1 {
        text-align: center;
    }
    </style>
</head>

<body>
    <form class="form" action="/mziuri/addNews.php" method="POST" enctype="multipart/form-data">
        <h1>Add News</h1>
        <input type="hidden" name="action" value="addNews" />
        <input type="text" name="title" placeholder="Enter Title" class="input" />
        <input type="file" name="picture" class="input" />
        <input type="text" name="author" placeholder="Enter Author" class="input" />
        <input type="text" name="summary" placeholder="Enter Text" class="input" />
        <input type="text" name="category" placeholder="Enter Category" class="input" />
        <button type="submit" class="input button">Add</button>
    </form>
</body>

</html>