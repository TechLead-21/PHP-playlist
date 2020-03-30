<?php


//!        Database connectivity and insertion
		   
		   $server = "localhost";
		   $user = "root";
		   $pass = "";
		   $dbname = "php";
		   
		   $conn = mysqli_connect($server , $user , $pass , $dbname);
		   
		   if(!$conn){
			   
			   die("connection failed". mysqli_connect_error());
		   }
		  
		   $sql = "INSERT INTO data(Username, Password, Gender, EmailId)
		           values ('$username', '$password', '$gen' , '$email')";
				   
			if( mysqli_query($conn , $sql)){
				
				    echo "<script> alert('Data saved successfully!')</script> ";
			}else{
				
				   echo "Something isn't Right".$sql."<br>".mysqli_error($conn);
			}
			
			 mysqli_close($conn);

?>