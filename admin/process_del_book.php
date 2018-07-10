<?php
require('includes/config.php');

			$id=$_GET['b_id'];
			$query="DELETE FROM `book` WHERE `b_id`=$id";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_book.php.php");

?>