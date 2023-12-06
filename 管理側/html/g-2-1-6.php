<?php session_start(); ?>
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
            <?php
            if (empty($_POST['p_name']) or empty($_POST['p_id']) or empty($_POST['rank']) or empty($_POST['setumei']) or empty($_POST['category']) or empty($_POST['image'])) {
                echo '<p class="null">未入力の項目があります。</p>';
                echo '<form action="g-2-1-5.php" class="back1">';
                        echo '<button type="submit">戻る</button>';
                echo '</form>';
            }else{
                $p_name=$rank=$setumei=$p_id=$category=$image='';
                    $_SESSION['Prize']['p_name']=$_POST['p_name'];
                    $_SESSION['Prize']['p_id']=$_POST['p_id'];
                    $_SESSION['Prize']['rank']=$_POST['rank'];
                    $_SESSION['Prize']['setumei']=$_POST['setumei'];
                    $_SESSION['Prize']['category']=$_POST['category'];
                    $_SESSION['Prize']['image']=$_POST['image'];

            echo '<div class="all">';
            echo '<div class="table">';
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
        echo '<div class="delete">';
        echo '<h2>この内容で登録しますか?</h2><br>';
            

            echo '<div class="brn">';
                        echo '<form action="g-2-1-6-1.php" method="post">';
                            echo '<button type="submit" class="yes">はい</button>';
                        echo '</form>';
                        echo '<form action="g-2-1-5.php" method="post">';
                            echo '<button type="submit" class="no">いいえ</button>';
                        echo '</form>';
            echo '</div>';
        echo '</div>';
            }
    echo '</div>';
    ?>
</body>
</html>