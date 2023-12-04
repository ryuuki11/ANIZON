<?php
session_start();

if (isset($_SESSION['member'])) {
    $pdo = new PDO('mysql:host=mysql219.phy.lolipop.lan;dbname=LAA1518095-anizon;charset=utf8', 'LAA1518095', 'Pass0809');

    // Select data from Cart table based on c_id
    $sql_select = $pdo->prepare('SELECT * FROM Cart WHERE c_id = ?');
    $sql_select->execute([$_POST['delete']]);
    
    // Fetch the result
    $row = $sql_select->fetch(PDO::FETCH_ASSOC);

    // Check if the row is found
    if ($row) {
        $m_id = $row['m_id'];
        $s_id = $row['s_id'];

        // Delete the row from Cart table based on c_id, m_id, and s_id
        $sql_delete = $pdo->prepare('DELETE FROM Cart WHERE c_id = ? AND m_id = ? AND s_id = ?');
        $sql_delete->execute([$_POST['delete'], $m_id, $s_id]);

        echo 'カートから商品を削除しました。';
        echo '<hr>';
    } else {
        echo '指定された商品が見つかりません。';
    }
} else {
    echo 'カートから商品を削除するには、ログインしてください。';
}
?>