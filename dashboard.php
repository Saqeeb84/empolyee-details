<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world! <?php $_SESSION['username']?></title>
    <link href="http://localserver/emp/bootstrap-5.2.0-dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="http://localserver/emp/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
      h1{background-color:#5bacfc; color:white; font-size:50px; font-family:"gill sans";}
      body{background-color:#faf8ed;}
      h2{font-family:"arial"; font-size:30px;}
      table{border-radius:20px;}
      </style>
</head>
<body>
    <center>
    
    <nav class="navbar navbar-expand-lg  bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localserver/emp/dashboard.php"><img src="gmr.jpg" width="150px" height="40px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://localserver/emp/dashboard.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <b>Home</b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localserver/emp/empolyee.html">Empolyee</a></li>
                      <li><a class="dropdown-item" href="http://localserver/emp/department.html">Department</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="http://localserver/emp/leaveform.html">Leave-Application</a></li></ul>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>Empolyee</b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="http://localserver/emp/empolyee.html">Emppolyee-Form</a></li>
                          <li><a class="dropdown-item" href="http://localserver/emp/empolyeedetails.php">Empolyee-details</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li></ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Departments</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localserver/emp/department.html">Department-Form</a></li>
                  <li><a class="dropdown-item" href="http://localserver/emp/departmentdetails.php">Department-details</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul><li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <b>Projects</b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="http://localserver/emp/projects.php">Projects-details</a></li>
                    <li><a class="dropdown-item" href="">...</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                
              </li></li></li></ul>
            
        
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
            <form class="d-flex" role="search">
                
                <button class="btn btn-danger" type="submit">
                  <a href="http://localserver/emp/login.php">LOG-OUT</a></button>
              </form>
           
          </div>
        </div>
      </nav>

      <div class="jumbotron">
        <h1 class="display-4">Hello,GMR Empolyee`s</h1>
       
        <p class="lead"><u><strong>WELCOME :-[<?php echo $_SESSION['username'];?>]</strong></u>
         " “A diamond is forever.” ...
        “There are some things money can't buy. ...
           “Do what you can't.”</p>
        <hr class="my-4">
        <p class="bg-success"><marquee><b>Congratulation Last month BONUS has been credited to
            there respective Bank Account !! </b></marquee></p>
        <p class="bg-danger"><marquee><b>Empolyee`s are informed that update :BANK DETAILS 
          BEFORE 31st. !</b></marquee></p>
        <p class="lead">
          
        </p>
      </div>
      <table width="100%">
        
        <tr align="center">
            <td><div class="container">
                <h3>Empolyee Registration</h3>
                <div class="panel panel-default">
                    <img  src="emp.jpg" width="200px" height="200px">
                  <div class="panel-body"><br>
                    <button type="button" class="btn btn-warning">
                        <a href="http://localserver/emp/empolyee.html"><b>Emppolyee-Form</b></a></button></div>
                </div>
              </div></td>
              <td><div class="container">
                <h3>Employee Leave-Application</h3>
                <img src="leave.png" width="200px" height="200px">
                <div class="panel panel-default">
                  <div class="panel-body"><br>
                    <button type="button" class="btn btn-warning">
                        <a href="http://localserver/emp/leaveform.html"><b>Leave-form</b></a></button></div>
                </div>
              </div></td>
              <td><div class="container">
                <h3>Dept-Registration</h3>
                <img src="dept.png" width="200px" height="200px">
                <div class="panel panel-default">
                  <div class="panel-body"><br>
                    <button type="button" class="btn btn-warning">
                        <a href="http://localserver/emp/department.html"><b>Department-form</b></a></button></div>
                </div>
              </div></td>
        </tr>
      </table>
      <hr size="5" color="green">
</body>
</html>