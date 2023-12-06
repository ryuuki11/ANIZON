<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
 
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
                $id=$rank=$category=$name=$explain=$pass='';
                    $_SESSION['Shohin']['id']=$_POST['id'];
                    $_SESSION['Shohin']['rank']=$_POST['rank'];
                    $_SESSION['Shohin']['category']=$_POST['category'];
                    $_SESSION['Shohin']['name']=$_POST['name'];
                    $_SESSION['Shohin']['explain']=$_POST['explain'];
                    $_SESSION['Shohin']['pass']=$_POST['pass'];
           
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td class="td3">',$_POST['id'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>ランク</p></td><td class="td3">',$_POST['rank'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td class="td3">',$_POST['name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>説明</p></td><td class="td3">',$_POST['explain'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['pass'],'</td>
                </tr><br>';
               
        echo '</table>';
            $result="";
            if(isset($_POST['toroku'])){
                $result="登録";
            }else if(isset($_POST['Ktoroku'])){
                $result="登録";
            }else if(isset($_POST['sakujo'])){
                $result="削除";
            }else if(isset($_POST['Psakujo'])){
                $result="削除";
            }else if(isset($_POST['kousin'])){
                $result="更新";
            }else if(isset($_POST['Pkousin'])){
                $result="更新";
            }
        echo '</div>';
        echo '<div class="delete">';
        echo '<h2>この内容で',$result,'しますか?</h2><br>';
        ?>
       
                <div class="brn">
                        <form action="g-2-1-5-2.php" method="post">
                            <button type="submit" class="yes">はい</button>
                        </form>
 
                        <form action="g-2-1-5.php" method="post">
                            <button type="submit" class="no">いいえ</button>
                        </form>
                </div>
        </div>
    </div>
</body>
</html>