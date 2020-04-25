<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title></title>
    <style>

    </style>
</head>

<body>
 <?php
     $dbh = new PDO('mysql:host=localhost;dbname=baza', 'root'); 
     $statement = $dbh->prepare('SELECT * FROM baza LIMIT 10');
     $statement->execute();
     $data = $statement->fetchAll();
     // echo  '<pre>';
     //    print_r($data);
     // echo  '</pre>';
    ?> 
    <nav class="flex">
        <div class="menu1">
            <span class="menu1-text">template</span>
            <span class="menu1-text bold">Blog</span>
        </div>
        <div class="menu2">
            <i class="fas fa-search logo"></i>
            <ul class="menu2-text1">
                <div class="item1">About</div>
                <div class="item1">Cooperation</div>
                <div class="item1">Contact</div>
                <div class="item2 space">Nature</div>
                <div class="item2">People</div>
                <div class="item2">Trips</div>
                <div class="item2">Animals</div>
                <div class="item2">Fashion</div>
                <div class="item2">Tech</div>
                <div class="item2 bold">. . .</div>
            </ul>
        </div>
    </nav>
    <div class="post-image">
        <img class="main-img" src="/mziuri/img/12.png" />
        <img class="img1" src="/mziuri/img/123.png" />
        <div class="txt1">Maecenas quis lobortis nunc. Nullam sit</div>
        <div class="txt2">vel odio congue vulputate a ut nisi.</div>
        <button class="butt">People</button>
    </div>
    <div class="container">
        <?php for($i=0;$i<min(2,count($data));$i++) { ?>
        <div class="post">
            <div class="post-image">
                <img src="<?=$data[$i]['picture']?>" class="photo" />
                <span class="post-tag"><?=$data[$i]['category']?></span>
            </div>
            <div class="text"><?=$data[$i]['summary']?></div>
            <div class="date"><?=$data[$i]['date']?>||<?=$data[$i]['author']?></div>
        </div>
        <?php }
        ?>
        <div class="post-image">
            <img src="/mziuri/img/16.png" class="big-photo" />
            <div class="big-txt">Proin congue elit fringilla</div>
            <div class="small-txt">sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur
                diam sed, ultrices urna. </div>
            <span class="button1">Trips</span>
        </div>
    </div>

    <div class="container">
        <?php for($i=2;$i<min(5,count($data));$i++) { ?>
        <div class="post1">
            <div class="post-image">
                <img src="<?=$data[$i]['picture']?>" class="photo">
                <span class="post-tag"><?=$data[$i]['category']?></span>
            </div>
            <div class="text"><?=$data[$i]['summary']?></div>
            <div class="date1"><?=$data[$i]['date']?>||<?=$data[$i]['author']?></div>
        </div>
        <?php }
        ?>
    </div>
        <div class="container">
        <?php for($i=5;$i<min(8,count($data));$i++) { ?>
        <div class="post1">
            <div class="post-image">
        <img src="<?=$data[$i]['picture']?>" class="photo">
        <span class="post-tag"><?=$data[$i]['category']?></span>
            </div>
            <div class="text"><?=$data[$i]['summary']?></div>
            <div class="date1"><?=$data[$i]['date']?>||<?=$data[$i]['author']?></div>
        </div>
        <?php }
        ?>
    </div>
    <div class="container">
    <?php for($i=8;$i<min(10,count($data));$i++) { ?>
        <div class="post">
            <div class="post-image">
                <img src="<?=$data[$i]['picture']?>" class="photo" />
                <span class="post-tag"><?=$data[$i]['category']?></span>
            </div>
            <div class="text"><?=$data[$i]['summary']?></div>
            <div class="date"><?=$data[$i]['date']?>||<?=$data[$i]['author']?></div>
        </div>
        <?php }
        ?>
    </div>
    <div class="last-1">
        <div class="last-big">Newsletter</div>
        <div class="last-small">Donec elementum dui semper, pretium dui quis, pretium nisl.</div>
        <div class="last-background">
            <div class="last-button">
                <p class="last-button-txt">Sign up</p>
            </div>
        </div>
    </div>
    <div class="last-2">
        <div class="last-small2">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </div>
        <div class="last-small3">Try awsome tool for desgners symu.co</div>
    </div>
</body>

</html>