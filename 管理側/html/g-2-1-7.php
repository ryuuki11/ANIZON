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
                    $_SESSION['Prize']['s_id']=$_POST['s_id'];
                    $_SESSION['Prize']['rank']=$_POST['rank'];
                    $_SESSION['Prize']['setumei']=$_POST['setumei'];
                    $_SESSION['Prize']['category']=$_POST['category'];
                    $_SESSION['Prize']['image']=$_POST['image'];

            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>景品名</p></td><td class="td3">',$_POST['p_name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>景品ID</p></td><td class="td3">',$_POST['s_id'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>ランク</p></td><td class="td3">',$_POST['rank'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>景品説明</p></td><td class="td3">',$_POST['setumei'],'</td>
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
            $num = 1;
        }else if(isset($_POST['kousin'])){
            $result='この内容に更新しますか?';
            $num = 2;
        }
        echo '<div class="delete">';
        echo '<h2>',$result,'</h2><br>';
            echo '<div class="brn">';
                        echo '<form action="g-2-1-7-1.php" method="post">';
                            echo '<button type="submit"class="yes">はい</button>';
                            echo '<input type="hidden" name="num" value="',$num,'">';
                        echo '</form>';
                        echo '<a href="g-2-1-4-1.php?id=',$_POST['s_id'],'">';
                            echo '<button type="submit" class="no">いいえ</button>';
                        echo '</a>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>