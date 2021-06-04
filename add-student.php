<?php

include "config.php";

if (isset($_FILES["image"]["name"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $image = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"];
    $image_size = $_FILES["image"]["size"];
    // echo $image_size;
    // echo $image;

    $extention = array("jpg", "png", "jpeg");
    $validation = pathinfo($image, PATHINFO_EXTENSION);

    if ($image_size > 200000) {
        echo 1;
    } elseif (!in_array($validation, $extention)) {
        echo 2;
    } else {
        $new_image = rand() . '-' . $image;
        $path = "upload/" . $new_image;
        $insert = "INSERT INTO students (std_name,std_age,std_img) VALUES ('{$name}','{$age}','{$new_image}')";
        if (mysqli_query($conn, $insert)) {
            move_uploaded_file($image_tmp, $path);
            echo 3;
        } else {
            echo "error";
        }
    }
}