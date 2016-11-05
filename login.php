<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>

<body>
<?php
session_start();
$R_ID=$_POST['R_ID'];
$NAME=$_POST['NAME'];


if($R_ID&&$NAME)
{
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"crishiconnect") or die("couldn't find database");

$data = mysqli_query($con,"SELECT * FROM retailers WHERE NAME='$NAME'")or die("");
$numrows = mysql_num_rows($query);

if($numrows!=0)
{
while($row = mysql_fetch_assoc($query))
{
$dbname = $row['NAME'];
$dbId = $row['R_ID'];

}
if($NAME==$dbname&&$R_ID==$dbid)
{
echo 'Login successful';
$_SESSION['NAME']= $dbname;
}
else
echo 'Incorrect Retailer ID';
}
else
die("That username doesnt exist");
}
else
die("Please enter details");
mysql_close($con);
?>
</body>
</html>