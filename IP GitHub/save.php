<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$server = "192.168.50.44";
$username = "tester";
$password = "1234";
$database = "ipdb";
//$database = "commentsdb";

mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database);

$timestamp = mysql_real_escape_string($_POST['timestamp']);
$Blocval = mysql_real_escape_string($_POST['Blocval']);
$Flocval = mysql_real_escape_string($_POST['Flocval']);
$feelingval = mysql_real_escape_string($_POST['feelingval']);
$commentval = mysql_real_escape_string($_POST['commentval']);

#$mycomment = $_POST['commentval'];

#if (isset($_POST['commentval']))
#{echo $mycomment;}
#else
#{echo "NOT gettingsaved!";}

$sql = "INSERT INTO comfortleveltable (Timestamp,BLocation,FLocation,Userfeedback,Comment) VALUES ('$timestamp','$Blocval','$Flocval','$feelingval','$commentval')";

//$sql .= "VALUES ('$timestamp','$locval','$feelingval','$commentval')";

//$sql = "INSERT INTO comments (Comment) VALUES ('$_POST[commentval]')";
if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
} else {
    echo "Values added";
}
mysql_close();
?>
  
</body>
</html>