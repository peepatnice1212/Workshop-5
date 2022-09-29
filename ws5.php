<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
$stmt = $pdo->prepare("SELECT * FROM member");
if (!empty($_GET)) {
    $stmt = $pdo->prepare("SELECT * FROM member where username = ?" );
    $value = $_GET["username"]; 
    $stmt->bindParam(1, $value); 
    $stmt->execute(); ?>
    <?php while ($row = $stmt->fetch()) : ?>
    ชื่อสมาชิก : <?=$row ["name"]?><br>
    ที่อยู่ : <?=$row ["address"]?><br>
    อีเมล์ : <?=$row ["email"]?><br>
    <br>
    <img src='member_photo/<?=$row["username"]?>.jpg' width="100">
    <hr>
    <?php endwhile; ?>
    <?php
}else
$stmt->execute();
?>
    <?php while ($row = $stmt->fetch()) : ?>
    ชื่อสมาชิก : <?=$row ["name"]?><br>
    <br>
    <a href="./detail.php?username=<?=$row["username"]?>">
        <img src='member_photo/<?=$row["username"]?>.jpg' width="100">
    </a>
    <hr>
    <?php endwhile; ?>
</body>

</html>