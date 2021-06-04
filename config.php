<?php

// create connection

$conn = mysqli_connect("localhost", "root", "", "img_crud_ajax");

// if ($conn) {
//     echo "connection successfully";
// }

// create table

$student_table = "CREATE TABLE students(
    std_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    std_name VARCHAR (255) NOT NULL,
    std_age INT (11) NOT NULL,
    std_img VARCHAR (255) NOT NULL
)";

// run the query

mysqli_query($conn, $student_table);