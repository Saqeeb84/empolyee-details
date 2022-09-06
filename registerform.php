<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
include'dbconnect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$exists=false;
if(($password == $cpassword) && ($exists==false)){ 
    $sql="INSERT INTO `users` (`slno`, `username`, `password`, `dt`) 
    VALUES ('', '$username', '$password',CURRENT_TIME());";
$result=mysqli_query($con , $sql);
if ($result){
    $Showalert=true;
}
}
else{
    $Showerror="Password do not match";
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
    <style>
        h1{background-color:#003a69; color:white; font-size:50px; font-family:"gill sans";}
        body{background-color:#faf8ed;}
        h2{font-family:"arial"; font-size:30px;}
        table{border-radius:20px;}
        </style>
<link href="http://localserver/emp/bootstrap-5.2.0-dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="http://localserver/emp/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <form name="form" action="registerform.php" method="POST" >
            <h1>GMR-TECHNOLOGY</h1>
            <img src="ogr1.jpg" width="100%" height="150px">
    <h2>New-registration / sign-up </h2>
    <?php
   {/*
        if($Showalert){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>success!</strong> Your account has now created  you can login.
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
            <table>
                <tr align="center">
                    <td>user  Name:</td><td><input type="text" class="form-control" 
                    id="Password"  name="username" placeholder="username"></td>
                </tr>
                <tr align="center">
                    <td>password:</td><td> <input type="password" class="form-control" 
                    id="Password"  name="password" placeholder="Password"></td>
                 </tr>
                 <tr align="center">
                    <td>confirm password:</td><td><input type="password" class="form-control" 
                    id="cpassword" name="cpassword" placeholder="Password"></td>
                </tr>
     
                <tr align="center">
                    <td colspan="2"><input type="submit" value="submit"></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="reset" value="reset"></td>
                </tr>
                <tr align="center"><td colspan="2">Already have a  Account:<a href="http://localserver/emp/login.php">!Click-here</a></td></tr>
                <tr align="center"><td colspan="2">Sign-in with google /facebook<a href="">!Click-here</a></td></tr>
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

</body></td></tr></table>


        </form>
        <hr color="blue" size="4">
        <fieldset>Terms and Conditions</fieldset>
       
</body>
</html>
<?php
{/*$con=mysqli_connect("localhost","root","","college-db");
if (mysqli_connect_errno())
{echo"failed to connect mysql:".mysqli_connect_error();}
if(isset($_POST['username']) && isset($_POST['password']))
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$slquery="SELECT 1 FROM users WHERE username='$username'";
$selectresult=mysql_query($slquery);
if
(mysql_num_rows($selectresult)>0)
{$msg='user already exists';
echo"<h1 style='background:red;color:white'>",$msg,"</h1>";}
else if($password!=$confirmpassword) {
    $msg="password doesnt match";
    echo"<h1 style='background:orange; color:teal;'>",$msg,"</h1>";
}
else{$query="INSERT INTO users(`username`,`password`,`confirmpassword`) 
values('$username','$password','$confirmpassword')";
if($result){$msg-"user created successfully.";
echo"<h1 sytle='background:green;color:white'>",$msg,"</h1>";}}
*/}?>