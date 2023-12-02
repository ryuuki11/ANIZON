   <!DOCTYPE html>
   <html lang="ja">
       <head>
   
       <meta charset="UTF=8">
       <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
       <link rel="stylesheet" href="css/cart4.css">
       <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
       <title>login</title>
   </head>
   <body>
   <?php require '../home/header_sazae.php'; ?>
    <p class="name">○○○○○さんの支払い情報</p>
    <div class="buttn2"><button class="return" type="submit">戻る</button></div>
      
    <div class="place">ご住所</div>
    <div>郵便番号を入力してください</div>
    <div class="button">
    <input class="post" type="text" id="zipcode" maxlength="8" name="post" value="',$post,'">
    <input class="button" type="button" value="自動入力">
    </div>
    <div>都道府県</div>
    <input type="text" size="30" name="prefecture" value="',$address,'">
    <div>市区町村、番地</div>
    <input type="text" size="30" name="city" value="',$city,'">
    <div>マンション名、号室等</div>
    <input type="text" size="30" name="apart" value="',$apart,'">
       
           <div class="buttn"><button class="koushin" type="submit">変更</button></div>

           <?php require '../home/footer.php'; ?>
   </body>
   </html>
   
    