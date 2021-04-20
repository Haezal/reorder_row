<?php 
require('db_config.php');

$id = $_GET['id'];

// get data based on id
$sql = "SELECT * FROM sorting_items where id = $id";
$users = $mysqli->query($sql);
$user = $users->fetch_assoc();

// Reposition ordering number
$position_order = $user['position_order'];
$sql = "update sorting_items set position_order = position_order - 1 where position_order > $position_order";
$mysqli->query($sql);

// delete data
$sqlUpdate = "UPDATE sorting_items set is_deleted = 1, position_order = 0 where id = $id";
$mysqli->query($sqlUpdate);

// redirect
header('Location: index.php');
?>