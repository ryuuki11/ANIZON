<<<<<<< HEAD
<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head> 
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cart4.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>login</title>
</head>
<body>
    <div id="wrap">
        <?php require '../home/header_sazae.php'; ?>
        <?php
            echo '<form action="cart3.php" method="post"></form>';
            echo '<div class="name">',$_SESSION['member']['m_name'],'さんのカート</div>';
            echo '<div class="buttn2"><button class="return" type="submit" onclick="location.href=\'../cart/cart3.php\'">戻る</button></div>';
            echo '<div class="place">ご住所</div>';
            echo '<div>郵便番号を入力してください</div>';
            echo '<div class="button">';
            echo '<input class="post" type="text" id="zipcode" maxlength="8" name="post" value="',$_SESSION['member']['post'],'">';
            echo '<button type="button" class="ajaxzip3" href="#">自動入力</button>';
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
        <form action="cart3.php">
            <div class="push"><button>登録</button></div>
        </form>
            <?php require '../home/footer.php'; ?>
    </div>
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

=======
   <!DOCTYPE html>
   <html lang="ja">
       <head>
=======
   <!DOCTYPE html>
   <html lang="ja">
       <head>
   
       <meta charset="UTF=8">
       <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
       <link rel="stylesheet" href="css/cart4.css">
       <title>login</title>
   </head>
   <body>
    <p class="name">○○○○○さんの支払い情報</p>
    <div class="buttn2"><button class="return" type="submit">戻る</button></div>
      
    <div class="place">ご住所</div>
    <div>郵便番号を入力してください</div>
    <div class="button">
    <input class="post" type="text" id="zipcode" maxlength="8" name="post" value="',$post,'">
    <input class="button" type="button" value="自動入力">
    </div>
    <div>都道府県</div>
    <input type="text" size="30" name="prefecture" value="',$address,'">
    <div>市区町村、番地</div>
    <input type="text" size="30" name="city" value="',$city,'">
    <div>マンション名、号室等</div>
    <input type="text" size="30" name="apart" value="',$apart,'">
       
           <div class="buttn"><button class="koushin" type="submit">変更</button></div>
   </body>
   </html>
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
   
       <meta charset="UTF=8">
       <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
       <link rel="stylesheet" href="css/cart4.css">
       <title>login</title>
   </head>
   <body>
    <p class="name">○○○○○さんの支払い情報</p>
    <div class="buttn2"><button class="return" type="submit">戻る</button></div>
      
    <div class="place">ご住所</div>
    <div>郵便番号を入力してください</div>
    <div class="button">
    <input class="post" type="text" id="zipcode" maxlength="8" name="post" value="',$post,'">
    <input class="button" type="button" value="自動入力">
    </div>
    <div>都道府県</div>
    <input type="text" size="30" name="prefecture" value="',$address,'">
    <div>市区町村、番地</div>
    <input type="text" size="30" name="city" value="',$city,'">
    <div>マンション名、号室等</div>
    <input type="text" size="30" name="apart" value="',$apart,'">
       
           <div class="buttn"><button class="koushin" type="submit">変更</button></div>
   </body>
   </html>
   
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
    