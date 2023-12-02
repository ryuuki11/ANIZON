<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/search.css" />
    <link rel="stylesheet" href="../home/css/header_search.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>anizon</title>
</head>
    <body>
    <?php require '../home/header_search.php'; ?>
        
        <h2>条件検索</h2>
        <div class="btn">
            <button class="backb">
                戻る
            </button>
        </div>
        <form action="result.php" method="GET">
        <div class="word">
            <p>商品名</p>
            <input  name="name" type="text">
        </div>
        <div class="word">
            <p>カテゴリー</p>
            <select name="category">
                <option value="0" selected>全て</option>
                <option value="1">CD・DVD</option>
                <option value="2">漫画</option>
                <option value="3">グッズ</option>
            </select>
        </div>
        <div class="word">
            <p>並び替え</p>
            <select name="sort">
                <option value="0" selected>高い順</option>
                <option value="1">安い順</option>
                <option value="2">人気順</option>
            </select>
        </div>
        <br>
        <button type="submit" class="search">
            検索
        </button>
        <form action=""></form>
        <?php require '../home/footer.php'; ?>
    </body>
</html>

