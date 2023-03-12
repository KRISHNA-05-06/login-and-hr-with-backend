<?php
 include_once 'db-inc.php';

 $employeeNumber=$_POST["employee-number"];
 $firstName=$_POST["first-name"];
 $lastName=$_POST["last-name"];
 $position=$_POST["position"];
 $department=$_POST["department"];
 $email=$_POST["email"];
 $salary=$_POST["salary"];

 $sqlStatement = "INSERT INTO employees (employeeNumber,firstName,lastName,jobTitle,departmentCode,email,salary) values ('$employeeNumber','$firstName','$lastName','$position','$department','$email','$salary')";

 mysqli_query($dbConnection,$sqlStatement);

 header("Location:index.php?submission=success");

 $departmentCode=$_POST['departmentCode'];
 $role=$_POST['position'];
 $status='pending';

 $sqlStatement = "INSERT INTO interviews (departmentCode,role,status) values ('$departmentCode','$role','$status');";

 mysqli_query($dbConnection,$sqlStatement);

 header("Location:index.php?submission=success");
 ?>
