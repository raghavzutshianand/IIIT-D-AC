<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    
	<?php	
	$i = $_POST['i'];
	$server = mysql_real_escape_string($_POST['server']);
    $bloc = mysql_real_escape_string($_POST['bloc']);
    $floc = mysql_real_escape_string($_POST['floc']);
    $bssid0 = mysql_real_escape_string($_POST['bssid0']);
    $bssid1 = mysql_real_escape_string($_POST['bssid1']);
    $bssid2 = mysql_real_escape_string($_POST['bssid2']);
    $bssid3 = mysql_real_escape_string($_POST['bssid3']);
    $bssid4 = ($_POST['bssid4']);
	
    
    //$server = localStorage.getItem('IPaddr');
	//string $server = $ipaddr;
    /*$username = "tester";
    $password = "1234";
    $database = "ipdb";*/

	$con = mysql_connect($server, "tester", "1234") or die ("Could not connect: " . mysql_error());
	$con2 = mysql_connect($server, "tester", "1234") or die ("Could not connect: " . mysql_error());
    mysql_select_db("ipdb");

	/*if(mysql_num_rows(mysql_query("SHOW TABLES LIKE 'bssidtable'", $con)) == 0) //if table doesn't exist
	{		
		  $sql = "CREATE TABLE `bssidtable` (
		 `S.No.` int(20) NOT NULL AUTO_INCREMENT,
		 `BLocation` varchar(20) NOT NULL,
		 `FLocation` varchar(20) NOT NULL,
		 `BSSID0` varchar(20) NOT NULL,
		 `BSSID1` varchar(20) NOT NULL,
		 `BSSID2` varchar(20) NOT NULL,
		 `BSSID3` varchar(20) NOT NULL,
		 `BSSID4` varchar(20) NOT NULL,
		 PRIMARY KEY (`S.No.`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";
		mysql_query($sql, $con);
		//mysql_query("INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES ('$bloc','$floc','$bssid0','$bssid1','$bssid2','$bssid3','$bssid4')", $con);
	}
	elseif (mysql_num_rows(mysql_query("SHOW TABLES LIKE 'bssidtable'", $con)) == 1 and $i <= 1) //if table exists
	{
		//if ($i == 1)
		//{//mysql_query("INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES ('$bloc','$floc','$bssid0','$bssid1','$bssid2','$bssid3','$bssid4')");
		//$sql1 = "TRUNCATE TABLE bssidtable";
		  //mysql_query("TRUNCATE TABLE bssidtable", $con);
		  //mysql_query("DELETE FROM bssidtable", $con);
		mysql_query("DROP TABLE bssidtable");

		  $sql = "CREATE TABLE `bssidtable` (
		 `S.No.` int(20) NOT NULL AUTO_INCREMENT,
		 `BLocation` varchar(20) NOT NULL,
		 `FLocation` varchar(20) NOT NULL,
		 `BSSID0` varchar(20) NOT NULL,
		 `BSSID1` varchar(20) NOT NULL,
		 `BSSID2` varchar(20) NOT NULL,
		 `BSSID3` varchar(20) NOT NULL,
		 `BSSID4` varchar(20) NOT NULL,
		 PRIMARY KEY (`S.No.`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";
		mysql_query($sql);	
		//}
		
		//mysql_query($sql2) or die (mysql_error());
		//mysql_query("INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES ('$bloc','$floc','$bssid0','$bssid1','$bssid2','$bssid3','$bssid4')", $con);
	}
	//else
	//{*/
       mysql_query("INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES ('$bloc','$floc','$bssid0','$bssid1','$bssid2','$bssid3','$bssid4')", $con);
	//}
    //$sql = "INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES ('$bloc','$floc','$bssid0','$bssid1','$bssid2','$bssid3','$bssid4')";
    //$sql = "INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES ('ACB','G1','A','B','C','D','E')";
    //$sql = "INSERT INTO bssidtable (Blocation, Flocation, BSSID0, BSSID1, BSSID2, BSSID3, BSSID4) VALUES (blocation,flocation,bssid0,bssid1,bssid2,bssid3,bssid4)";
     mysql_close();
    ?>
</body>
</html>