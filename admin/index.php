<?php
session_start();
define('guvenlik', True);


if (isset($_SESSION['giris'])){
	
	
	include 'pages/header.php';
	include 'pages/navs.php';
	include 'pages/navbar.php';

	yonlendir();
	include 'pages/footer.php';
}
else
{

	include 'pages/login.php';
}
