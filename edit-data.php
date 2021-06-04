<?php

include "config.php";

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM students WHERE std_id={$id}";
    $run_sql = mysqli_query($conn, $sql);
    $output = "";
    if (mysqli_num_rows($run_sql)) {
        while ($row = mysqli_fetch_assoc($run_sql)) {
            $output .= "
        <div class='form-group'>
            <label for=''>Enter your Name</label>
            <input type='text' name='edit_name' value='{$row['std_name']}' id='edit_name' class='form-control' placeholder='Name'>
            <input type='hidden' name='edit_id' value='{$row['std_id']}' id='edit_id' class='form-control' placeholder='Name'>

        </div>
        <div class='form-group'>
            <label for=''>Enter your Age</label>
            <input type='number' name='edit_age' value='{$row['std_age']}' id='edit_age' class='form-control' placeholder='Age'>

        </div>
        <div class='form-group'>
            <label for=''>Enter your Image</label> <br>
            <img src='upload/{$row['std_img']}' style='width:100px;height: 100px; ' alt=''>
            <input type='hidden' name='old_image' value='{$row['std_img']}' id='old_image' class='form-control' placeholder='Image'>

            <input type='file' name='new_image'  id='new_image' class='form-control' placeholder='Image'>
        </div>";
        }
        echo $output;
    }
}