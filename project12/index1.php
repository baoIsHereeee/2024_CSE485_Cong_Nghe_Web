<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php
        $navItems = [
            "GIỚI THIỆU",
            "TIN TỨC & THÔNG BÁO",
            "TUYỂN SINH",
            "ĐÀO TẠO",
            "NGHIÊN CỨU",
            "ĐỐI NGOOẠI",
            "VĂN BẢN",
            "SINH VIÊN",
            "LIÊN HỆ"
        ];

        echo '<nav><ul>';
        echo "<li><i class='fas fa-home'></i></li>";
        foreach ($navItems as $item) {
            echo "<li>$item</li>";
        }
        echo '</ul></nav>';
    ?>
</body>
</html>
