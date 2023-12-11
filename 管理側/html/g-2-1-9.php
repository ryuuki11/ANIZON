<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-9.css" />
    <title>商品削除確認画面</title>
</head>
<body>
    <h1>anizon</h1><br>
    <div class="all">
        <div class="table">
            <?php
                $s_name=$s_id=$category=$price=$stock=$pass=$explain='';
                $_SESSION['Shohin']['s_name']=$_POST['s_name'];
                $_SESSION['Shohin']['s_id']=$_POST['s_id'];
                $_SESSION['Shohin']['category']=$_POST['category'];
                $_SESSION['Shohin']['price']=$_POST['price'];
                $_SESSION['Shohin']['stock']=$_POST['stock'];
                $_SESSION['Shohin']['pass']=$_POST['pass'];
                $_SESSION['Shohin']['explain']=$_POST['explain'];

        
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td class="td3">',$_POST['s_name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td class="td3">',$_POST['s_id'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>値段</p></td><td class="td3">',$_POST['price'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td class="td3">',$_POST['stock'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品説明</p></td><td class="td3">',$_POST['explain'],'</td>
                </tr><br>';
                
        echo '</table>';
        echo '</div>';
        $result='';
        if(isset($_POST['sakujo'])){
            $result="この内容を削除しますか?";
        }else if(isset($_POST['kousin'])){
            $result="この内容に更新しますか?";
        }
        echo '<div class="delete">';
        echo '<h2>',$result,'</h2><br>';
            echo '<div class="brn">';
                        echo '<form action="g-2-1-1.php" method="post">';
                            echo '<button type="submit"class="yes">はい</button>';
                        echo '</form>';
                        echo '<a href="g-2-1-3.php?id=',$_POST['s_id'],'">';
                            echo '<button type="submit" class="no">いいえ</button>';
                        echo '</a>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>