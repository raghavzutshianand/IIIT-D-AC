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
			<h1><a href="#">Academic Block</a></h1>
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
 
 //ACADEMIC BLOCK: Ground Floor
 $qACBG_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACBG') AND Userfeedback='Cold')");
 $ACBG_Cool = mysql_fetch_row($qACBG_Cool);
 $qACBG_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACBG') AND Userfeedback='Comfortable')");
 $ACBG_Comfy = mysql_fetch_row($qACBG_Comfy);
 $qACBG_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACBG') AND Userfeedback='Hot')");
 $ACBG_Hot = mysql_fetch_row($qACBG_Hot);

 //ACADEMIC BLOCK: 1st Floor A Wing
 $qACB1A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB1A') AND Userfeedback='Cold')");
 $ACB1A_Cool = mysql_fetch_row($qACB1A_Cool);
 $qACB1A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB1A') AND Userfeedback='Comfortable')");
 $ACB1A_Comfy = mysql_fetch_row($qACB1A_Comfy);
 $qACB1A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB1A') AND Userfeedback='Hot')");
 $ACB1A_Hot = mysql_fetch_row($qACB1A_Hot);

 //ACADEMIC BLOCK: 1st Floor B Wing
 $qACB1B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB1B') AND Userfeedback='Cold')");
 $ACB1B_Cool = mysql_fetch_row($qACB1B_Cool);
 $qACB1B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB1B') AND Userfeedback='Comfortable')");
 $ACB1B_Comfy = mysql_fetch_row($qACB1B_Comfy);
 $qACB1B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB1B') AND Userfeedback='Hot')");
 $ACB1B_Hot = mysql_fetch_row($qACB1B_Hot);

 //ACADEMIC BLOCK: 2nd Floor A Wing
 $qACB2A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB2A') AND Userfeedback='Cold')");
 $ACB2A_Cool = mysql_fetch_row($qACB2A_Cool);
 $qACB2A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB2A') AND Userfeedback='Comfortable')");
 $ACB2A_Comfy = mysql_fetch_row($qACB2A_Comfy);
 $qACB2A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB2A') AND Userfeedback='Hot')");
 $ACB2A_Hot = mysql_fetch_row($qACB2A_Hot);

 //ACADEMIC BLOCK: 2nd Floor B Wing
 $qACB2B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB2B') AND Userfeedback='Cold')");
 $ACB2B_Cool = mysql_fetch_row($qACB2B_Cool);
 $qACB2B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB2B') AND Userfeedback='Comfortable')");
 $ACB2B_Comfy = mysql_fetch_row($qACB2B_Comfy);
 $qACB2B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB2B') AND Userfeedback='Hot')");
 $ACB2B_Hot = mysql_fetch_row($qACB2B_Hot);
 
  //ACADEMIC BLOCK: 3rd Floor A Wing
 $qACB3A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB3A') AND Userfeedback='Cold')");
 $ACB3A_Cool = mysql_fetch_row($qACB3A_Cool);
 $qACB3A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB3A') AND Userfeedback='Comfortable')");
 $ACB3A_Comfy = mysql_fetch_row($qACB3A_Comfy);
 $qACB3A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB3A') AND Userfeedback='Hot')");
 $ACB3A_Hot = mysql_fetch_row($qACB3A_Hot);

 //ACADEMIC BLOCK: 3rd Floor B Wing
 $qACB3B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB3B') AND Userfeedback='Cold')");
 $ACB3B_Cool = mysql_fetch_row($qACB3B_Cool);
 $qACB3B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB3B') AND Userfeedback='Comfortable')");
 $ACB3B_Comfy = mysql_fetch_row($qACB3B_Comfy);
 $qACB3B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB3B') AND Userfeedback='Hot')");
 $ACB3B_Hot = mysql_fetch_row($qACB3B_Hot);
 
 //ACADEMIC BLOCK: 4th Floor A Wing
 $qACB4A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB4A') AND Userfeedback='Cold')");
 $ACB4A_Cool = mysql_fetch_row($qACB4A_Cool);
 $qACB4A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB4A') AND Userfeedback='Comfortable')");
 $ACB4A_Comfy = mysql_fetch_row($qACB4A_Comfy);
 $qACB4A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB4A') AND Userfeedback='Hot')");
 $ACB4A_Hot = mysql_fetch_row($qACB4A_Hot);

 //ACADEMIC BLOCK: 4th Floor B Wing
 $qACB4B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB4B') AND Userfeedback='Cold')");
 $ACB4B_Cool = mysql_fetch_row($qACB4B_Cool);
 $qACB4B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB4B') AND Userfeedback='Comfortable')");
 $ACB4B_Comfy = mysql_fetch_row($qACB4B_Comfy);
 $qACB4B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB4B') AND Userfeedback='Hot')");
 $ACB4B_Hot = mysql_fetch_row($qACB4B_Hot);
 
 //ACADEMIC BLOCK: 5th Floor A Wing
 $qACB5A_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB5A') AND Userfeedback='Cold')");
 $ACB5A_Cool = mysql_fetch_row($qACB5A_Cool);
 $qACB5A_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB5A') AND Userfeedback='Comfortable')");
 $ACB5A_Comfy = mysql_fetch_row($qACB5A_Comfy);
 $qACB5A_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB5A') AND Userfeedback='Hot')");
 $ACB5A_Hot = mysql_fetch_row($qACB5A_Hot);

 //ACADEMIC BLOCK: 5th Floor B Wing
 $qACB5B_Cool = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB5B') AND Userfeedback='Cold')");
 $ACB5B_Cool = mysql_fetch_row($qACB5B_Cool);
 $qACB5B_Comfy = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB5B') AND Userfeedback='Comfortable')");
 $ACB5B_Comfy = mysql_fetch_row($qACB5B_Comfy);
 $qACB5B_Hot = mysql_query("SELECT COUNT(Userfeedback) FROM comfortleveltable WHERE (BLocation='ACB' AND (FLocation='ACB5B') AND Userfeedback='Hot')");
 $ACB5B_Hot = mysql_fetch_row($qACB5B_Hot);  
 mysql_close();
  ?> 
  
