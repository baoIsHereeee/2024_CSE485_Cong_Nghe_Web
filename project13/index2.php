<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="upcoming-courses">
        <div class="vertical-line"></div>
        <h1>KHÓA HỌC SẮP KHAI GIẢNG</h1>
    </div>
    <div class="container">
        <?php
        $courses = [
            [
                'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
                'description' => 'Chương trình đào tạo chuẩn quốc te và toàn dien. Phù hợp với học sinh
            tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyen nghiệp',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm',
                'image' => 'img/anh1.jpg',
            ],
            [
                'title' => 'LẬP TRÌNH WEB FULLSTACK',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc 
                người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn 
                chỉnh sau khóa học',
                'fee' => '15% học phí',
                'start_date' => '2/2024',
                'duration' => '6 tháng',
                'image' => 'img/anh2.jpg',
            ],
            [
                'title' => 'LẬP TRÌNH JAVA FULLSTACK',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc 
                người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn 
                chỉnh sau khóa học',
                'fee' => '15% học phí',
                'start_date' => '2/2024',
                'duration' => '236 giờ',
                'image' => 'img/anh3.jpg',
            ],
            [
                'title' => 'LẬP TRÌNH PHP & LARAVEL',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc 
                người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn 
                chỉnh sau khóa học',
                'fee' => '9.600.000 VNĐ',
                'start_date' => '2/2024',
                'duration' => '36 giờ',
                'image' => 'img/anh4.jpg',
            ],
            [
                'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc 
                người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn 
                chỉnh sau khóa học',
                'fee' => '6.000.000 VNĐ',
                'start_date' => '2/2024',
                'duration' => '40 giờ',
                'image' => 'img/anh5.jpg',
            ],
            [
                'title' => 'LẬP TRÌNH SQL SERVER',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc 
                người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn 
                chỉnh sau khóa học',
                'fee' => '4.500.000 VNĐ',
                'start_date' => '2/2024',
                'duration' => '30 giờ',
                'image' => 'img/anh6.jpg',
            ],

        ];
        foreach ($courses as $course) {
            echo '<div class="course">';
            if ($course['image']) {
                echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">';
            }
            echo '<h2>'. $course['title']. '</h2>';
            echo '<p>'. $course['description']. '</p>';
            //echo '<p class="fee"> Học phí: '. $course['fee']. '</p>';
            if ($course['fee']) {
                echo '<p class="icon fee"><i class="fas fa-gift"></i> Học phí: '. $course['fee']. '</p>';
            }
            // echo '<p class="opening_school"> Khai giảng: '. $course['start_date']. '</p>';
            if ($course['start_date']) {
                echo '<p class="icon start_date"><i class="far fa-clock"></i> Khai giảng: '. $course['start_date']. '</p>';
            }
            //echo '<p class="duration"> Thời lượng: '. $course['duration']. '</p>';
            if ($course['duration']) {
                echo '<p class="icon duration"><i class="fas fa-bookmark"></i> Thời lượng: '. $course['duration']. '</p>';
            }
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>