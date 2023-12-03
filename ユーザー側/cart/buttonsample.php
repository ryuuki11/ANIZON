
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>anizon</title>
</head>
<body>

<?php

            for($i=0;$i<4;$i++){
                echo '<input type="checkbox" class="checkbox 1" id="c1" name="check[]">';
                echo '<hr>';
                echo '<input type="checkbox" class="checkbox 1" id="c1" name="check[]">';
                echo '<hr>';
                echo '<input type="checkbox" class="checkbox 1" id="c1" name="check[]">';
                echo '<hr>';
            }
            
            
  ?>

<div class="select">
    <button onClick="checkAll()">全選択</button>
    <button onClick="uncheckAll()">選択解除</button>
</div>


<script>
const boxes = document.getElementsByName('check[]');

function uncheckAll() {
    for(i=0;i<boxes.length;i++){
        boxes[i].checked = false;
    }
}

function checkAll() {

    for(i=0;i<boxes.length;i++){
        boxes[i].checked = true;
    }
}
</script>

</body>
</html>