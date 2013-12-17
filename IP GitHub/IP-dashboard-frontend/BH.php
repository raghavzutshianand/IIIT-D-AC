<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.3.js"></script>
<script src="Chart.js"></script>
<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
<style>
			canvas{
			}
		</style>

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">IIIT-D A/C Controller</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.html" accesskey="1" title="">Home</a></li>
				<li><a href="#" accesskey="2" title="">History</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="wrapper" style="width:80%; margin-left:auto; margin-right:auto; background:#CCC;">

 <?php
 mysql_connect("192.168.50.44", "tester", "1234") or die ("Could not connect: " . mysql_error());
 mysql_select_db("ipdb");
 
 //BOYS HOSTEL: Ground Floor A Wing
 $qBHGA_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGA') AND Userfeedback='Cold')");
 $BHGA_Cool = mysql_fetch_row($qBHGA_Cool);
 $qBHGA_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGA') AND Userfeedback='Comfortable')");
 $BHGA_Comfy = mysql_fetch_row($qBHGA_Comfy);
 $BHGA_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGA') AND Userfeedback='Hot')");
 $BHGA_Hot = mysql_fetch_row($qBHGA_Hot);
 
 //BOYS HOSTEL: Ground Floor B Wing
 $qBHGB_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGA') AND Userfeedback='Cold')");
 $BHGB_Cool = mysql_fetch_row($qBHGB_Cool);
 $qBHGB_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGB') AND Userfeedback='Comfortable')");
 $BHGB_Comfy = mysql_fetch_row($qBHGB_Comfy);
 $BHGB_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGB') AND Userfeedback='Hot')");
 $BHGB_Hot = mysql_fetch_row($qBHGB_Hot);

 //BOYS HOSTEL: Ground Floor C Wing
 $qBHGC_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGC') AND Userfeedback='Cold')");
 $BHGC_Cool = mysql_fetch_row($qBHGC_Cool);
 $qBHGC_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGC') AND Userfeedback='Comfortable')");
 $BHGC_Comfy = mysql_fetch_row($qBHGC_Comfy);
 $BHGC_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BHGC') AND Userfeedback='Hot')");
 $BHGC_Hot = mysql_fetch_row($qBHGC_Hot); 

 //BOYS HOSTEL: 1st Floor A Wing
 $qBH1A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1A') AND Userfeedback='Cold')");
 $BH1A_Cool = mysql_fetch_row($qBH1A_Cool);
 $qBH1A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1A') AND Userfeedback='Comfortable')");
 $BH1A_Comfy = mysql_fetch_row($qBH1A_Comfy);
 $BH1A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1A') AND Userfeedback='Hot')");
 $BH1A_Hot = mysql_fetch_row($qBH1A_Hot);
 
 //BOYS HOSTEL: 1st Floor B Wing
 $qBH1B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1A') AND Userfeedback='Cold')");
 $BH1B_Cool = mysql_fetch_row($qBH1B_Cool);
 $qBH1B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1B') AND Userfeedback='Comfortable')");
 $BH1B_Comfy = mysql_fetch_row($qBH1B_Comfy);
 $BH1B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1B') AND Userfeedback='Hot')");
 $BH1B_Hot = mysql_fetch_row($qBH1B_Hot);

 //BOYS HOSTEL: 1st Floor C Wing
 $qBH1C_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1C') AND Userfeedback='Cold')");
 $BH1C_Cool = mysql_fetch_row($qBH1C_Cool);
 $qBH1C_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1C') AND Userfeedback='Comfortable')");
 $BH1C_Comfy = mysql_fetch_row($qBH1C_Comfy);
 $BH1C_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH1C') AND Userfeedback='Hot')");
 $BH1C_Hot = mysql_fetch_row($qBH1C_Hot); 

