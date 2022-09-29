<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$value = $_GET["username"]; 
$stmt->bindParam(1, $value);
$stmt->execute();
while ($row = $stmt->fetch()) :
?>
    ชื่อสมาชิก : <?=$row ["name"]?><br>
    ที่อยู่ : <?=$row ["address"]?><br>
    เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
    อีเมล์ : <?=$row ["email"]?><br>
    <br>
    <img src='member_photo/<?=$row["username"]?>.jpg' width="100">
    <hr>
    <?php endwhile; ?>
</body>

</html>