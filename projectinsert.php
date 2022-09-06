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
$sql="INSERT INTO projects(`pcode`,`pname`,`pdetails`,`date-recieve`,`date-commit`,`status`)values
('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')";
if(!mysqli_query($con,$sql))
{die('error:'.mysqli_error());}
echo"<center>";
echo"<h1> 1 projects-details is submitted !!</h1>";
echo"<h2> Congratulation Sir Your project has submitted !!</h2>";

mysqli_close($con);
?>
<hr>
<p><a href="http://localserver/emp/projectform.html">BACK</a></p>