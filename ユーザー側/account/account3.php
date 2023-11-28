<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account3.css">
    <title>login</title>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body>
<?php
    $login=$pass=$name=$post=$address=$apart=$mail=$tell='';
    if(isset($_SESSION['member'])) {
        $login = $_SESSION['member']['login'];
        $pass = $_SESSION['member']['password'];
        $name = $_SESSION['member']['m_name'];
        $post = $_SESSION['member']['post'];
        $address = $_SESSION['member']['address'];
        $apart = $_SESSION['member']['apart'];
        $mail = $_SESSION['member']['mail'];
        $number = $_SESSION['member']['number'];
    }

    echo '<form action="account4.php" method="post">';
        echo '<div class="ID">ログインIDを20字以内で入力してください</div>';
        echo '<input type="text" name="login" value="',$login,'">';
        echo '<div class="pass">パスワードを20字以内で入力してください</div>';
        echo '<input type="text" name="password">';
        echo '<div class="">名前を入力してください</div>';
        echo '<input type="text" size="10" name="name" value="',$name,'">';
        echo '<div class="place">ご住所</div>';
        echo '<div>郵便番号を入力してください</div>';
        echo '<input type="text" name="post" value="',$post,'" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,\'\',\'address\',\'address\');">';
        echo '<div>住所</div>';
        echo '<input type="text" size="30" name="address" value="',$address,'">';
        echo '<div>マンション名、号室等</div>';
        echo '<input type="text" size="30" name="apart" value="',$apart,'">';
        echo '<div>メールアドレスを入力してください</div>';
        echo '<input type="text" size="30" name="mail" value="',$mail,'">';
        echo '<div>電話番号</div>';
        echo '<input type="text" size="30" name="number" value="',$number,'">';
        echo '<div><button class="toroku" type="submit">確認</button></div>';
    echo '</form>';
    ?>
</body>
</html>