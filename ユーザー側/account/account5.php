<?php sesson_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <link rel="stylesheet" href="css/account5.css">
    <title>login</title>
</head>
<body>
<?php
    $name='';
    if(isset($_SESSION['member'])) {
        $name = $_SESSION['member']['m_name'];
    }
    echo '<p>',$name,'さん</p><br>';
    echo '<p>変更完了です</p>';
?>        
      
            

        <div><button class="login" onclick="location.href='../login/login.php'">ログインページへ</button></div>
</body>
</html>