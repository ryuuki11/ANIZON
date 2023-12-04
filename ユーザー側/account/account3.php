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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
    $login=$password=$m_name=$post=$address=$city=$town=$dal=$apart=$mail=$number='';
    if(isset($_SESSION['member'])) {
        $login = $_SESSION['member']['login'];
        $password = $_SESSION['member']['password'];
        $m_name = $_SESSION['member']['m_name'];
        $post = $_SESSION['member']['post'];
        $address = $_SESSION['member']['address'];
        $city = $_SESSION['member']['city'];
        $town = $_SESSION['member']['town'];
        $dal = $_SESSION['member']['dal'];
        $apart = $_SESSION['member']['apart'];
        $mail = $_SESSION['member']['mail'];
        $number = $_SESSION['member']['number'];
    }

    echo '<form action="account4.php" method="post">';
    echo '<div class="ID">ログインIDを20字以内で入力してください</div>';
    echo '<input type="text" name="login" value="',$login,'">';
    echo '<div class="pass">パスワードを20字以内で入力してください</div>';
    echo '<input type="password" name="password" value="',$password,'">';
    echo '<div class="name">お名前</div>';
    echo ' <input type="text" name="m_name" value="',$m_name,'">';
    echo ' <div class="place">ご住所</div>';
    echo ' <div>郵便番号を入力してください</div>';
    echo ' <input type="text" name="post"  value="',$post,'" >';
    echo ' <div><button type="button" class="ajaxzip3" href="#">自動入力</button></div>';
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
</body>
</html>