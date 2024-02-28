<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Project 2.1</title>
    <?php include "database.php" ?>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <div class="product-list">
        <?php
        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

        // Tính tổng số trang cần để hiển thị sản phẩm
        $totalPages = ceil(count($products) / $itemsPerPage);

        // Xác định phạm vi sản phẩm hiển thị trên mỗi trang
        $startIndex = ($currentPage - 1) * $itemsPerPage;
        $endIndex = min($startIndex + $itemsPerPage - 1, count($products) - 1);

        // Lấy các mục sản phẩm cho trang hiện tại
        $currentPageItems = array_slice($products, $startIndex, $itemsPerPage); 
        ?>

        <?php foreach ($currentPageItems as $product): ?>
            <div class="product">

                <img class="img" src="<?php echo $product['image']; ?>" />
                Name: <?php echo $product['name']; ?> <br>
                Price: <?php echo $product['price']; ?> <br>
                Description: <?php echo $product['description']; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>

        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
        
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>
</html>