<?php
		
		$localhost="localhost";
		$username="root";
		$password="";
		$database="86";
		
		$con = mysqli_connect($localhost,$username,$password,$database);
		       //$con =new mysqli('localhost','root','','86');
		if($con)
		{
			echo "connected";
		}
		else
		{
		      echo "not connected";
		}
?>