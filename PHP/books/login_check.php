<?php 

ob_start();
session_start();

if(!isset($_SESSION['id']) || $_SESSION['id'] == ''){
    header('location: login.php');
}

include '../crud/db.php';

$sql = "SELECT * FROM book WHERE id = ".$_SESSION['id'];
$result = $db1->query($sql);


//print_r($_SESSION);

?>