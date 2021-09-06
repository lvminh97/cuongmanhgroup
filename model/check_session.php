<?php 
session_start();
include_once '../controller/database.php';
if (isset($_SESSION['username'])) {
	
} else {
	header('Location: login.php');
}
?>