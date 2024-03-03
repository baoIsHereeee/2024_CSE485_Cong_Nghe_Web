<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>
    <div class="product-list">
        <?php
        include './assets/database.php';

        // Lấy số trang hiện tại từ URL, mặc định là trang 1
        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

        // Tính tổng số trang dựa trên số lượng sản phẩm và số lượng mục trên mỗi trang
        $totalPages = ceil(count($products) / $itemsPerPage);

        // Xác định vị trí bắt đầu và kết thúc của mảng sản phẩm cho trang hiện tại
        $startIndex = ($currentPage - 1) * $itemsPerPage;
        $endIndex = min($startIndex + $itemsPerPage - 1, count($products) - 1);

        // Lấy các mục sản phẩm cho trang hiện tại
        $currentPageItems = array_slice($products, $startIndex, $itemsPerPage);

        // Hiển thị các sản phẩm
        foreach ($currentPageItems as $product) : ?>
            <div class="product">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p><strong>Price:</strong> $<?php echo $product['price']; ?></p>
                <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else : ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>