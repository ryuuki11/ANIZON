<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>景品一覧画面</title>
    <link rel="stylesheet" href="../css/g-2-1-4.css" />
</head>
<body>
        <h1>anizon</h1><br>
        <h2>景品一覧</h2><br>
                <form action="g-2-1-1.php" method="post">
                    <button type="submit" class="syohin">商品</button>
                </form>
            <div class="button">
                <table class="top">
                    <tr>
                        <form action="g-2-1-5.php" method="post">
                            <td><button type="submit" class="keihintouroku">景品登録</button></td>
                        </form>
                        <form action="g-1-1-1.php" method="post" class="rogout">
                            <td><button type="submit" class="rogout">ログアウト</button></td>
                        </form>
                    </tr>
                </table>
            </div>
            <div class="top">
                <table cellpadding="50" boder class="example">
                    <tr class="boder">
                        <th class="boder">商品名</th>
                        <th class="boder">画像</th>
                        <th class="boder">更新日</th>
                    </tr>
                    <tr class="boder">
                        <td class="boder"><a href="g-2-1-3.html">商品名</a></td>
                        <td class="boder">画像pass</td>
                        <td class="boder">更新日</td>
                    </tr>
                </table>
            </div>
</body>
</html>