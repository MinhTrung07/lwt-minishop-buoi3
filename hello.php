<?php
// Phần PHP: chạy trên máy chủ, người dùng không nhìn thấy
$shop = 'MiniShop';
$hour = (int) date('G');
$greeting = $hour < 12 ? 'Chào buổi sáng' : 'Xin chào';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>PHP đầu tiên</title>
</head>
<body>
    <h1><?= $greeting ?> từ <?= $shop ?></h1>
    <p>Trang này được tạo lúc <?= date('H:i:s') ?>.</p>
</body>
</html>