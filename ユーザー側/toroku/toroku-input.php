<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF=8">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <link rel="stylesheet" href="css/toroku0.css">
    <link rel="stylesheet" href="../home/css/header_title.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>新規登録 </title>
</head>
<body>
<?php require '../home/header_title.php'; ?>
    <?php
$login=$password=$m_name=$post=$address=$city=$town=$dal=$apart=$mail=$number='';
if(isset($_SESSION['Member'])){
    $login=$_SESSION['Member']['login'];
    $password=$_SESSION['Member']['password'];
    $m_name=$_SESSION['Member']['name'];
    $post=$_SESSION['Member']['post'];
    $address=$_SESSION['Member']['address'];
    $city=$_SESSION['Member']['city'];
    $town=$_SESSION['Member']['town'];
    $dal=$_SESSION['Member']['dal'];
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
 echo ' <input type="text" name="post"  value="',$post,'" placeholder="例：1234567">';
 echo ' <button type="button" class="ajaxzip3" href="#">自動入力</button>';
 echo ' <div>県名</div>';
 echo ' <input type="text" name="address" value="',$address,'">';
 echo ' <div>市区町村</div>';
 echo ' <input type="text" name="city"  value="',$city,'">';
 echo ' <div>町名</div>'; 
 echo ' <input type="text" name="town" value="',$town,'">';
 echo ' <div>番地</div>';
 echo ' <input type="text" name="dal"  value="',$dal,'">';
 echo ' <div>マンション名、号室等</div>';
 echo ' <input type="text"  name="apart" value="',$apart,'">';
 echo ' <div>メールアドレスを入力してください</div>';
 echo ' <input type="text"  name="mail" value="',$mail,'">';
 echo ' <div>電話番号</div>';
 echo ' <input type="text" name="number" value="',$number,'">';
 echo ' <div><button class="toroku" type="submit">確認</button></div>';
 echo '</form>';
    ?>
    <script>
            $('.ajaxzip3').on('click', function(){
    AjaxZip3.zip2addr('post','','address','city','town','dal');

    //成功時に実行する処理
    AjaxZip3.onSuccess = function() {
        $('.dal').focus();
    };
    
    //失敗時に実行する処理
    AjaxZip3.onFailure = function() {
        alert('郵便番号に該当する住所が見つかりません');
    };
    
    return false;

});
            </script>
            <?php require '../home/footer.php'; ?>
</body>
</html>