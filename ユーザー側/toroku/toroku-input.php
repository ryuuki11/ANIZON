<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizom';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF=8">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <link rel="stylesheet" href="css/toroku0.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title>新規登録 </title>
</head>
<body>
    <?php
$login=$password=$m_name=$post=$address=$city=$apart=$mail=$number='';
if(isset($_SESSION['Member'])){
    $login=$_SESSION['Member']['login'];
    $password=$_SESSION['Member']['password'];
    $m_name=$_SESSION['Member']['name'];
    $post=$_SESSION['Member']['post'];
    $address=$_SESSION['Member']['address'];
    $apart=$_SESSION['Member']['apart'];
    $mail=$_SESSION['Member']['mail'];
    $number=$_SESSION['Member']['number'];
}
 echo '<form action="toroku-output.php" method="post">';
 echo '<div class="ID">ログインIDを20字以内で入力してください</div>';
 echo '<input type="text" name="login" value="',$login,'">';
 echo '<div class="pass">パスワードを20字以内で入力してください</div>';
 echo '<input type="password" name="password" value="',$password,'">';
 echo '<div class="name">お名前</div>';
 echo ' <input type="text" name="m_name" value="',$m_name,'">';
 echo ' <div class="place">ご住所</div>';
 echo ' <div>郵便番号を入力してください</div>';
 echo ' <input type="text" name="post" value="',$post,'" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,\'\',\'address\',\'address\');" >';
 echo ' <div>住所</div>';
 echo ' <input type="text" name="address" size="30" value="',$address,'">';
 echo ' <div>マンション名、号室等</div>';
 echo ' <input type="text"  name="apart" value="',$apart,'">';
 echo ' <div>メールアドレスを入力してください</div>';
 echo ' <input type="text"  name="mail" value="',$mail,'">';
 echo ' <div>電話番号</div>';
 echo ' <input type="text" name="number" value="',$number,'">';
 echo ' <div><button class="toroku" type="submit">確認</button></div>';
 echo '</form>';
    ?>
</body>
</html>