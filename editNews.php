<?php
 $dbh = new PDO('mysql:host=localhost;dbname=baza', 'root');
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "editNews"){
if(isset ($_FILES['picture'])) {
    $target_dir="files/";
    $files= $target_dir . $_FILES['picture']['name'];
    // var_dump($files);
    move_uploaded_file($_FILES['picture']['tmp_name'], $files);
    $Statement = $dbh->prepare('SELECT * FROM baza WHERE  id = :id');
    $Statement->bindParam(':id',$_GET['id']);
    $Statement->execute();
    $News = $Statement->fetch();
    @unlink(__DIR__ . '/..' . $News['picture']);
}
 
$updateStatement = $dbh->prepare('UPDATE baza SET `title`=:title, `picture`=:picture, `author`=:author, `summary`=:summary, `category`=:category WHERE `id`=:id');
$updateStatement ->execute([
    ':id' => $_GET['id'],
    ':title' => $_POST['title'],
    ':picture' => '/mziuri/' . $files,
    ':author' => $_POST['author'],
    ':summary' => $_POST['summary'],
    ':category' => $_POST['category']
   ]);
//  header('Location: /mziuri/posts.php');
}
    $Statement = $dbh->prepare('SELECT * FROM baza WHERE  id = :id');
    $Statement->bindParam(':id',$_GET['id']);
    $Statement->execute();
    $News = $Statement->fetch();
    var_dump($News);
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
    <form class="Form" action="/mziuri/editNews.php?id=<?php echo $News['id'] ?>" method="post" enctype="multipart/form-data">
        <h1>Edit News</h1>
        <input type="hidden" name="action" value="editNews" />
        <input type="text" name="title" value="<?php echo $News['title'] ?>" placeholder="Enter Title" class="input" />
        <input type="file" name="picture" value="<?php echo $News['picture'] ?>" placeholder="Enter Picture Adress" class="input" />
        <input type="text" name="author" value="<?php echo $News['author'] ?>" placeholder="Enter Author" class="input" />
        <input type="text" name="summary" value="<?php echo $News['summary'] ?>" placeholder="Enter Text" class="input" />
        <input type="text" name="category" value="<?php echo $News['category'] ?>" placeholder="Enter Category" class="input" />
        <button type="submit" class="input button">Edit</button>
    </form>
</body>
</html>