<?php
function connectBD(){
	$con=mysqli_connect('localhost','root','','class_blog');
	return $con;
}
?>