//BOYS HOSTEL: 2nd Floor A Wing
 $qBH2A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2A') AND Userfeedback='Cold')");
 $BH2A_Cool = mysql_fetch_row($qBH2A_Cool);
 $qBH2A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2A') AND Userfeedback='Comfortable')");
 $BH2A_Comfy = mysql_fetch_row($qBH2A_Comfy);
 $BH2A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2A') AND Userfeedback='Hot')");
 $BH2A_Hot = mysql_fetch_row($qBH2A_Hot);
 
 //BOYS HOSTEL: 2nd Floor B Wing
 $qBH2B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2A') AND Userfeedback='Cold')");
 $BH2B_Cool = mysql_fetch_row($qBH2B_Cool);
 $qBH2B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2B') AND Userfeedback='Comfortable')");
 $BH2B_Comfy = mysql_fetch_row($qBH2B_Comfy);
 $BH2B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2B') AND Userfeedback='Hot')");
 $BH2B_Hot = mysql_fetch_row($qBH2B_Hot);

 //BOYS HOSTEL: 2nd Floor C Wing
 $qBH2C_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2C') AND Userfeedback='Cold')");
 $BH2C_Cool = mysql_fetch_row($qBH2C_Cool);
 $qBH2C_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2C') AND Userfeedback='Comfortable')");
 $BH2C_Comfy = mysql_fetch_row($qBH2C_Comfy);
 $BH2C_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH2C') AND Userfeedback='Hot')");
 $BH2C_Hot = mysql_fetch_row($qBH2C_Hot);

//BOYS HOSTEL: 3rd Floor A Wing
 $qBH3A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3A') AND Userfeedback='Cold')");
 $BH3A_Cool = mysql_fetch_row($qBH3A_Cool);
 $qBH3A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3A') AND Userfeedback='Comfortable')");
 $BH3A_Comfy = mysql_fetch_row($qBH3A_Comfy);
 $BH3A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3A') AND Userfeedback='Hot')");
 $BH3A_Hot = mysql_fetch_row($qBH3A_Hot);
 
 //BOYS HOSTEL: 3rd Floor B Wing
 $qBH3B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3A') AND Userfeedback='Cold')");
 $BH3B_Cool = mysql_fetch_row($qBH3B_Cool);
 $qBH3B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3B') AND Userfeedback='Comfortable')");
 $BH3B_Comfy = mysql_fetch_row($qBH3B_Comfy);
 $BH3B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3B') AND Userfeedback='Hot')");
 $BH3B_Hot = mysql_fetch_row($qBH3B_Hot);

 //BOYS HOSTEL: 3rd Floor C Wing
 $qBH3C_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3C') AND Userfeedback='Cold')");
 $BH3C_Cool = mysql_fetch_row($qBH3C_Cool);
 $qBH3C_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3C') AND Userfeedback='Comfortable')");
 $BH3C_Comfy = mysql_fetch_row($qBH3C_Comfy);
 $BH3C_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH3C') AND Userfeedback='Hot')");
 $BH3C_Hot = mysql_fetch_row($qBH3C_Hot);

//BOYS HOSTEL: 4th Floor A Wing
 $qBH4A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4A') AND Userfeedback='Cold')");
 $BH4A_Cool = mysql_fetch_row($qBH4A_Cool);
 $qBH4A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4A') AND Userfeedback='Comfortable')");
 $BH4A_Comfy = mysql_fetch_row($qBH4A_Comfy);
 $BH4A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4A') AND Userfeedback='Hot')");
 $BH4A_Hot = mysql_fetch_row($qBH4A_Hot);
 
 //BOYS HOSTEL: 4th Floor B Wing
 $qBH4B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4A') AND Userfeedback='Cold')");
 $BH4B_Cool = mysql_fetch_row($qBH4B_Cool);
 $qBH4B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4B') AND Userfeedback='Comfortable')");
 $BH4B_Comfy = mysql_fetch_row($qBH4B_Comfy);
 $BH4B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4B') AND Userfeedback='Hot')");
 $BH4B_Hot = mysql_fetch_row($qBH4B_Hot);

 //BOYS HOSTEL: 4th Floor C Wing
 $qBH4C_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4C') AND Userfeedback='Cold')");
 $BH4C_Cool = mysql_fetch_row($qBH4C_Cool);
 $qBH4C_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4C') AND Userfeedback='Comfortable')");
 $BH4C_Comfy = mysql_fetch_row($qBH4C_Comfy);
 $BH4C_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH4C') AND Userfeedback='Hot')");
 $BH4C_Hot = mysql_fetch_row($qBH4C_Hot);

