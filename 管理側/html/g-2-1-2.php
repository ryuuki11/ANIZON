<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-2.css" />
    <title>商品登録画面</title>
</head>
<body>
    <form action="g-1-1-1.php" method="post">
        <button type="submit" class="logout">ログアウト</button>
    </form>
    <h1>anizon</h1><br>
    <h2>商品登録画面</h2>
        <?php
            echo '<form action="g-2-1-2-1.php" method="post">';
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td><p><input type="text" name="name" placeholder="商品名"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td><p><input type="text" name="id" placeholder="商品id"></p></td>
                </tr>';
                echo'<tr>
                    <td class="td2"><p>カテゴリー</p></td><td><p><input type="text" name="category" placeholder="カテゴリー"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>商品説明</p></td><p><td><input type="text" name="explain" placeholder="商品説明"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>値段</p></td><td><p><input type="text" name="price" placeholder="値段"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td><p><input type="text" name="stock" placeholder="在庫情報"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td><p><input type="text" name="pass" placeholder="画像パス"></p></td>
                </tr>';
            echo '</table>';


            echo '<button type="submit" class="toroku" name="toroku">登録</button>';
            echo '</form>';
            ?>
</body>
</html>