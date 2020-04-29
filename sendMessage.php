
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$Lis_name=$_POST['name'];
$Lis_email=$_POST['email'];
$Lis_phone=$_POST['phone'];
$Lis_messagee=$_POST['message'];
$con=mysql_connect("localhost","root","") or die("Database Not connected");
$db=mysql_select_db("webstack",$con) or die("Database Not found");
$query="insert into sendmessage values('".$Lis_name."','".$Lis_email."','".$Lis_phone."','".$Lis_messagee."')";
$res=mysql_query($query,$con) or die("Query not executed");
if($res)
{
	header('location:index.html');
}
else
{
	echo "Data Not Inserted";
}


?>
<body>
</body>
</html>