//BOYS HOSTEL: 5th Floor A Wing
 $qBH5A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5A') AND Userfeedback='Cold')");
 $BH5A_Cool = mysql_fetch_row($qBH5A_Cool);
 $qBH5A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5A') AND Userfeedback='Comfortable')");
 $BH5A_Comfy = mysql_fetch_row($qBH5A_Comfy);
 $BH5A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5A') AND Userfeedback='Hot')");
 $BH5A_Hot = mysql_fetch_row($qBH5A_Hot);
 
 //BOYS HOSTEL: 5th Floor B Wing
 $qBH5B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5A') AND Userfeedback='Cold')");
 $BH5B_Cool = mysql_fetch_row($qBH5B_Cool);
 $qBH5B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5B') AND Userfeedback='Comfortable')");
 $BH5B_Comfy = mysql_fetch_row($qBH5B_Comfy);
 $BH5B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5B') AND Userfeedback='Hot')");
 $BH5B_Hot = mysql_fetch_row($qBH5B_Hot);

 //BOYS HOSTEL: 5th Floor C Wing
 $qBH5C_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5C') AND Userfeedback='Cold')");
 $BH5C_Cool = mysql_fetch_row($qBH5C_Cool);
 $qBH5C_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5C') AND Userfeedback='Comfortable')");
 $BH5C_Comfy = mysql_fetch_row($qBH5C_Comfy);
 $BH5C_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH5C') AND Userfeedback='Hot')");
 $BH5C_Hot = mysql_fetch_row($qBH5C_Hot);

//BOYS HOSTEL: 6th Floor A Wing
 $qBH6A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6A') AND Userfeedback='Cold')");
 $BH6A_Cool = mysql_fetch_row($qBH6A_Cool);
 $qBH6A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6A') AND Userfeedback='Comfortable')");
 $BH6A_Comfy = mysql_fetch_row($qBH6A_Comfy);
 $BH6A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6A') AND Userfeedback='Hot')");
 $BH6A_Hot = mysql_fetch_row($qBH6A_Hot);
 
 //BOYS HOSTEL: 6th Floor B Wing
 $qBH6B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6A') AND Userfeedback='Cold')");
 $BH6B_Cool = mysql_fetch_row($qBH6B_Cool);
 $qBH6B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6B') AND Userfeedback='Comfortable')");
 $BH6B_Comfy = mysql_fetch_row($qBH6B_Comfy);
 $BH6B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6B') AND Userfeedback='Hot')");
 $BH6B_Hot = mysql_fetch_row($qBH6B_Hot);

 //BOYS HOSTEL: 6th Floor C Wing
 $qBH6C_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6C') AND Userfeedback='Cold')");
 $BH6C_Cool = mysql_fetch_row($qBH6C_Cool);
 $qBH6C_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6C') AND Userfeedback='Comfortable')");
 $BH6C_Comfy = mysql_fetch_row($qBH6C_Comfy);
 $BH6C_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='BH' AND (FLocation='BH6C') AND Userfeedback='Hot')");
 $BH6C_Hot = mysql_fetch_row($qBH6C_Hot);

 mysql_close();
  ?> 
<div align="center">
<div style="height:250px; width:280px; float:left; margin-left:100px;>
	<canvas id="g" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">Ground Floor</div>
</div>
<div style="height:250px; width:280px; float:left">
	<canvas id="fa" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">1st Floor</div>
</div>
<div style="height:250px; width:260px; float:left">
	<canvas id="sa" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">2nd Floor</div>
</div>
<div style="height:250px; width:260px; float:left">
	<canvas id="ta" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">3rd Floor</div>
</div>
<div style="height:250px; width:280px; float:left; margin-left:100px;">
	<canvas id="foa" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">4th Floor</div>
</div>
<div style="height:250px; width:280px; float:left; margin-right:100px;">
	<canvas id="fi" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">5th Floor</div>
</div>
<div style="height:250px; width:280px; float:left">
	<canvas id="fob" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">6th Floor</div>
</div>
</div>

