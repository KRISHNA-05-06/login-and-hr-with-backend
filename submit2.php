<?php
 include_once 'db-inc.php';

 $departmentCode=$_POST['departmentCode'];
 $role=$_POST['position'];
 $status='pending';

 $sqlStatement2 = "INSERT INTO interviews (departmentCode,role,status) values ('$departmentCode','$role','$status');";

 mysqli_query($dbConnection,$sqlStatement2);

 header("Location:index.php?submission=success");

 ?>
