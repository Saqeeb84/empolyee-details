<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $login=false;
  $Showerror=false;    
include'dbconnect.php';
$username=$_POST['username'];
$password=$_POST['password'];
 
 $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($con , $sql);
$num=mysqli_num_rows($result);
if ($num ==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location:dashboard.php");
}

else{
    $Showerror="invalid crendtials Password or username is Invalid ";
}
}

?>

<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://localserver/emp/bootstrap-5.2.0-dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="http://localserver/emp/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        h1{background-color:#003a69; color:white; font-size:50px; font-family:"gill sans";}
        body{background-color:#faf8ed;}
        h2{font-family:"arial"; font-size:30px;}
        table{border-radius:20px;}
        </style>

        </head>
        <body><center>
        <h1>GMR-TECHNOLOGY</h1>
        <img src="ogr1.jpg" width="100%" height="200px">
         <h2  align=center>sign-in  /  sign-up</h2>
          
         <form action="login.php"  method="POST">
         <?php
        

{/*
       if($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>success!</strong> Your  are logged in .
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';}
        if($Showerror){
        echo'
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '.$Showerror.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';}*/}
?>  
       <table cellspacing=8 cellpadding=8><tr><td>
        <table border=2 cellspacing=8 cellpadding=8>
        <tr><td>username</td><td><input type="text" class="form-control" id="username" name="username" 
    aria-describedby="emailHelp" placeholder="Enter username" required>
    </td></tr>
        <tr><td>password</td><td>
           <input type="password" class="form-control" id="Password"  name="password" placeholder="Password" required></td></tr>
        <tr><td align=center><input type="reset" name="reset" value="reset"></td>
        <td align=center><input type="submit" name="login" value="submit" ></td></tr>
        <tr><td colspan="2" bgcolor=cyan>Create New Account <a href="http://localserver/emp/registerform.php">!Click-here</a></td></tr>
        <tr><td colspan="2" bgcolor=cyan>Forgotten Password? <a href="">!Click-here</a></td></tr>
        </table></td> 
        <td><body>
            <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="gfg.png" style="width: 300px;" height="250px">
  <img class="mySlides" src="of1.jpg" style="width: 300px;" height="250px">
  <img class="mySlides" src="of4.jpg" style="width: 300px;" height="250px">
  <img class="mySlides" src="gf.png" style="width: 300px;" height="250px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1500); // Change image every 2 seconds
}
</script>
</form>
</body></td></tr></table>
    <hr size=4 color=blue>
    <p>Under the Copyright Act 1968, schools can copy and communicate
       limited amounts of copyright material for educational purposes for an agreed fee 
       (paid for centrally by the Department). 
      In recent years, copyright costs in the education sector have been increasing exponentially.</p>
    
    </body>
</html>
