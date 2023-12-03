<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/update.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>お届け先変更</title>
</head>
<body>
<div id="wrap">
<?php require '../home/header_sazae.php'; ?>
    <form action="place.php" method="post">
    <p>○○さんの支払い情報</p>
    <div class="place">ご住所</div>
    <?php
        echo '<div>郵便番号を入力してください</div>';
        echo '<div class="button">';
            echo '<input class="post" type="text" id="zipcode" maxlength="8" name="post" value="',$_SESSION['member']['post'],'">';
            echo '<input class="button" type="button" value="自動入力">';
        echo '</div>';
        echo '<div>都道府県</div>';
        echo ' <input type="text" name="address" value="',$_SESSION['member']['address'],'">';
        echo ' <div>市区町村</div>';
        echo ' <input type="text" name="city"  value="',$_SESSION['member']['city'],'">';
        echo ' <div>町名</div>'; 
        echo ' <input type="text" name="town" value="',$_SESSION['member']['town'],'">';
        echo ' <div>番地</div>';
        echo ' <input type="text" name="dal"  value="',$_SESSION['member']['dal'],'">';
        echo ' <div>マンション名、号室等</div>';
        echo ' <input type="text"  name="apart" value="',$_SESSION['member']['apart'],'">';
        echo ' <div>メールアドレスを入力してください</div>';
        echo ' <input type="text"  name="mail" value="',$_SESSION['member']['mail'],'">';
    ?>

    <div class="push"><button>登録</button></div>
    </form>
    <?php require '../home/footer.php'; ?>
</div>
</body>
</html>