<div align="center">

<span class="descriptions">From</span>
<input type="Text" id="demo1" maxlength="25" size="25"><a href="javascript:NewCal('demo1','ddmmmyyyy',true,24)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>


<span class="descriptions">To  </span>
<input type="Text" id="demo1" maxlength="25" size="25"><a href="javascript:NewCal('demo1','ddmmmyyyy',true,24)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>

<div style="height:250px; width:280px; float:left; margin-left:100px;">
	<canvas id="g" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">Ground Floor</div>
</div>
<div style="height:250px; width:280px; float:left">
	<canvas id="fa" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">1st Floor A Wing</div>
</div>
<div style="height:250px; width:280px; float:left; margin-right:100px;">
	<canvas id="fb" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">1st Floor B Wing</div>
</div>
<div style="height:250px; width:260px; float:left">
	<canvas id="sa" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">2nd Floor A Wing</div>
</div>
<div style="height:250px; width:260px; float:left">
	<canvas id="sb" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">2nd Floor B Wing</div>
</div>
<div style="height:250px; width:260px; float:left">
	<canvas id="ta" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">3rd Floor A Wing</div>
</div>
<div style="height:250px; width:260px; float:left">
	<canvas id="tb" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">3rd Floor B Wing</div>
</div>
<div style="height:250px; width:280px; float:left; margin-left:100px;">
	<canvas id="foa" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">4th Floor A Wing</div>
</div>
<div style="height:250px; width:280px; float:left">
	<canvas id="fob" height="200" width="200" style="padding:10px 20px"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">4th Floor B Wing</div>
</div>
<div style="height:250px; width:280px; float:left; margin-right:100px;">
	<canvas id="fi" height="200" width="200" style="padding:10px 20px;"></canvas>
	<div align="center" style="margin-left: auto;margin-right: auto;">5th Floor</div>
