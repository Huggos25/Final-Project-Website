<?php

// get id to delete
$id = filter_input(INPUT_GET, 'id');
echo $id;
// connect to mysql
$connect = mysqli_connect("localhost", "root", "", "vintagemuseu");

// mysql delete query 
$query = "DELETE FROM admin WHERE id = '$id'";

$result = mysqli_query($connect, $query);

if ($connect->affected_rows > 0) {
    echo "O registo com id = $id foi eliminado!";
} else {
    echo "'$id' Data Not Deleted";
}
mysqli_close($connect);
?>