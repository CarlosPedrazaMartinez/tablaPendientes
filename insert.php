<?php  
 $connect = mysqli_connect("localhost", "id1969859_carlos", "12345", "id1969859_tablapendientes");  
 $sql = "INSERT INTO pendientes(tarea, estatus, fecha) VALUES('".$_POST["tarea"]."', '".$_POST["estatus"]."',  
 '".$_POST["fecha"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>
