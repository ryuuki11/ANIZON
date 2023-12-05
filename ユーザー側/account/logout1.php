<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="../home/css/header_sazae.css" />
    <link rel="stylesheet" href="css/logout1.css" />
    <link rel="stylesheet" href="../home/css/footer.css" />

    <title>anizon</title>
</head>
    <body>
    <?php require '../home/header_sazae.php'; ?>
        <p class="logout">ログアウトしますか</p>
            <button class="logoutb1" onclick="location.href='../account/logout1-2.php'">
                はい
            </button>
            <button class="logoutb2" onclick="location.href='../home/home.php'">
                戻る
            </button>

            <?php require '../home/footer.php'; ?>
    </body>
</html>