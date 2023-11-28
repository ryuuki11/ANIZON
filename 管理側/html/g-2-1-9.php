<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-9.css" />
    <title>削除確認画面</title>
</head>
<body>
    <h1>anizon</h1><br>
    <div class="all">
        <div class="table">
            <?php
                $name=$category=$price=$image=$explain='';
                $_SESSION['Shohin']['name']=$_POST['name'];
                $_SESSION['Shohin']['category']=$_POST['category'];
                $_SESSION['Shohin']['price']=$_POST['price'];
                $_SESSION['Shohin']['stock']=$_POST['pass'];
                $_SESSION['Shohin']['explain']=$_POST['explain'];

            $both="";
            $both2="";
            if(isset($_POST['Psakujo'])){
                $both="ランク";
                $both2="景品ID";
            }else if(isset($_POST['sakujo'])){
                $both="カテゴリー";
                $both2="値段";
            }
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td class="td3">',$_POST['p_name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>',$both,'</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>説明</p></td><td class="td3">',$_POST['explain'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>',$both2,'</p></td><td class="td3">',$_POST['price'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td class="td3">',$_POST['stock'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['pass'],'</td>
                </tr><br>';
                
        </table>
        </div>
        <div class="delete">
        <h2>この内容で削除しますか?</h2><br>
            <div class="brn">
                        <form action="g-1-1-2.php" method="post">
                            <button type="submit"class="yes">はい</button>
                        </form>
                        <form action="g-2-1-2.php" method="post">
                            <button type="submit" class="no">いいえ</button>
                        </form>
            </div>
        </div>
    </div>
</body>
</html>