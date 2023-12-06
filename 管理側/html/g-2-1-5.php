<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-5.css" />
    <title>景品登録画面</title>
</head>
<body>
    <table class="right">
        <tr>
            <form action="g-2-1-4.php" method="post">
                <td><button type="submit" class="back">戻る</button></td>
            </form>
            <form action="g-1-1-1.php" method="post">
                <td><button type="submit" class="logout">ログアウト</button></td>
            </form>
        </tr>
    </table>
    <h1>anizon</h1><br>
    <h2>景品登録画面</h2>
        <?php
            echo '<form action="g-2-1-6.php" method="post">';
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>景品名</p></td><td><p><input type="text" name="p_name" placeholder="景品名"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td><p><input type="text" name="p_id" placeholder="商品ID"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>ランク</p></td><td><p><input type="text" name="rank" placeholder="ランク"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>景品説明</p></td><p><td><input type="text" name="setumei" placeholder="景品説明"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td><p><input type="text" name="category" placeholder="在庫情報"></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td><p><input type="text" name="image" placeholder="画像パス"></p></td>
                </tr>';
                
        echo '</table>';
        
        echo '<button type="submit" class="toroku" name="Ktoroku">登録</button>';
        echo '</form>';
        ?>
</body>
</html>