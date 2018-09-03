<?php
if(isset($_GET['menu'])){
	$menu = $_GET['menu'];
	include_once "lib/config.php";
	$ms = new internal;
	include_once "views/$menu.php";
}