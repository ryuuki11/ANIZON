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
    <link rel="stylesheet" href="css/toroku.css">
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
    $city=$_SESSION['Member']['city'];
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
 echo ' <input type="text" size="10" name="m_name" value="',$m_name,'">';
 echo ' <div class="place">ご住所</div>';
 echo ' <div>郵便番号を入力してください</div>';
 echo ' <input type="text" id="zipcode maxlength="8" name="post" value="',$post,'">';
 echo ' <div class=p><input type="button" value="自動入力"></div>';
 echo ' <div>都道府県</div>';
 echo ' <input type="text" size="30" name="prefecture" value="',$address,'">';
 echo ' <div>市区町村、番地</div>';
 echo ' <input type="text" size="30" name="city" value="',$city,'">';
 echo ' <div>マンション名、号室等</div>';
 echo ' <input type="text" size="30" name="apart" value="',$apart,'">';
 echo ' <div>メールアドレスを入力してください</div>';
 echo ' <input type="text" size="30" name="mail" value="',$mail,'">';
 echo ' <div>電話番号</div>';
 echo ' <input type="text" size="30" name="number" value="',$number,'">';
 echo ' <div><button class="toroku" type="submit">確認</button></div>';
 echo '</form>';
    ?>
</body>
</html>