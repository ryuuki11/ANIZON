<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <link rel="stylesheet" href="css/account3.css">
    <title>login</title>
</head>
<body>
    <a><p>ログインIDを20字以内で入力してください</a><br>
        <input type="text" name="login"></p>

    <a><p>パスワードを20字以内で入力してください</a><br>
        <input type="text" name="password"></p><br>
    <a><p>名前を入力してください</p></a>
    <input type="text" name="name">
    <a><p>メールアドレスを入力してください</a><br>
                <input type="text"  name="mail" value="○○○○○○○○○○○○"></p><br>
        <p class="addres">ご住所</p>
        <a><p>郵便番号を入力してください</a><br>
        <div class="buttn"><div class="post"><input type="text" class="post" name="post"></div>
            <button class="auto"  type="submit">自動入力</button></div></p>
        <a class="pos"><p>都道府県</a><br>
            <input type="text" name="todohuken"></p>
        <a class="pos"><p>区市町</a><br>
            <input type="text" name="kusityou"></p>
        <a class="pos"><p>マンション名・号室</a><br>
             <input type="text" name="mansyon"></p>
        <a><p>電話番号</a><br>
            <input type="text" name="tel"></p>
            
        <button class="toroku" type="submit">確認</button>
</body>
</html>