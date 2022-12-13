<?php

$conn= new mysqli('localhost','pizza','pizza','pizza');

echo json_encode(get_pizzas());


function get_pizzas(){
    global $conn;
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $pizzas;
}



