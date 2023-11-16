<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-2.css" />
    <title>商品登録画面</title>
</head>
<body>
    <form action="g-1-1-1.html" method="post">
        <button type="submit" class="logout">ログアウト</button>
    </form>
    <h1>anizon</h1><br>
    <h2>商品登録画面</h2>
            <table>
                <tr>
                    <td class="td2"><p>商品名</p></td><td><p><input type="text" id="name" placeholder="商品名"></p></td>
                </tr>
                <tr>
                    <td class="td2"><p>カテゴリー</p></td><td><p><input type="text" id="category" placeholder="カテゴリー"></p></td>
                </tr>
                <tr>
                    <td class="td2"><p>商品説明</p></td><p><td><input type="text" id="explain" placeholder="商品説明"></p></td>
                </tr>
                <tr>
                    <td class="td2"><p>値段</p></td><td><p><input type="text" id="price" placeholder="値段"></p></td>
                </tr>
                <tr>
                    <td class="td2"><p>在庫情報</p></td><td><p><input type="text" id="stock" placeholder="在庫情報"></p></td>
                </tr>
                <tr>
                    <td class="td2"><p>画像パス</p></td><td><p><input type="text" id="pass" placeholder="画像パス"></p></td>
                </tr>
        </table>
        <form action="g-2-1-7.html" method="post">
            <button type="submit" class="toroku">登録</button>
        </form>
</body>
</html>