<?php  
 $connect = mysqli_connect("localhost", "id1969859_carlos", "12345", "id1969859_tablapendientes"); 
 $sql = "DELETE FROM pendientes WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
