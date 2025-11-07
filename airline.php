<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        enter from <input type="text" name="fromm"><br><br >
        enter airline<input type="text" name="airline"><br><br>
        enter depaturedate<input type="text" name="depaturedate"><br><br>
        enter arrivaldate<input type="text" name="arrivaldate"><br><br>
        enter too<input type="text" name="too"><br><br>
        enter flightnumber<input type="text" name="flightnumber"><br><br>
        enter terminal<input type="text" name="terminal"><br><br>
        <input type="submit" name="submit">
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airdb";
$tbname="air";
$conn=mysqli_connect($servername,$username,$password,$dbname);


if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align center>FLIGHT DETAILS</h2><br/>";

}
$fromm=$_POST['fromm'];
$airline=$_POST['airline'];
$depaturedate=$_POST['depaturedate'];
$arrivaldate=$_POST['arrivaldate'];
$too=$_POST['too'];
$flightnumber=$_POST['flightnumber'];
$terminal=$_POST['terminal'];




$query="INSERT INTO air(fromm,airline,depaturedate, arrivaldate, too, flightnumber, terminal)
        VALUES ('".$fromm."','".$airline."', '".$depaturedate."', '".$arrivaldate."', '".$too."', '".$flightnumber."', '".$terminal."')";

$res=mysqli_query($conn,$query);
if($res)
{
    echo"SUBMITTED SUCCESSFULLY!!";

}
else
    {
    echo"ERROR";

}

echo"<br><h2 align=center>FLIGHT DETAILS</h2><br/>";
$sql="SELECT*FROM air";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    echo"<table border=2 align=center>";
    echo"<tr><th>From</th>";
    echo"<th>Airline</th>";
    echo"<th>Depature Date</th>";
    echo"<th> Arrival Date</th>";
    echo"<th>to</th>";
    echo"<th>Flight Number</th>";
    echo"<th>Terminal</th><tr>";
    while($row=mysqli_fetch_assoc($res))
{
    echo"<tr><td>$row[fromm]</td>";
    echo"<td>$row[airline]</td>";
    echo"<td>$row[depaturedate]</td>";
    echo"<td>$row[arrivaldate]</td>";
    echo"<td>$row[too]</td>";
    echo"<td>$row[flightnumber]</td>";
    echo"<td>$row[terminal]</td>";
}
echo"</table>";
}
    else{
    echo"0 result";
}
mysqli_close($conn);
?>