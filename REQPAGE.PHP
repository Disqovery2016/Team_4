<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register</title>
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
$query = mysqli_query($con,"INSERT INTO request VALUES ('$R_ID','$NAME')");
$data = mysqli_query($con,"INSERT INTO request VALUES ('$R_ID','$NAME')")or die("");
if($data) 
 {
 echo "YOUR REQUEST IS SENT..."; 
 }
function index()
 {
	 if(!empty($_POST['R_ID'])) 
    {
	  $con = mysqli_connect("localhost","root","");
	 $query = mysqli_query($con,"SELECT * FROM request WHERE R_ID = '$_POST[R_ID]'") or die("");
     if(!$row = mysqli_fetch_array($query) or die("")) 
	 { 	
      New_user(); 
	 } 
     else 
     { 
   echo "SORRY...YOU HAVE ALREADY REQUESTED ..."; 
     }
    }
 }
 if(isset($_POST['submit'])) 
{ 
index(); 
} 
}
else
die("Please fill the details");
mysqli_close($con);
?>
</body>
</html>