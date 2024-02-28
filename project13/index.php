<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link href="database.php" >
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="container">
    <?php include "database.php";
    foreach ($courses as $course) {
        echo '<div class="col-sm-4">';
        echo '<div class="course">';
        echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p>Học phí: ' . $course['fee'] . '</p>';
        echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>