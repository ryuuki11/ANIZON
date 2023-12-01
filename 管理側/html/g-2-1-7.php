<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-7.css" />
    <title>確認画面</title>
</head>
<body>
    <h1>anizon</h1><br>
    <div class="all">
        <div class="table">
            <?php
                    $_SESSION['Prize']['p_name']=$_POST['p_name'];
                    $_SESSION['Prize']['category']=$_POST['p_id'];
                    $_SESSION['Prize']['explain']=$_POST['rank'];
                    $_SESSION['Prize']['price']=$_POST['category'];
                    $_SESSION['Prize']['stock']=$_POST['image'];

            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>景品名</p></td><td class="td3">',$_POST['p_name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>景品ID</p></td><td class="td3">',$_POST['p_id'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>ランク</p></td><td class="td3">',$_POST['rank'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['image'],'</td>
                </tr><br>';
                
        echo '</table>';
        echo '</div>';
        $result='';
        if(isset($_POST['sakujo'])){
            $result='この内容を削除しますか?';
        }else if(isset($_POST['kousin'])){
            $result='この内容に更新しますか?';
        }
        echo '<div class="delete">';
        echo '<h2>',$result,'</h2><br>';
        ?>
            <div class="brn">
                        <form action="g-2-1-4.php" method="post">
                            <button type="submit"class="yes">はい</button>
                        </form>
                        <form action="g-2-1-4.php" method="post">
                            <button type="submit" class="no">いいえ</button>
                        </form>
            </div>
        </div>
    </div>
</body>
</html>