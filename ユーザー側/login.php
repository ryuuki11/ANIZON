<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
    <form action="login-output.php" method="post">
    <a><p>ログインID</a><br>
        <input type="text" name="login"></p>

    <a><p>パスワード</a><br>
    <input type="password" name="password"></p><br>

        <div class="login"><button type="submit">ログイン</button><br></div>
    </form>

    <div class="toroku"><button onclick="location.href='toroku.php'">新規登録</button></div>
</body>
</html>