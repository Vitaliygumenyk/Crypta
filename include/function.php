<?php
include "config.php";
function get_menu (){
    global $conn;
    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    $menus = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $menus;
}
$menus = get_menu($conn);