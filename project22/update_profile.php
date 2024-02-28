<!-- update_profile php -->
<?php 
    include "database.php";
    session_start();
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $targetDir = "uploads/";
    echo $user['avatar'];

    if(!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if(!in_array($fileInfo['extension'], $allowedExtensions)){
            $error[] = "Only JPEG, PNG, JPG files!";
        }
        else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;

            if(move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)){
                $_SESSION['avatar'] = $targetFile;
            }
            else {
                $error[] = "Failed to upload file!";
            }
        }
    }

    if (empty($errors)) {
        header("Location: index.php");
        } else {
            echo "Errors:";
            foreach ($errors as $error) {
            echo "<br> - $error";
            }   
        }
?>