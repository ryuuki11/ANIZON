<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account5.css">
    <title>login</title>
</head>
<body>
<?php
    $name='';
    if(isset($_SESSION['member'])) {
        $name = $_SESSION['member']['m_name'];
    }
    echo '<p class="name">',$name,'さん</p>';
    echo '<p class="koushin">変更完了です</p>';
?>        
      
            

        <div><button class="login" onclick="location.href='../login/login.php'">ログインページへ</button></div>
</body>
</html>