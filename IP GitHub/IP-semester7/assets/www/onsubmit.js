// JavaScript Document

function connect() // send an ajax request to the server URL containing the PHP
{
        
        console.log("Function connect entered...");
        
        var e = document.getElementById('selectblock');
        var Blocval = e.options[e.selectedIndex].value;

        var f = document.getElementById('selectfloor');
        var Flocval = f.options[f.selectedIndex].value;
        
        console.log("The selected option is: " + Blocval);
        console.log("The selected option is: " + Flocval);
        
        var timestamp = new Date().getTime();
        
        console.log("Timestamp is: " + timestamp);
        
        var feelingval = $('input[name="radio-choice"]:checked').val();
        console.log("The user is feeling: " + feelingval);
        
        var commentval = document.getElementById('comment').value;
        
        console.log(commentval);

        $.ajax(
        {
                type:'POST',
                data:{ 
                'timestamp': timestamp,
                'Blocval':Blocval,
                'Flocval':Flocval,
                'feelingval':feelingval,
                'commentval':commentval
                },
                url:"http://192.168.50.44/save.php",
                
                success: function(data){
                        //console.log(data);
                        console.log("AJAX call made...");
                        alert('Your feedback recorded, Thank You!');
                },
                error: function(data){
                        console.log("ERRORIS:" + data);
                        alert("There was an error in recording your input!");
                }
        });
         return false;
}