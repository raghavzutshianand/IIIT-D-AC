/*
 * This Javascript gets the BSSID which the phone is connected to (using PhoneGap WifiPlugin) and matches it with the BSSIDs around 
 * the campus. The BSSID which matches automatically shows up on the 2 dropdowns using this script.
 */
 
function bssidmapping()
{	
	var bssid = localStorage.getItem('bssidofap');
	document.getElementById('bssidbox').value = bssid;
	
	
	
	if (bssid == "c4:0a:cb:5c:0b:f0" || bssid == "c4:0a:cb:5c:0b:f1" || bssid == "c4:0a:cb:5c:0b:f2" || bssid == "c4:0a:cb:5c:0b:f3"|| bssid == "c4:0a:cb:5c:0b:f4" || bssid == "c4:0a:cb:2d:97:10" || bssid == "c4:0a:cb:2d:97:11" || bssid == "c4:0a:cb:2d:97:12" || bssid == "c4:0a:cb:2d:97:13" || bssid == "c4:0a:cb:2d:97:14")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACBG'); $('#selectfloor').selectmenu("refresh", true);
	}
	else if (bssid == "28:94:0f:d6:d8:85" || bssid == "c4:0a:cb:2d:c6:00" || bssid == "c4:0a:cb:2d:c6:01" || bssid == "c4:0a:cb:2d:c6:02" || bssid == "c4:0a:cb:2d:c6:03" || bssid == "c4:0a:cb:2d:c6:04")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB1A'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:11:3f:c0" || bssid == "c4:0a:cb:25:c6:c1" || bssid == "c4:0a:cb:25:c6:c2" || bssid == "c4:0a:cb:25:c6:c3" || bssid == "c4:0a:cb:25:c6:c4")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB1B'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:00:55:8b")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB1S'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------ACB 2ndfloor----------------------------------------
	else if (bssid == "c4:64:13:11:40:5e" || bssid == "c4:0a:cb:2d:78:00" || bssid == "c4:0a:cb:2d:78:01" || bssid == "c4:0a:cb:2d:78:02" || bssid == "c4:0a:cb:2d:78:03" || bssid == "c4:0a:cb:2d:78:04")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB2A'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "28:94:0f:d6:d7:2e" || bssid == "c4:0a:cb:25:d8:20" || bssid == "c4:0a:cb:25:d8:21" || bssid == "c4:0a:cb:25:d8:22" || bssid == "c4:0a:cb:25:d8:23" || bssid == "c4:0a:cb:25:d8:24")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB2B'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------ACB 3rdfloor----------------------------------------
	else if (bssid == "c4:64:13:11:3f:1b" || bssid == "c4:0a:cb:25:bf:70" || bssid == "c4:0a:cb:25:bf:71" || bssid == "c4:0a:cb:25:bf:72" || bssid == "c4:0a:cb:25:bf:73" || bssid == "c4:0a:cb:25:bf:74")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB3A'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "28:94:0f:d6:d8:c1" || bssid == "c4:0a:cb:5c:07:00" || bssid == "c4:0a:cb:5c:07:01" || bssid == "c4:0a:cb:5c:07:02" || bssid == "c4:0a:cb:5c:07:03" || bssid == "c4:0a:cb:5c:07:04")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB3B'); $('#selectfloor').selectmenu("refresh", true);	
	}
	//----------------------------------ACB 4thfloor----------------------------------------
	else if (bssid == "c4:0a:cb:25:e4:81" || bssid == "c4:0a:cb:2c:fa:d0" || bssid == "c4:0a:cb:2c:fa:d1" || bssid == "c4:0a:cb:2c:fa:d2" || bssid == "c4:0a:cb:2c:fa:d3" || bssid == "c4:0a:cb:2c:fa:d4")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB4A'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:0a:cb:2c:fa:d1" || bssid == "c4:0a:cb:25:e4:80" || bssid == "c4:0a:cb:25:e4:81" || bssid == "c4:0a:cb:25:e4:82" || bssid == "c4:0a:cb:25:e4:83" || bssid == "c4:0a:cb:25:e4:84")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB4B'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------ACB 5thfloor----------------------------------------
	else if (bssid == "c4:64:13:11:44:5a" || bssid == "c4:0a:cb:5c:20:90" || bssid == "c4:0a:cb:5c:20:91" || bssid == "c4:0a:cb:5c:20:92" || bssid == "c4:0a:cb:5c:20:93" || bssid == "c4:0a:cb:5c:20:94")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB5A'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:11:3e:43" || bssid == "c4:0a:cb:2c:f4:60" || bssid == "c4:0a:cb:2c:f4:61" || bssid == "c4:0a:cb:2c:f4:62" || bssid == "c4:0a:cb:2c:f4:63" || bssid == "c4:0a:cb:2c:f4:64")
	{
		$('#selectblock').val('ACB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('ACB5B'); $('#selectfloor').selectmenu("refresh", true);			
	}	
	//---------------------------------BH G Floor------------------------------------------
	else if (bssid == "28:94:0f:d6:d8:13" || bssid == "c4:0a:cb:2d:bb:d0" || bssid == "c4:0a:cb:2d:bb:d1" || bssid == "c4:0a:cb:2d:bb:d2" || bssid == "c4:0a:cb:2d:bb:d3" || bssid == "c4:0a:cb:2d:bb:d4")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BHGA'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:00:52:f6" || bssid == "c4:0a:cb:25:c8:10" || bssid == "c4:0a:cb:25:c8:11" || bssid == "c4:0a:cb:25:c8:12" || bssid == "c4:0a:cb:25:c8:13" || bssid == "c4:0a:cb:25:c8:14")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BHGB'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:2b:e0:3a" || bssid == "c4:0a:cb:5c:20:e0" || bssid == "c4:0a:cb:5c:20:e1" || bssid == "c4:0a:cb:5c:20:e2" || bssid == "c4:0a:cb:5c:20:e3" || bssid == "c4:0a:cb:5c:20:e4")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BHGC'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------BH 1stfloor----------------------------------------
	else if (bssid == "c4:64:13:2b:e0:09" || bssid == "c4:0a:cb:2d:d5:70" || bssid == "c4:0a:cb:2d:d5:71" || bssid == "c4:0a:cb:2d:d5:72" || bssid == "c4:0a:cb:2d:d5:73" || bssid == "c4:0a:cb:2d:d5:74")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH1A'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "28:94:0f:d6:d8:6e" || bssid == "c4:0a:cb:2d:ca:90" || bssid == "c4:0a:cb:2d:ca:91" || bssid == "c4:0a:cb:2d:ca:92" || bssid == "c4:0a:cb:2d:ca:93" || bssid == "c4:0a:cb:2d:ca:94")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH1B'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:00:54:fc" || bssid == "28:94:0f:c9:2a:f8" || bssid == "c4:0a:cb:25:e3:c0" || bssid == "c4:0a:cb:25:e3:c1" || bssid == "c4:0a:cb:25:e3:c2" || bssid == "c4:0a:cb:25:e3:c3" || bssid == "c4:0a:cb:25:e3:c4" || bssid == "c4:0a:cb:25:f5:40" || bssid == "c4:0a:cb:25:f5:41" || bssid == "c4:0a:cb:25:f5:42" || bssid == "c4:0a:cb:25:f5:43" || bssid == "c4:0a:cb:25:f5:44")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH1C'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------BH 2ndfloor----------------------------------------
	else if (bssid == "c4:64:13:11:43:9e" || bssid == "c4:0a:cb:25:ff:c0" || bssid == "c4:0a:cb:25:ff:c1" || bssid == "c4:0a:cb:25:ff:c2" || bssid == "c4:0a:cb:25:ff:c3" || bssid == "c4:0a:cb:25:ff:c4")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH2A'); $('#selectfloor').selectmenu("refresh", true);			
	}	
	else if (bssid == "c4:64:13:5b:7e:6f" || bssid == "c4:0a:cb:2d:d0:80" || bssid == "c4:0a:cb:2d:d0:81" || bssid == "c4:0a:cb:2d:d0:82" || bssid == "c4:0a:cb:2d:d0:83" || bssid == "c4:0a:cb:2d:d0:84")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH2B'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "28:94:0f:d6:d5:c8" || bssid == "c4:64:13:11:43:b6" || bssid == "c4:0a:cb:25:d1:80" || bssid == "c4:0a:cb:25:d1:81" || bssid == "c4:0a:cb:25:d1:82" || bssid == "c4:0a:cb:25:d1:83" || bssid == "c4:0a:cb:25:d1:84" || bssid == "c4:0a:cb:2d:ce:40" || bssid == "c4:0a:cb:2d:ce:41" || bssid == "c4:0a:cb:2d:ce:42" || bssid == "c4:0a:cb:2d:ce:43")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH2C'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------BH 3rdfloor----------------------------------------
	else if (bssid == "28:94:0f:d6:d5:e1" || bssid == "c4:0a:cb:25:bb:10" || bssid == "c4:0a:cb:25:bb:11" || bssid == "c4:0a:cb:25:bb:12" || bssid == "c4:0a:cb:25:bb:13" || bssid == "c4:0a:cb:25:bb:14")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH3A'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "28:94:0f:c9:2a:0a" || bssid == "c4:0a:cb:2d:7b:f0" || bssid == "c4:0a:cb:2d:7b:f1"  || bssid == "c4:0a:cb:2d:7b:f2" || bssid == "c4:0a:cb:2d:7b:f3"  || bssid == "c4:0a:cb:2d:7b:f4")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH3B'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "28:94:0f:d6:d8:26" || bssid == "28:94:0f:d6:d8:ec" || bssid == "c4:0a:cb:25:fe:d0" || bssid == "c4:0a:cb:25:fe:d1" || bssid == "c4:0a:cb:25:fe:d2" || bssid == "c4:0a:cb:25:fe:d3" || bssid == "c4:0a:cb:25:fe:d4" || bssid == "c4:0a:cb:2d:dd:30" || bssid == "c4:0a:cb:2d:dd:31" || bssid == "c4:0a:cb:2d:dd:32" || bssid == "c4:0a:cb:2d:dd:33" || bssid == "c4:0a:cb:2d:dd:34")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH3C'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------BH 4thfloor----------------------------------------
	else if (bssid == "c4:64:13:2b:e0:08" || bssid == "c4:0a:cb:5c:0e:80" || bssid == "c4:0a:cb:5c:0e:81" || bssid == "c4:0a:cb:5c:0e:82" || bssid == "c4:0a:cb:5c:0e:83" || bssid == "c4:0a:cb:5c:0e:84")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH4A'); $('#selectfloor').selectmenu("refresh", true);			
	}	

	else if (bssid == "c4:64:13:11:41:2d" || bssid == "c4:0a:cb:2d:81:b0" || bssid == "c4:0a:cb:2d:81:b1" || bssid == "c4:0a:cb:2d:81:b2" || bssid == "c4:0a:cb:2d:81:b3" || bssid == "c4:0a:cb:2d:81:b4")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH4B'); $('#selectfloor').selectmenu("refresh", true);			
	}	
	else if (bssid == "28:94:0f:d6:d8:79"|| bssid == "28:94:0f:d6:d8:88" || bssid == "c4:0a:cb:2d:ca:80" || bssid == "c4:0a:cb:2d:ca:81" || bssid == "c4:0a:cb:2d:ca:82" || bssid == "c4:0a:cb:2d:ca:83" || bssid == "c4:0a:cb:2d:ca:84" || bssid == "c4:0a:cb:2d:c6:40" || bssid == "c4:0a:cb:2d:c6:41" || bssid == "c4:0a:cb:2d:c6:42" || bssid == "c4:0a:cb:2d:c6:43" || bssid == "c4:0a:cb:2d:c6:44")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH4C'); $('#selectfloor').selectmenu("refresh", true);		
	}
	//----------------------------------BH 5thfloor----------------------------------------
	else if (bssid == "c4:64:13:11:43:c5" || bssid == "c4:0a:cb:2d:dd:70" || bssid == "c4:0a:cb:2d:dd:71" || bssid == "c4:0a:cb:2d:dd:72" || bssid == "c4:0a:cb:2d:dd:73" || bssid == "c4:0a:cb:2d:dd:74")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH5A'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:11:42:eb" || bssid == "28:94:0f:d6:d8:de" || bssid == "c4:0a:cb:25:ff:70" || bssid == "c4:0a:cb:25:ff:71" || bssid == "c4:0a:cb:25:ff:72" || bssid == "c4:0a:cb:25:ff:73" || bssid == "c4:0a:cb:25:ff:74" || bssid == "c4:0a:cb:2d:dd:c0" || bssid == "c4:0a:cb:2d:dd:c1"  || bssid == "c4:0a:cb:2d:dd:c2"  || bssid == "c4:0a:cb:2d:dd:c3"  || bssid == "c4:0a:cb:2d:dd:c4")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH5C'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//----------------------------------BH 6thfloor----------------------------------------
	else if (bssid == "28:94:0f:d6:d8:05" || bssid == "64:a0:e7:91:43:90" || bssid == "64:a0:e7:91:43:91" || bssid == "64:a0:e7:91:43:92" || bssid == "64:a0:e7:91:43:93" || bssid == "64:a0:e7:91:43:94") 
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH6A'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:2b:e0:0e" || bssid == "c4:0a:cb:2d:d5:80" || bssid == "c4:0a:cb:2d:d5:81" || bssid == "c4:0a:cb:2d:d5:82" || bssid == "c4:0a:cb:2d:d5:83" || bssid == "c4:0a:cb:2d:d5:84")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH6B'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:11:43:b2" || bssid == "c4:0a:cb:2d:ce:30" || bssid == "c4:0a:cb:2d:ce:31" || bssid == "c4:0a:cb:2d:ce:32" || bssid == "c4:0a:cb:2d:ce:33" || bssid == "c4:0a:cb:2d:ce:34")
	{
		$('#selectblock').val('BH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('BH6C'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//-----------------------------------------------------------------------------------
	else if (bssid == "c4:64:13:11:43:41" || bssid == "28:94:0f:d6:d6:d7" || bssid == "28:94:0f:d6:d8:70"|| bssid == "c4:0a:cb:2d:84:00" || bssid == "c4:0a:cb:5c:10:e0" || bssid == "c4:0a:cb:25:ff:50" || bssid == "c4:0a:cb:2d:84:01" || bssid == "c4:0a:cb:5c:10:e1" || bssid == "c4:0a:cb:25:ff:51" || bssid == "c4:0a:cb:2d:84:02" || bssid == "c4:0a:cb:5c:10:e2" || bssid == "c4:0a:cb:25:ff:52" || bssid == "c4:0a:cb:2d:84:03" || bssid == "c4:0a:cb:5c:10:e3" || bssid == "c4:0a:cb:25:ff:53" || bssid == "c4:0a:cb:2d:84:04" || bssid == "c4:0a:cb:5c:10:e4" || bssid == "c4:0a:cb:25:ff:54")
	{
		$('#selectblock').val('DB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('DBG'); $('#selectfloor').selectmenu("refresh", true);			
	}	
	else if (bssid == "c4:64:13:11:43:a1" || bssid == "c4:0a:cb:2d:c4:80" || bssid == "c4:0a:cb:2d:c4:81" || bssid == "c4:0a:cb:2d:c4:82" || bssid == "c4:0a:cb:2d:c4:83" || bssid == "c4:0a:cb:2d:c4:84")
	{
		$('#selectblock').val('DB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('DB1'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:11:3f:b8" || bssid == "c4:0a:cb:2d:84:e0" || bssid == "c4:0a:cb:2d:84:e1" || bssid == "c4:0a:cb:2d:84:e2" || bssid == "c4:0a:cb:2d:84:e3" || bssid == "c4:0a:cb:2d:84:e4")
	{
		$('#selectblock').val('DB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('DB2'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:00:55:45" || bssid == "c4:0a:cb:5c:03:20" || bssid == "c4:0a:cb:5c:03:21" || bssid == "c4:0a:cb:5c:03:22" || bssid == "c4:0a:cb:5c:03:23" || bssid == "c4:0a:cb:5c:03:24")
	{
		$('#selectblock').val('DB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('DB3'); $('#selectfloor').selectmenu("refresh", true);			
	}
	//-----------------------------------------------------------------------------------
	else if (bssid == "28:94:0f:c9:29:d0" || bssid == "c4:64:13:5b:7e:58" || bssid == "c4:0a:cb:2d:7a:f0" || bssid == "c4:0a:cb:5c:19:50"|| bssid == "c4:0a:cb:2d:7a:f1" || bssid == "c4:0a:cb:5c:19:51" || bssid == "c4:0a:cb:2d:7a:f2" || bssid == "c4:0a:cb:5c:19:52" || bssid == "c4:0a:cb:2d:7a:f3" || bssid == "c4:0a:cb:5c:19:53" || bssid == "c4:0a:cb:2d:7a:f4" || bssid == "c4:0a:cb:5c:19:54")
	{
		$('#selectblock').val('GH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('GHG'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:11:43:35" || bssid == "c4:64:13:11:3b:97" || bssid == "c4:64:13:11:42:69" ||bssid == "c4:0a:cb:25:db:60" || bssid == "c4:0a:cb:25:fd:10" || bssid == "c4:0a:cb:25:96:50" ||bssid == "c4:0a:cb:25:db:61" || bssid == "c4:0a:cb:25:fd:11" || bssid == "c4:0a:cb:25:96:51" ||bssid == "c4:0a:cb:25:db:62" || bssid == "c4:0a:cb:25:fd:12" || bssid == "c4:0a:cb:25:96:52" ||bssid == "c4:0a:cb:25:db:63" || bssid == "c4:0a:cb:25:fd:13" || bssid == "c4:0a:cb:25:96:53" ||bssid == "c4:0a:cb:25:db:64" || bssid == "c4:0a:cb:25:fd:14" || bssid == "c4:0a:cb:25:96:54")
	{
		$('#selectblock').val('GH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('GH1'); $('#selectfloor').selectmenu("refresh", true);			
	}	
	else if (bssid == "28:94:0f:d6:d6:22" || bssid == "c4:64:13:00:52:74" || bssid == "c4:0a:cb:2d:7c:f0" || bssid == "c4:0a:cb:25:c3:f0" || bssid == "c4:0a:cb:2d:7c:f1" || bssid == "c4:0a:cb:25:c3:f1" || bssid == "c4:0a:cb:2d:7c:f2" || bssid == "c4:0a:cb:25:c3:f2" || bssid == "c4:0a:cb:2d:7c:f3" || bssid == "c4:0a:cb:25:c3:f3" || bssid == "c4:0a:cb:2d:7c:f4" || bssid == "c4:0a:cb:25:c3:f4")
	{
		$('#selectblock').val('GH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('GH2'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "28:94:0f:d6:d6:59" || bssid == "c4:64:13:11:43:74" || bssid == "c4:64:13:11:3b:b6" || bssid == "c4:0a:cb:5c:11:60" || bssid == "c4:0a:cb:25:af:10" || bssid == "c4:0a:cb:25:cf:00" || bssid == "c4:0a:cb:5c:11:61" || bssid == "c4:0a:cb:25:af:11" || bssid == "c4:0a:cb:25:cf:01" || bssid == "c4:0a:cb:5c:11:62" || bssid == "c4:0a:cb:25:af:12" || bssid == "c4:0a:cb:25:cf:02" || bssid == "c4:0a:cb:5c:11:63" || bssid == "c4:0a:cb:25:af:13" || bssid == "c4:0a:cb:25:cf:03" || bssid == "c4:0a:cb:5c:11:64" || bssid == "c4:0a:cb:25:af:14" || bssid == "c4:0a:cb:25:cf:04")
	{
		$('#selectblock').val('GH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('GH3'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:00:55:56" || bssid == "c4:64:13:11:3f:b9" || bssid == "c4:0a:cb:5c:04:10" || bssid == "c4:0a:cb:2d:84:f0" || bssid == "c4:0a:cb:5c:04:11" || bssid == "c4:0a:cb:2d:84:f1" || bssid == "c4:0a:cb:5c:04:12" || bssid == "c4:0a:cb:2d:84:f2" || bssid == "c4:0a:cb:5c:04:13" || bssid == "c4:0a:cb:2d:84:f3" || bssid == "c4:0a:cb:5c:04:14" || bssid == "c4:0a:cb:2d:84:f4")
	{
		$('#selectblock').val('GH'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('GH4'); $('#selectfloor').selectmenu("refresh", true);
	}
	//-----------------------------------------------------------------------------------
	else if (bssid == "28:94:0f:c9:28:fd" || bssid == "c4:64:13:5b:7e:68" || bssid == "28:94:0f:c9:29:b2" || bssid == "c4:0a:cb:5c:14:c0" || bssid == "c4:0a:cb:25:bb:70" || bssid == "c4:0a:cb:25:b5:a0" || bssid == "c4:0a:cb:5c:14:c1" || bssid == "c4:0a:cb:25:bb:71" || bssid == "c4:0a:cb:25:b5:a1" || bssid == "c4:0a:cb:5c:14:c2" || bssid == "c4:0a:cb:25:bb:72" || bssid == "c4:0a:cb:25:b5:a2" || bssid == "c4:0a:cb:5c:14:c3" || bssid == "c4:0a:cb:25:bb:73" || bssid == "c4:0a:cb:25:b5:a3" || bssid == "c4:0a:cb:5c:14:c4" || bssid == "c4:0a:cb:25:bb:74" || bssid == "c4:0a:cb:25:b5:a4") 
	{
		$('#selectblock').val('LCB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LCBG'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "28:94:0f:d6:d7:bd" || bssid == "28:94:0f:d6:d8:86" || bssid == "c4:64:13:11:3d:60" || bssid == "c4:0a:cb:25:f2:d0" || bssid == "c4:0a:cb:2d:48:20" || bssid == "c4:0a:cb:2d:c6:30"|| bssid == "c4:0a:cb:25:f2:d1" || bssid == "c4:0a:cb:2d:48:21" || bssid == "c4:0a:cb:2d:c6:31" || bssid == "c4:0a:cb:25:f2:d2" || bssid == "c4:0a:cb:2d:48:22" || bssid == "c4:0a:cb:2d:c6:32" || bssid == "c4:0a:cb:25:f2:d3" || bssid == "c4:0a:cb:2d:48:23" || bssid == "c4:0a:cb:2d:c6:33" || bssid == "c4:0a:cb:25:f2:d4" || bssid == "c4:0a:cb:2d:48:24" || bssid == "c4:0a:cb:2d:c6:34")
	{
		$('#selectblock').val('LCB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LCB1'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:11:40:62" || bssid == "28:94:0f:d6:d8:63" || bssid == "c4:64:13:11:41:d7" || bssid == "c4:0a:cb:2d:7d:50" || bssid == "c4:0a:cb:2c:e6:20" || bssid == "c4:0a:cb:5c:0f:10" || bssid == "c4:0a:cb:2d:7d:51" || bssid == "c4:0a:cb:2c:e6:21" || bssid == "c4:0a:cb:5c:0f:11" || bssid == "c4:0a:cb:2d:7d:52" || bssid == "c4:0a:cb:2c:e6:22" || bssid == "c4:0a:cb:5c:0f:12" || bssid == "c4:0a:cb:2d:7d:53" || bssid == "c4:0a:cb:2c:e6:23" || bssid == "c4:0a:cb:5c:0f:13" || bssid == "c4:0a:cb:2d:7d:54" || bssid == "c4:0a:cb:2c:e6:24" || bssid == "c4:0a:cb:5c:0f:14")
	{
		$('#selectblock').val('LCB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LCB2'); $('#selectfloor').selectmenu("refresh", true);
	}
	else if (bssid == "c4:64:13:2b:e0:0b" || bssid == "c4:0a:cb:2d:d4:d0" || bssid == "c4:0a:cb:2d:d4:d1" || bssid == "c4:0a:cb:2d:d4:d2" || bssid == "c4:0a:cb:2d:d4:d3" || bssid == "c4:0a:cb:2d:d4:d4")
	{
		$('#selectblock').val('LCB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LCBC21'); $('#selectfloor').selectmenu("refresh", true);
	}
	//-----------------------------------------------------------------------------------
	else if (bssid == "28:94:0f:d6:d7:9a" || bssid == "28:94:0f:c9:29:b8" || bssid == "c4:0a:cb:25:b5:50" || bssid == "c4:0a:cb:2d:95:a0" || bssid == "c4:0a:cb:25:b5:51" || bssid == "c4:0a:cb:2d:95:a1" || bssid == "c4:0a:cb:25:b5:52" || bssid == "c4:0a:cb:2d:95:a2" || bssid == "c4:0a:cb:25:b5:53" || bssid == "c4:0a:cb:2d:95:a3" || bssid == "c4:0a:cb:25:b5:54" || bssid == "c4:0a:cb:2d:95:a4")
	{//MY HOUSE BSSID ADDDED HERE 
		$('#selectblock').val('LB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LBG'); $('#selectfloor').selectmenu("refresh", true);		
	}
	else if (bssid == "c4:64:13:00:55:ba" || bssid == "c4:64:13:00:54:c2" || bssid == "c4:64:13:11:40:90"|| bssid == "c4:0a:cb:25:ce:60" || bssid == "c4:0a:cb:5c:11:f0" || bssid == "c4:0a:cb:25:f6:a0" || bssid == "c4:0a:cb:25:ce:61" || bssid == "c4:0a:cb:5c:11:f1" || bssid == "c4:0a:cb:25:f6:a1" || bssid == "c4:0a:cb:25:ce:62" || bssid == "c4:0a:cb:5c:11:f2" || bssid == "c4:0a:cb:25:f6:a2" || bssid == "c4:0a:cb:25:ce:63" || bssid == "c4:0a:cb:5c:11:f3" || bssid == "c4:0a:cb:25:f6:a3" || bssid == "c4:0a:cb:25:ce:64" || bssid == "c4:0a:cb:5c:11:f4" || bssid == "c4:0a:cb:25:f6:a4")
	{
		$('#selectblock').val('LB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LB1'); $('#selectfloor').selectmenu("refresh", true);			
	}
	else if (bssid == "c4:64:13:11:3f:f8" || bssid == "28:94:0f:c9:2a:d5" || bssid == "c4:64:13:00:53:ea"|| bssid == "c4:0a:cb:2d:a4:10" || bssid == "c4:0a:cb:25:b7:60" || bssid == "c4:0a:cb:25:f3:50" || bssid == "c4:0a:cb:2d:a4:11" || bssid == "c4:0a:cb:25:b7:61" || bssid == "c4:0a:cb:25:f3:51" || bssid == "c4:0a:cb:2d:a4:12" || bssid == "c4:0a:cb:25:b7:62" || bssid == "c4:0a:cb:25:f3:52" || bssid == "c4:0a:cb:2d:a4:13" || bssid == "c4:0a:cb:25:b7:63" || bssid == "c4:0a:cb:25:f3:53" || bssid == "c4:0a:cb:2d:a4:14" || bssid == "c4:0a:cb:25:b7:64" || bssid == "c4:0a:cb:25:f3:54")
	{
		$('#selectblock').val('LB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LB2'); $('#selectfloor').selectmenu("refresh", true);
	}
	else if (bssid == "c4:64:13:11:3b:dd" || bssid == "28:94:0f:d6:d7:b6" || bssid == "c4:64:13:00:50:75" || bssid == "c4:0a:cb:2d:61:30" || bssid == "c4:0a:cb:25:e6:30" || bssid == "c4:0a:cb:25:b1:a0" || bssid == "c4:0a:cb:2d:61:31" || bssid == "c4:0a:cb:25:e6:31" || bssid == "c4:0a:cb:25:b1:a1" || bssid == "c4:0a:cb:2d:61:32" || bssid == "c4:0a:cb:25:e6:32" || bssid == "c4:0a:cb:25:b1:a2" || bssid == "c4:0a:cb:2d:61:33" || bssid == "c4:0a:cb:25:e6:33" || bssid == "c4:0a:cb:25:b1:a3" || bssid == "c4:0a:cb:2d:61:34" || bssid == "c4:0a:cb:25:e6:34" || bssid == "c4:0a:cb:25:b1:a4")
	{
		$('#selectblock').val('LB'); $('#selectblock').selectmenu("refresh", true);
		menusetter();
		$('#selectfloor').val('LB3'); $('#selectfloor').selectmenu("refresh", true);
	}
}