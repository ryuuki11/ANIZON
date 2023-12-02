<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../home/css/header_title.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>login</title>
</head>
<body>
    <?php require '../home/header_title.php'; ?>
<form action="login-output.php" method="post">
        <p class="id">ログインID</p>
        <p><input type="text" name="login"></p>

        <p>パスワード</p>
        <p><input type="password" name="password"></p>

        <div><button type="submit" class="login">ログイン</button><br></div>
    </form>

    <div><button class="toroku" onclick="location.href='../toroku/toroku-input.php'">新規登録</button></div>
    <?php require '../home/footer.php'; ?>
</body>
</html>