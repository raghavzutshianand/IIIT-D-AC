// JavaScript Document

function checkit()
{
	var bloc = "";
	//console.log("heyz");
	$.ajax(
	{
		
		//type: 'GET',
		url: 'http://192.168.50.44/bssidgetter.php',
		data: "",
		dataType: 'json',
		success: function (data)
		{
		 bloc = data[0];
		 $('boxnew').html(data[0]);
		 console.log(bloc);
		}
	});
	
	/*$.get( 'http://192.168.50.44/bssidgetter.php', function( data ) {
		  alert( "Data Loaded: " + data );
		  console.log()
	});*/
	
	
	//localStorage.setItem ('bloc', bloc);
	//document.getElementById('boxnew').value = bloc;
	
}