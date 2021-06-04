<?php

include "config.php";
if (!empty($_POST["edit_name"])) {
    $id = $_POST["edit_id"];
    $name = $_POST["edit_name"];
    $age = $_POST["edit_age"];
    $old_image = $_POST["old_image"];
    $new_image = $_FILES["new_image"]["name"];
    $new_tmp = $_FILES["new_image"]["tmp_name"];
    $new_size = $_FILES["new_image"]["size"];
    $validation = array('jpg', 'jpeg', 'png');

    if ($new_image != "") {
        $file_name = $new_image;
    } else {
        $file_name = $old_image;
    }
    $file_extention = pathinfo($file_name, PATHINFO_EXTENSION);
    if (!in_array($file_extention, $validation)) {
        echo 2;
    }


    if ($new_size > 2000000) {
        echo 1;
    } else {
        $file_name = rand() . '-' . $new_image;
        // echo $new_image_name;
        $path = "upload/" . $file_name;
        // echo $path;

        $sql = "UPDATE students SET std_name='{$name}',std_age='{$age}',std_img='{$file_name}' WHERE std_id='{$id}'";

        if (mysqli_query($conn, $sql)) {
            if ($new_image != "") {
                move_uploaded_file($new_tmp, $path);
                unlink('upload/' . $old_image);
            }
            echo 3;
        } else {
            echo 0;
        }
    }
}