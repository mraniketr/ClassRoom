<?php
$connect=mysqli_connect('localhost','root','','classroom');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$email=$_POST['val'];

//Execute the query

mysqli_query($connect,"INSERT INTO tablenames (Question)
		        VALUES ('$email')");

header("Location: teacher.html");

?>
