<?php 
	 $link= mysqli_connect("localhost","root","");
     mysqli_select_db($link, "hanu_library_management_system");
     if(! $link ){
        die('Could not connect: ' . mysqli_error());
     }
 ?>


