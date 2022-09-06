<html>
    <h1>GMR-TECHNOLOGY</h1>
    <h2>Empolyee-Details</h2>
    <hr color="blue" size="4">
    <form name="f1" action="update.php" method="POST">
      <input type ="text" name="t1" placeholder="Enter employee code">
      <input type="submit" name="b1" value="SUBMIT"> 
      <input type="submit" name="b2" value="UPDATE">
      <input type="submit" name="b3" value="DELETE">
      </form>
      </html>
<?php

if (isset($_POST['b2']))
{$ec=$_POST['t1'];
  
$con=mysqli_connect("localhost","root","","college-db");
if(mysqli_connect_errno());
{"failed to connect mysql:".mysqli_connect_error();}
$result=mysqli_query($con,"SELECT * FROM empolyee WHERE ecode='$ec'");

$query=mysqli_query($con,"UPDATE `empolyee SET` `ecode`=$_POST[t1],`ename`=$en,
`dept`=$dept,`edu`=$edu,`exp`=$exp,`ctc`=$ctc WHERE 1 ");
echo"<center>";
echo"<table border=2 cellspacing=1px>";
echo"<tr bgcolor=lightgreen>";
echo "<th>Empolyee code</th>";
echo "<th>Empolyee name</th>";
echo "<th>Empolyee department</th> ";
echo"<th>Empolyee edu</th>";
echo "<th>Empolyee exp</th>";
echo "<th>Empolyee salary</th>";
while($row=mysqli_fetch_array($result))
{echo"<tr bgcolor=yellow>";
    echo "<td bgcolor=khaki>" .'<input type=`text` name=`ecode` value='.$row['ecode'].'>'."</td>";
    echo "<td>"               .'<input type=`text` name=`ecode` value='.$row['ename'].'>'."</td>";
echo "<td bgcolor=khaki>"     .'<input type=`text` name=`ecode` value='.$row['dept'].'>'."</td>";
echo "<td>"                   .'<input type=`text` name=`ecode` value='.$row['edu'].'>'."</td>";
echo "<td bgcolor=khaki>"     .'<input type=`text` name=`ecode` value='.$row['exp'].'>'."</td>";
echo "<td>"                   .'<input type=`text` name=`ecode` value='.$row['ctc'].'>'."</td>";
echo "</table>";
}
}
?>
<!--<center>
<table border=2 cellspacing=1px>
<tr bgcolor=lightgreen>
<th>Empolyee code</th>
<th>Empolyee name</th>
<th>Empolyee dept</th>
<th>Empolyee edu</th>
<th>Empolyee exp</th>
<th>Empolyee salary</th>

<tr bgcolor=yellow>
    <td bgcolor=khaki> <input type=`text` name=`ecode` value='<?php echo $row['ecode'];?>'></td>
    <td>               <input type=`text` name=`ecode` value='<?php echo $row['ename'];?>'></td>
<td bgcolor=khaki>     <input type=`text` name=`ecode` value='<?php echo $row['dept'];?>'></td>
<td>                   <input type=`text` name=`ecode` value='<?php echo $row['edu'];?>'></td>
<td bgcolor=khaki>     <input type=`text` name=`ecode` value='<?php echo $row['exp'];?>'></td>
<td>                   <input type=`text` name=`ecode` value='<?php echo $row['ctc'];?>'></td>
</table>