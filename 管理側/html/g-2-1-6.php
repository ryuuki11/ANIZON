<?php session_start() ?>
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
                $p_name=$_rank=$setumei=$p_id=$category=$image='';
                    $_SESSION['Prieze']['p_name']=$_POST['p_name'];
                    $_SESSION['Prieze']['rank']=$_POST['rank'];
                    $_SESSION['Prieze']['setumei']=$_POST['setumei'];
                    $_SESSION['Prieze']['p_id']=$_POST['p_id'];
                    $_SESSION['Prieze']['category']=$_POST['category'];
                    $_SESSION['Prieze']['image']=$_POST['image'];

            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>景品名</p></td><td class="td3">',$_POST['p_name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>ランク</p></td><td class="td3">',$_POST['rank'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>景品説明</p></td><td class="td3">',$_POST['setumei'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>景品ID</p></td><td class="td3">',$_POST['p_id'],'</td>
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
        ?>
            <div class="brn">
                        <form action="g-1-1-2.php" method="post">
                            <button type="submit" class="yes">はい</button>
                        </form>
                        <form action="g-2-1-2.php" method="post">
                            <button type="submit" class="no">いいえ</button>
                        </form>
            </div>
        </div>
    </div>
</body>
</html>