<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
      h1{background-color:#003a69; color:white; font-size:50px; font-family:"gill sans";}
      body{background-color:#faf8ed;}
      h2{font-family:"arial"; font-size:30px;}
      table{border-radius:20px;}
      </style>
</head>
<body> <nav class="navbar navbar-expand-lg  bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localserver/emp/dashboard.html#">
        <img src="gmr.jpg" width="150px" height="40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Home</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localserver/emp/empolyee.html">Empolyee</a></li>
                  <li><a class="dropdown-item" href="http://localserver/emp/department.html">Department</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="http://localserver/emp/leaveform.html">Leave-Application</a></li></ul>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <b>Leave-Details</b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localserver/emp/empolyee.html">leave-form</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li></ul>
         
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <form class="d-flex" role="search">
                
          <button class="btn btn-danger" type="submit">
            <a href="http://localserver/emp/login.php">LOG-OUT</a></button>
        </form>
      </div>
    </div>
  </nav>
    <center>
        <form name="f1" action="leave.php" method="post">
          <h1>GMR-TECHNOLOGY</h1>
    <h2>Leave-Application</h2>
    <hr color="blue" size="4">
            <table><tr><td width="250px"> <marquee bgcolor="#3efa96" direction="up"><br>
              Empolyee must  fill all details compulsory with correct information<br>
            </marquee> <br><br>
            <h4><a href="http://localserver/emp/leavedetails.php">LEAVE-DETAILS</a></h4>
                </td><td width="400px">
                <table height="400px">
                <tr align="center">
                    <td>Empolyee-Code:</td><td><input type="text" name="t1" required></td>
                </tr>
                <tr align="center">
                    <td>Department Code:</td><td><input type="text" name="t2" required></td>
                </tr>
                <tr align="center">
                    <td>Department Name:</td><td><input type="text" name="t3" required></td>
                </tr>
                <tr align="center">
                    <td>Leave-Dates start:</td><td><input type="date" name="t4" required></td>
                </tr>
                
                <tr align="center">
                    <td>Leave-Dates End:</td><td><input type="date" name="t5" required></td>
                </tr>
                
                <tr align="center">
                    <td colspan="2">Reason for Leave:<br><textarea name="t6" id="" cols="45" rows="5"></textarea></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="submit" onclick=""></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="reset" value="reset"></td>
                </tr>  
                </table>
            </td><td width="300px"><div class="jumbotron">
                <h2 class="display-4">Hello, world!</h2>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
              </div></td></tr></table>
        </form>
        <hr size=4 color=blue>
        <h3><a href="http://localserver/emp/dashboard.html">Back</a></h3> 
</body>
</html>
<head>
<style>
        h1{background-color:#003a69; color:white; font-size:50px; font-family:"gill sans";}
        body{background-color:#faf8ed;}
        h2{font-family:"arial"; font-size:30px;}
        table{border-radius:20px;}
        </style>
</head>

<?php

$con=mysqli_connect("localhost","root","","college-db");
if(mysqli_connect_errno())
{echo"failed to connect mysql:".msqli_connect_error();}
$sql="INSERT INTO leaves(ecode,dcode,dname,lev_start,lev_end,reason)values
('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')";
if(!mysqli_query($con,$sql))
{die('error:'.mysqli_error());}
echo"<center>";
echo"<h1> 1 leave is submitted !!</h1>";
echo"<h2> Congratulation Sir Your leave application has submitted  !!</h2>";

mysqli_close($con);
?>
<hr>
<p><a href="http://localserver/emp/leaveform.html">BACK</a></p>