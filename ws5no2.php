<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) :
?>
    ชื่อสมาชิก : <?=$row ["name"]?><br>
    <br>
    <a href="./ws5detaillink.php?username=<?=$row["username"]?>">
        <img src='member_photo/<?=$row["username"]?>.jpg' width="100">
    </a>
    <hr>
    <?php endwhile; ?>
</body>

</html>