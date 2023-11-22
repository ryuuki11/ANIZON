<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account3.css">
    <title>login</title>
</head>
<body>
<form action="toroku-output.php" method="post">
        <div class="ID">ログインIDを20字以内で入力してください</div>
        <input type="text" name="login" value="',$login,'">
        <div class="pass">パスワードを20字以内で入力してください</div>
        <input type="password" name="password" value="',$password,'">
        <div class="name">お名前</div>
        <input type="text" size="10" name="m_name" value="',$m_name,'">
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
        <div>メールアドレスを入力してください</div>
        <input type="text" size="30" name="mail" value="',$mail,'">
        <div>電話番号</div>
        <input type="text" size="30" name="number" value="',$number,'">
        <div><button class="toroku" type="submit">確認</button></div>
        </form>
</body>
</html>