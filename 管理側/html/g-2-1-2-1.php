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
                $s_name=$s_id=$category=$setumei=$price=$stock=$image='';
                    $_SESSION['Shohin']['s_name']=$_POST['name'];
                    $_SESSION['Shohin']['s_id']=$_POST['id'];
                    $_SESSION['Shohin']['category']=$_POST['category'];
                    $_SESSION['Shohin']['setumei']=$_POST['explain'];
                    $_SESSION['Shohin']['price']=$_POST['price'];
                    $_SESSION['Shohin']['stock']=$_POST['stock'];
                    $_SESSION['Shohin']['image']=$_POST['pass'];

            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td class="td3">',$_POST['name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td class="td3">',$_POST['id'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品説明</p></td><td class="td3">',$_POST['explain'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>値段</p></td><td class="td3">',$_POST['price'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td class="td3">',$_POST['stock'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['pass'],'</td>
                </tr><br>';
                
        echo '</table>';
    
        echo '</div>';
        echo '<div class="delete">';
        echo '<h2>この内容で登録しますか?</h2><br>';
            echo '<div class="brn">';
                        echo '<form action="g-2-1-1.php" method="post">';
                            echo '<button type="submit" class="yes">はい</button>';
                        echo '</form>';
                        echo '<form action="g-2-1-2.php" method="post">';
                            echo '<button type="submit" class="no">いいえ</button>';
                        echo '</form>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>