</div>
</div>
<script>

	var ACBG_coolcount = <?php echo $ACBG_Cool[0];?>;
	var ACBG_comfycount = <?php echo $ACBG_Comfy[0];?>;
	var ACBG_hotcount = <?php echo $ACBG_Hot[0];?>;
	
	var ACB1A_coolcount = <?php echo $ACB1A_Cool[0];?>;
	var ACB1A_comfycount = <?php echo $ACB1A_Comfy[0];?>;
	var ACB1A_hotcount = <?php echo $ACB1A_Hot[0];?>;
	var ACB1B_coolcount = <?php echo $ACB1B_Cool[0];?>;
	var ACB1B_comfycount = <?php echo $ACB1B_Comfy[0];?>;
	var ACB1B_hotcount = <?php echo $ACB1B_Hot[0];?>;
	
	var ACB2A_coolcount = <?php echo $ACB2A_Cool[0];?>;
	var ACB2A_comfycount = <?php echo $ACB2A_Comfy[0];?>;
	var ACB2A_hotcount = <?php echo $ACB2A_Hot[0];?>;
	var ACB2B_coolcount = <?php echo $ACB2B_Cool[0];?>;
	var ACB2B_comfycount = <?php echo $ACB2B_Comfy[0];?>;
	var ACB2B_hotcount = <?php echo $ACB2B_Hot[0];?>;
	
	var ACB3A_coolcount = <?php echo $ACB3A_Cool[0];?>;
	var ACB3A_comfycount = <?php echo $ACB3A_Comfy[0];?>;
	var ACB3A_hotcount = <?php echo $ACB3A_Hot[0];?>;
	var ACB3B_coolcount = <?php echo $ACB3B_Cool[0];?>;
	var ACB3B_comfycount = <?php echo $ACB3B_Comfy[0];?>;
	var ACB3B_hotcount = <?php echo $ACB3B_Hot[0];?>;
	
	var ACB4A_coolcount = <?php echo $ACB4A_Cool[0];?>;
	var ACB4A_comfycount = <?php echo $ACB4A_Comfy[0];?>;
	var ACB4A_hotcount = <?php echo $ACB4A_Hot[0];?>;
	var ACB4B_coolcount = <?php echo $ACB4B_Cool[0];?>;
	var ACB4B_comfycount = <?php echo $ACB4B_Comfy[0];?>;
	var ACB4B_hotcount = <?php echo $ACB4B_Hot[0];?>;
	
	var ACB5A_coolcount = <?php echo $ACB5A_Cool[0];?>;
	var ACB5A_comfycount = <?php echo $ACB5A_Comfy[0];?>;
	var ACB5A_hotcount = <?php echo $ACB5A_Hot[0];?>;
	var ACB5B_coolcount = <?php echo $ACB5B_Cool[0];?>;
	var ACB5B_comfycount = <?php echo $ACB5B_Comfy[0];?>;
	var ACB5B_hotcount = <?php echo $ACB5B_Hot[0];?>;

var gdata = [
				{
					value: ACBG_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACBG_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACBG_hotcount,
					color : "#F38630"
				}
			
			];
var myPie1 = new Chart(document.getElementById("g").getContext("2d")).Pie(gdata);

var fadata = [
				{
					value: ACB1A_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB1A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB1A_hotcount,
					color : "#F38630"
				}
			
			];
var myPie = new Chart(document.getElementById("fa").getContext("2d")).Pie(fadata);

var fbdata = [
				{
					value: ACB1B_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB1B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB1B_hotcount,
					color : "#F38630"
				}
			
			];
var myPie3 = new Chart(document.getElementById("fb").getContext("2d")).Pie(fbdata);

var sadata = [
				{
					value: ACB2A_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB2A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB2A_hotcount,
					color : "#F38630"
				}
			
			];
var myPie4 = new Chart(document.getElementById("sa").getContext("2d")).Pie(sadata);

var sbdata = [
				{
					value: ACB2B_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB2B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB2B_hotcount,
					color : "#F38630"
				}
			
			];
var myPie5 = new Chart(document.getElementById("sb").getContext("2d")).Pie(sbdata);

var sbdata = [
				{
					value: ACB2B_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB2B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB2B_hotcount,
					color : "#F38630"
				}
			
			];
var myPie5 = new Chart(document.getElementById("sb").getContext("2d")).Pie(sbdata);

var tadata = [
				{
					value: ACB3A_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB3A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB3A_hotcount,
					color : "#F38630"
				}
			
			];
var myPie6 = new Chart(document.getElementById("ta").getContext("2d")).Pie(tadata);

var tbdata = [
				{
					value: ACB3B_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB3B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB3B_hotcount,
					color : "#F38630"
				}
			
			];
var myPie7 = new Chart(document.getElementById("tb").getContext("2d")).Pie(tbdata);

var foadata = [
				{
					value: ACB4A_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB4A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB4A_hotcount,
					color : "#F38630"
				}
			
			];
var myPie8 = new Chart(document.getElementById("foa").getContext("2d")).Pie(foadata);

var foadata = [
				{
					value: ACB4A_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB4A_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB4A_hotcount,
					color : "#F38630"
				}
			
			];
var myPie8 = new Chart(document.getElementById("foa").getContext("2d")).Pie(foadata);

var fobdata = [
				{
					value: ACB4B_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB4B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB4B_hotcount,
					color : "#F38630"
				}
			
			];
var myPie9 = new Chart(document.getElementById("fob").getContext("2d")).Pie(fobdata);

var fidata = [
				{
					value: ACB5A_coolcount + ACB5B_coolcount,
					color:"#69D2E7"
				},
				{
					value : ACB5A_comfycount + ACB5B_comfycount,
					color : "#E0E4CC"
				},
				{
					value : ACB5A_hotcount + ACB5B_hotcount,
					color : "#F38630"
				}
			
			];
var myPie10 = new Chart(document.getElementById("fi").getContext("2d")).Pie(fidata);
	

</script>
</div>

</body>
</html>