<script>

	var BHGA_coolcount = <?php echo $BHGA_Cool[0];?>;
	var BHGA_comfycount = <?php echo $BHGA_Comfy[0];?>;
	var BHGA_hotcount = <?php echo $BHGA_Hot[0];?>;

	var BHGB_coolcount = <?php echo $BHGB_Cool[0];?>;
	var BHGB_comfycount = <?php echo $BHGB_Comfy[0];?>;
	var BHGB_hotcount = <?php echo $BHGB_Hot[0];?>;

	var BHGC_coolcount = <?php echo $BHGC_Cool[0];?>;
	var BHGC_comfycount = <?php echo $BHGC_Comfy[0];?>;
	var BHGC_hotcount = <?php echo $BHGC_Hot[0];?>;
	
	var BH1A_coolcount = <?php echo $BH1A_Cool[0];?>;
	var BH1A_comfycount = <?php echo $BH1A_Comfy[0];?>;
	var BH1A_hotcount = <?php echo $BH1A_Hot[0];?>;
	var BH1B_coolcount = <?php echo $BH1B_Cool[0];?>;
	var BH1B_comfycount = <?php echo $BH1B_Comfy[0];?>;
	var BH1B_hotcount = <?php echo $BH1B_Hot[0];?>;
	var BH1C_coolcount = <?php echo $BH1B_Cool[0];?>;
	var BH1C_comfycount = <?php echo $BH1B_Comfy[0];?>;
	var BH1C_hotcount = <?php echo $BH1B_Hot[0];?>;

	var BH2A_coolcount = <?php echo $BH2A_Cool[0];?>;
	var BH2A_comfycount = <?php echo $BH2A_Comfy[0];?>;
	var BH2A_hotcount = <?php echo $BH2A_Hot[0];?>;
	var BH2B_coolcount = <?php echo $BH2B_Cool[0];?>;
	var BH2B_comfycount = <?php echo $BH2B_Comfy[0];?>;
	var BH2B_hotcount = <?php echo $BH2B_Hot[0];?>;
	var BH2C_coolcount = <?php echo $BH2B_Cool[0];?>;
	var BH2C_comfycount = <?php echo $BH2B_Comfy[0];?>;
	var BH2C_hotcount = <?php echo $BH2B_Hot[0];?>;
	
	var BH3A_coolcount = <?php echo $BH3A_Cool[0];?>;
	var BH3A_comfycount = <?php echo $BH3A_Comfy[0];?>;
	var BH3A_hotcount = <?php echo $BH3A_Hot[0];?>;
	var BH3B_coolcount = <?php echo $BH3B_Cool[0];?>;
	var BH3B_comfycount = <?php echo $BH3B_Comfy[0];?>;
	var BH3B_hotcount = <?php echo $BH3B_Hot[0];?>;
	var BH3C_coolcount = <?php echo $BH3B_Cool[0];?>;
	var BH3C_comfycount = <?php echo $BH3B_Comfy[0];?>;
	var BH3C_hotcount = <?php echo $BH3B_Hot[0];?>;

	var BH4A_coolcount = <?php echo $BH4A_Cool[0];?>;
	var BH4A_comfycount = <?php echo $BH4A_Comfy[0];?>;
	var BH4A_hotcount = <?php echo $BH4A_Hot[0];?>;
	var BH4B_coolcount = <?php echo $BH4B_Cool[0];?>;
	var BH4B_comfycount = <?php echo $BH4B_Comfy[0];?>;
	var BH4B_hotcount = <?php echo $BH4B_Hot[0];?>;
	var BH4C_coolcount = <?php echo $BH4B_Cool[0];?>;
	var BH4C_comfycount = <?php echo $BH4B_Comfy[0];?>;
	var BH4C_hotcount = <?php echo $BH4B_Hot[0];?>;

	var BH5A_coolcount = <?php echo $BH5A_Cool[0];?>;
	var BH5A_comfycount = <?php echo $BH5A_Comfy[0];?>;
	var BH5A_hotcount = <?php echo $BH5A_Hot[0];?>;
	var BH5B_coolcount = <?php echo $BH5B_Cool[0];?>;
	var BH5B_comfycount = <?php echo $BH5B_Comfy[0];?>;
	var BH5B_hotcount = <?php echo $BH5B_Hot[0];?>;
	var BH5C_coolcount = <?php echo $BH5B_Cool[0];?>;
	var BH5C_comfycount = <?php echo $BH5B_Comfy[0];?>;
	var BH5C_hotcount = <?php echo $BH5B_Hot[0];?>;

	var BH6A_hotcount = <?php echo $BH6A_Hot[0];?>;
	var BH6B_coolcount = <?php echo $BH6B_Cool[0];?>;
	var BH6B_comfycount = <?php echo $BH6B_Comfy[0];?>;
	var BH6B_hotcount = <?php echo $BH6B_Hot[0];?>;
	var BH6C_coolcount = <?php echo $BH6B_Cool[0];?>;
	var BH6C_comfycount = <?php echo $BH6B_Comfy[0];?>;
	var BH6C_hotcount = <?php echo $BH6B_Hot[0];?>;					
