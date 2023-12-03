<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お届け先</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/place.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
</head>
<body>
<div id="wrap">
<?php require '../home/header_sazae.php'; ?>
    <p class="address">お届け先住所</p>
    <a href="update.php" class="change"><button>変更</button></a>
<?php

    if(isset($_POST['post'])){

            $_SESSION['member']['post'] = $_POST['post'];
            $_SESSION['member']['address'] = $_POST['address'];
            $_SESSION['member']['city'] = $_POST['city'];
            $_SESSION['member']['town'] = $_POST['town'];
            $_SESSION['member']['dal'] = $_POST['dal'];
            $_SESSION['member']['apart'] = $_POST['apart'];
            $_SESSION['member']['mail'] = $_POST['mail'];
            
    }
    echo '<p>〒',$_SESSION['member']['post'],'</p>';
    echo '<p class="midasi">都道府県</p>';
    echo '<p>',$_SESSION['member']['address'],'<p>';
    echo '<p class="midasi">市区町村</p>';
    echo '<p>',$_SESSION['member']['city'],'</p>';
    echo '<p class="midasi">町名</p>';
    echo '<p>',$_SESSION['member']['town'],'</p>';
    echo '<p class="midasi>番地<p>';
    echo '<p>',$_SESSION['member']['dal'],'</p>';
    echo '<p class="midasi">マンション名・号室</p>';
    echo '<p>',$_SESSION['member']['apart'],'</p>';
        
    echo '<p class="mali">メールアドレス</p>';
    echo '<p>',$_SESSION['member']['mail'],'</p>';
?>
    
    <a href="end.php" class="fin"><button>完了</button></a>
    <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>