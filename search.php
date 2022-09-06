<h1>heading-brand name</h1>
    <h1>Department-Details</h1>
    <hr color="blue" size="4">
    <form name="f1" action="search.php" method="POST">
      <input type ="text" name="t1" placeholder="Enter employee code">
      <input type="submit" name="b1" value="submit"></form>
</body>
</html>

<?php
if (isset($_POST['b1']))
{
$dc=$_POST['t1'];
$con=mysqli_connect("localhost","root","","college-db");
if(mysqli_connect_errno());
{"failed to connect mysql:".mysqli_connect_error();}
$result=mysqli_query($con,"SELECT empolyee.ecode, department.dcode FROM 
employee INNER JOIN department ON empolyee.ecode=department.ecode;");
echo"<center>";
echo"<table border=2 padding=5px>";
echo"<tr bgcolor=lightgreen>";
echo "<th>Department code</th>";
echo "<th>Department name</th>";
echo "<th>Empolyee location</th>";
echo "<th>Empolyee code</th>";
while($row=mysqli_fetch_array($result))
{echo"<tr bgcolor=yellow>";
    echo "<td bgcolor=khaki>".$row['dcode']."</td>";
    echo "<td>".$row['dname']."</td>";
echo "<td bgcolor=khaki>".$row['location']."</td>";
echo "<td>".$row['ecode']."</td>";
echo "</table>";
}
}
?>


<?php
$con=mysqli_connect("localhost","root","","college-db");
if(mysqli_connect_errno())
{echo"failed to connect mysql:".mysqli_connect_error();}
$result=mysqli_query($con,"SELECT * FROM department");
echo"<center>";
echo"<table border=2>";
echo"<tr bgcolor=green>";
echo "<th>Department Code</th>";
echo "<th>Department Name</th>";
echo "<th>Empolyee location</th>";
echo "<th>Empolyee Code</th>";
while($row=mysqli_fetch_array($result))
{echo"<tr bgcolor=yellow>";
echo "<td bgcolor=cyan>".$row['dcode']."</td>";
echo "<td>".$row['dname']."</td>";
echo "<td bgcolor=cyan>".$row['location']."</td>";
echo "<td>".$row['ecode']."</td>";
}
echo "</table>";
echo"<h1>back</h1>";
?>

