//}

var gdata = [
				{
					value: BHGA_coolcount + BHGB_coolcount + BHGC_coolcount,
					color:"#F38630"
				},
				{
					value : BHGA_comfycount + BHGB_comfycount + BHGC_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BHGA_hotcount + BHGB_hotcount + BHGC_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie1 = new Chart(document.getElementById("g").getContext("2d")).Pie(gdata);

var fdata = [
				{
					value: BHFA_coolcount + BHFB_coolcount + BHFC_coolcount,
					color:"#F38630"
				},
				{
					value : BHFA_comfycount + BHFB_comfycount + BHFC_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BHFA_hotcount + BHFB_hotcount + BHFC_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie = new Chart(document.getElementById("fa").getContext("2d")).Pie(fdata);

var sdata = [
				{
					value: BH1B_coolcount,
					color:"#F38630"
				},
				{
					value : BH1B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH1B_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie3 = new Chart(document.getElementById("fb").getContext("2d")).Pie(fbdata);

var sadata = [
				{
					value: BH2A_coolcount,
					color:"#F38630"
				},
				{
					value : BH2A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH2A_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie4 = new Chart(document.getElementById("sa").getContext("2d")).Pie(sadata);

var sbdata = [
				{
					value: BH2B_coolcount,
					color:"#F38630"
				},
				{
					value : BH2B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH2B_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie5 = new Chart(document.getElementById("sb").getContext("2d")).Pie(sbdata);

var sbdata = [
				{
					value: BH2B_coolcount,
					color:"#F38630"
				},
				{
					value : BH2B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH2B_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie5 = new Chart(document.getElementById("sb").getContext("2d")).Pie(sbdata);

var tadata = [
				{
					value: BH3A_coolcount,
					color:"#F38630"
				},
				{
					value : BH3A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH3A_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie6 = new Chart(document.getElementById("ta").getContext("2d")).Pie(tadata);

var tbdata = [
				{
					value: BH3B_coolcount,
					color:"#F38630"
				},
				{
					value : BH3B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH3B_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie7 = new Chart(document.getElementById("tb").getContext("2d")).Pie(tbdata);

var foadata = [
				{
					value: BH4A_coolcount,
					color:"#F38630"
				},
				{
					value : BH4A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH4A_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie8 = new Chart(document.getElementById("foa").getContext("2d")).Pie(foadata);

var foadata = [
				{
					value: BH4A_coolcount,
					color:"#F38630"
				},
				{
					value : BH4A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH4A_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie8 = new Chart(document.getElementById("foa").getContext("2d")).Pie(foadata);

var fobdata = [
				{
					value: BH4B_coolcount,
					color:"#F38630"
				},
				{
					value : BH4B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH4B_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie9 = new Chart(document.getElementById("fob").getContext("2d")).Pie(fobdata);

var fidata = [
				{
					value: BH5A_coolcount + BH5B_coolcount,
					color:"#F38630"
				},
				{
					value : BH5A_comfycount + BH5B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : BH5A_hotcount + BH5B_hotcount,
					color : "#69D2E7"
				}
			
			];
var myPie10 = new Chart(document.getElementById("fi").getContext("2d")).Pie(fidata);

	

</script>
</div>

</body>
</html>
