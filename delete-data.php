<?php

include "config.php";

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "SELECT * FROM students WHERE std_id='{$id}'";
    $run_sql = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($run_sql);
    unlink("upload/" . $row["std_img"]);

    $sql2 = "DELETE FROM students WHERE std_id='{$id}'";
    $run_sql2 = mysqli_query($conn, $sql2);
    if ($run_sql2) {
        echo 1;
    } else {
        echo 0;
    }
}