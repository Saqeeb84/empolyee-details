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
      <a class="navbar-brand" href="http://localserver/emp/dashboard.html"> <img src="gmr.jpg" width="150px" height="40px"></a>
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
                      <b>Empolyee</b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="">Projects</a></li>
                      <li><a class="dropdown-item" href="">..</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li></ul>
          
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
  <h1>GMR-TECHNOLOGY</h1>
    <h2>Projects-Information</h2>
    <hr color="blue" size="4">
    <form name="f1" action="projects.php" method="POST">
      <input type ="text" name="t1" placeholder="Enter Project-code">
      <input type="submit" name="b1" value="submit">
      <button class=btn btn-success><a href="http://localserver/emp/projectform.html">INSERT PROJECTS-DETAILS</a></button></form>

</body>
</html>
<?php
if (isset($_POST['b1']))
{$pc=$_POST['t1'];
$con=mysqli_connect("localhost","root","","college-db");
if(mysqli_connect_errno());
{"failed to connect mysql:".mysqli_connect_error();}
$result=mysqli_query($con,"SELECT * FROM projects WHERE pcode='$pc'");
echo"<center>";
echo"<table border=2 padding=5px>";
echo"<tr bgcolor=lightgreen>";
echo "<th>Project-Code</th>";
echo "<th>Project-Name</th>";
echo "<th>Project-Details</th>";
echo "<th>Date-recieved</th>";
echo "<th>Date-commetted</th>";
echo "<th>Status</th>";
 while($row=mysqli_fetch_array($result))
{echo"<tr bgcolor=yellow>";
echo "<td bgcolor=khaki>".$row['pcode']."</td>";
echo "<td>".$row['pname']."</td>";
echo "<td bgcolor=khaki>".$row['pdetails']."</td>";
echo "<td>".$row['date-recieve']."</td>";
echo "<td bgcolor=khaki>".$row['date-commit']."</td>";
echo "<td>".$row['status']."</td>";}
echo "</table>";
}
?>
<?php
$con=mysqli_connect("localhost","root","","college-db");
if(mysqli_connect_errno())
{echo"failed to connect mysql:".mysqli_connect_error();}
$result=mysqli_query($con,"SELECT * FROM projects");
echo"<center>";
echo"<table border=2>";
echo"<tr bgcolor=green>";
echo "<th>Project-code</th>";
echo "<th>Project-name</th>";
echo "<th>Project-details</th>";
echo "<th>Recieved-date</th>";
echo "<th>Complition-date</th>";
echo "<th>Status</th>";
while($row=mysqli_fetch_array($result))
{echo"<tr bgcolor=yellow>";
    echo "<td bgcolor=cyan>".$row['pcode']."</td>";
    echo "<td>".$row['pname']."</td>";
echo "<td bgcolor=cyan>".$row['pdetails']."</td>";
echo "<td>".$row['date-recieve']."</td>";
echo "<td bgcolor=cyan>".$row['date-commit']."</td>";
echo "<td>".$row['status']."</td>";}
echo "</table>";
?>
<hr size=4 color=blue>
<h3><a href="http://localserver/emp/dashboard.html">Back</a></h3> 