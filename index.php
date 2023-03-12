<?php
 include_once 'db-inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandhelFriendly" content="true">
  <meta charset="utf-8">
  <title>Joe's Coaches</title>
  <link rel="stylesheet" href="stylesheet2.css">
</head>

<body>

  <div class="nav-wrapper">

    <nav>

      <ul class="nav-list">

        <img id="icon" src="img/icon2.jpg" alt="">
        <li class="nav-item"><a href="index.html">Account</a></li>
        <li class="nav-item"><a href="login.php">Logout</a></li>

      </ul>

    </nav>

  </div>

  <div class="employees">

    <h2>Employees</h2>

    <div class="employee-list">

      <?php
       $sqlStatement = 'select employees.firstName,employees.lastName,employees.jobTitle,departments.departmentName,employees.email,employees.salary from employees join departments on employees.departmentCode=departments.departmentCode;';

       $queryResult = mysqli_query($dbConnection,$sqlStatement);
       $resultCheck = mysqli_num_rows($queryResult);

       $currency = '$';

       if($resultCheck>0) {
         while($row=mysqli_fetch_assoc($queryResult)) {
           echo "<li>

             <div class='employee-card' id='employee1'>

               <img class='user-img' src='img/default.jpg' alt=''>
               <span>

                 <div class='employment-details' id='employee1-details'>

                   <span class='name-format'>".$row['firstName']."</span>
                   <span class='name-format'>".$row['lastName']."</span>
                   <br>
                   <span>".$row['jobTitle']."</span>
                   <br>
                   <span>".$row['departmentName']."</span>
                   <br>
                   <span>".$row['email']."</span>
                   <br>
                   <span>".$currency.$row['salary']."</span>

                 </div>

               </span>

             </div>

           </li>";
         }
       }
       ?>

    </div>

  </div>


  <div class="interviews">

    <h2>Upcoming Interviews</h2>

    <?php
     $sqlStatement = 'select departments.departmentName,interviews.role from interviews join departments on departments.departmentCode=interviews.departmentCode;';

     $queryResult = mysqli_query($dbConnection,$sqlStatement);
     $resultcheck = mysqli_num_rows($queryResult);

     if($resultCheck>0) {
       while($row=mysqli_fetch_assoc($queryResult)) {
         echo "<li>

           <div class='list-item'>

             <h3>".$row['departmentName']."</h3>
             <p>".$row['role']."</p>
             <button class='accept-btn' type='button' name='aButton'>Accept</button>
             <button class='reject-btn' type='button' name='rButton'>Reject</button>

           </div>

         </li>";
       }
     }
     ?>

  </div>

  <!-- MODAL -->
  <div id="employeeModal" class="modal">

    <div class="modal-content">

      <header class="modal-header">

        <div class="modal-header-content">

          <span>Add employee</span>

        </div>

      </header>

      <div class="modal-container">

        <form action="submit.php" method="POST">
          <label for="empnum">Employee Number</label>
          <input type="text" name="employee-number" id="name">
          <br>
          <label for="fname">First Name</label>
          <input type="text" name="first-name" id="name">
          <br>
          <label for="fname">Last Name</label>
          <input type="text" name="last-name" id="surname">
          <br>
          <label for="fname">Position</label>
          <input type="text" name="position" id="position">
          <br>
          <label for="fname">Department</label>
          <input type="text" name="department" id="department">
          <br>
          <label for="fname">Email</label>
          <input type="text" name="email" id="email">
          <br>
          <label for="fname">Salary</label>
          <input type="text" name="salary" id="salary">
          <br>

          <button id="confirmBtn" type="submit" name="button" onclick="addEmployee()">Confirm</button>
          <button id="cancelBtn" type="button" name="button" onclick="cancelProcess()">Cancel</button>

        </form>

      </div>

      <footer class="modal-footer"></footer>

    </div>

  </div>


  <div id="interviewModal" class="modal">

    <div class="modal-content">

      <header class="modal-header">

        <div class="modal-header-content">

          <span>Add interview</span>

        </div>

      </header>

      <div class="modal-container">

        <form action="submit2.php" method="POST">

          <label for="fname">Department Code</label>
          <input type="text" name="departmentCode" id="int-department">
          <br>
          <label for="fname">Position</label>
          <input type="text" name="position" id="int-position">
          <br>

          <button id="confirmIntBtn" type="submit" name="button" onclick="addInterview()">Confirm</button>
          <button id="cancelBtn" type="button" name="button" onclick="cancelProcess()">Cancel</button>

        </form>

      </div>

      <footer class="modal-footer"></footer>

    </div>

  </div>

  <button class="btn" type="button" name="button" onclick="showAddIntModal()">Add Interview</button>
  <button class="btn" type="button" name="button" onclick="showAddEmpModal()">Add Employee</button>

  <script type="text/javascript" src="main2.js">

  </script>
  <script src="main.js">

  </script>

</body>

</html>
