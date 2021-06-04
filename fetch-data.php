<?php

include "config.php";

$sql = "SELECT * FROM students";
$run_sql = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($run_sql)) {
    $output .= "
    <table class='table'>
    <tr class='bg-dark text-white'>
        <td>Student Id</td>
        <td>Student Name</td>
        <td>Student Age</td>
        <td>Student Image</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>";
    while ($row = mysqli_fetch_assoc($run_sql)) {
        $output .= "<tr>
        <td>{$row["std_id"]}</td>
        <td>{$row["std_name"]}</td>
        <td>{$row["std_age"]}</td>
        <td> <img src='upload/{$row["std_img"]}' style='width:100px;height:100px;' alt=''> </td>
        <td><button type='button' id='update-data' class='btn btn-primary' data-id='{$row["std_id"]}' data-toggle='modal' data-target='#modelId2'>
       Edit
    </button></td>
        <td><button type='button' id='delete-data' class='btn btn-danger' data-id='{$row["std_id"]}'>
        Delete
     </button></td>
    </tr>";
    }
    $output .= "</table>";

    echo $output;
} else {
    echo "<h1>Not Record Found</h1>";
}