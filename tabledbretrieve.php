<?php
$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align=center>EMPLOYEE DETAILS</h2><br/>";

}
$sql="SELECT*FROM emp";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    echo"<table border=2 align=center>";
    echo"<tr><th>Employee ID</th>";
    echo"<th>Employee name</th>";
    echo"<th>department</th>";
    echo"<th>salary</th>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<tr><td>$row[eid]</td>";
        echo"<td>$row[ename]</td>";
        echo"<td>$row[dept]</td>";
        echo"<td>$row[sal]</td>";
    }
echo"</table>";
}
else
{
    echo"0 results";
}
mysqli_close($conn);
?>