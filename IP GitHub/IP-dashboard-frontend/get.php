<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 <?php
 mysql_connect("192.168.50.44", "tester", "1234") or die ("Could not connect: " . mysql_error());
 mysql_select_db("ipdb");
 $data = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND Userfeedback='Cool')");
 mysql_close();
 $array = mysql_fetch_row($data);	//fetch result
  echo $array[0];
  ?>
  
</body>
</html>