<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name=filter_input(INPUT_POST,"name");
$errmsg = isset($_POST['senendbtn']) && empty($_POST['name'])?"名前を入力してください":"";


echo '<form method="post">';
echo '<p>名前</p><input type="text" name="name">';
echo '<p><input type="submit" name="senendbtn" value="送信"></p>';
echo '</form>';
echo '<div class="hoge">',$errmsg,'</div>';
?>
</body>
</html>