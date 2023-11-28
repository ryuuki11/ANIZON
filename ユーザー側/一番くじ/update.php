<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/update.css">
    <title>お届け先変更</title>
</head>
<body>
    <p>○○さんの支払い情報</p>
    <div class="place">ご住所</div>
        <div>郵便番号を入力してください</div>
        <div class="button">
            <input class="post" type="text" id="zipcode" maxlength="8" name="post" value="',$post,'">
            <input class="button" type="button" value="自動入力">
        </div>
        <div>都道府県</div>
        <input type="text" name="prefecture" value="',$address,'">
        <div>市区町村、番地</div>
        <input type="text" name="city" value="',$city,'">
        <div>マンション名、号室等</div>
        <input type="text" name="apart" value="',$apart,'">
        <div>メールアドレスを入力してください</div>
        <input type="text" name="mail" value="',$mail,'">
        <div>電話番号</div>
        <input type="text" name="number" value="',$number,'">

    <div class="push"><button>登録</button></div>
            
        
</body>
</html>