
/*$(document).ready(function() {

    $("#selectblock").change(function() {*/

function menusetter()
{
        var val = $("#selectblock").val();
        if (val == "ACB") 
        {
            $("#selectfloor").html("<option value='ACBG' selected>Ground floor</option>" +
            		"<option value='ACB1A'>1st floor A Wing</option>" +
            		"<option value='ACB1B'>1st floor B Wing</option>" +
            		"<option value='ACB1S'>1st floor Server Room</option>" +
            		"<option value='ACB2A'>2nd floor A Wing</option>" +
            		"<option value='ACB2B'>2nd floor B Wing</option>" +
            		"<option value='ACB3A'>3rd floor A Wing</option>" +
            		"<option value='ACB3B'>3rd floor B Wing</option>" +   
            		"<option value='ACB4A'>4th floor A Wing</option>" +
            		"<option value='ACB4B'>4th floor B Wing</option>" +  
            		"<option value='ACB5A'>5th floor A Wing</option>" +
            		"<option value='ACB5B'>5th floor B Wing</option>");
        } 
        else if (val == "BH") 
        {
            $("#selectfloor").html("<option value='BHGA' selected>Ground floor A Wing</option>" +
            		"<option value='BHGB' selected>Ground floor B Wing</option>" +
            		"<option value='BHGC'>Ground floor C Wing</option>" +
            		"<option value='BH1A'>1st floor A Wing</option>" +
            		"<option value='BH1B'>1st floor B Wing</option>" +
            		"<option value='BH1C'>1st floor C Wing</option>" +
            		"<option value='BH2A'>2nd floor A Wing</option>" +
            		"<option value='BH2B'>2nd floor B Wing</option>" +
            		"<option value='BH2C'>2nd floor C Wing</option>" +
            		"<option value='BH3A'>3rd floor A Wing</option>" +
            		"<option value='BH3B'>3rd floor B Wing</option>" +
            		"<option value='BH3C'>3rd floor C Wing</option>" +
            		"<option value='BH4A'>4th floor A Wing</option>" +            		
            		"<option value='BH4B'>4th floor B Wing</option>" +
            		"<option value='BH4C'>4th floor C Wing</option>" +
            		"<option value='BH5A'>5th floor A Wing</option>" +
            		"<option value='BH5C'>5th floor C Wing</option>" +
            		"<option value='BH6A'>6th floor A Wing</option>" +
            		"<option value='BH6B'>6th floor B Wing</option>" +
            		"<option value='BH6C'>6th floor C Wing</option>");
          } 
        else if (val == "DB") 
        {
            $("#selectfloor").html("<option value='DBG' selected>Ground floor</option>" +
            		"<option value='DB1'>1st floor</option>" +
            		"<option value='DB2'>2nd floor</option>" +
            		"<option value='DB3'>3rd floor</option>");
        }
        else if (val == "GH") 
        {
            $("#selectfloor").html("<option value='GHG' selected>Ground floor</option>" +
            		"<option value='GH1'>1st floor</option>" +
            		"<option value='GH2'>2nd floor</option>" +
            		"<option value='GH3'>3rd floor</option>" +
            		"<option value='GH4'>4th floor</option>");
        }
        else if (val == "LCB") 
        {
            $("#selectfloor").html("<option value='LCBG' selected>Ground floor</option>" +
            		"<option value='LCB1'>1st floor</option>" +
            		"<option value='LCB2'>2nd floor</option>" +
            		"<option value='LCBC21'>Classroom C21</option>");
        }
        else if (val == "LB") 
        {
            $("#selectfloor").html("<option value='LBG' selected>Ground floor</option>" +
            		"<option value='LB1'>1st floor</option>" +
            		"<option value='LB2'>2nd floor</option>" +
            		"<option value='LB3'>3rd floor</option>");
        } 
}
 /*   });
});*/