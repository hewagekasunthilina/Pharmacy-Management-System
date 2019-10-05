function  ValidateForm(billyear,totalamount,Date)
{
   

   var numbers =  /^[0-9]+$/;
   var decimal =  /^[-+]?[0-9]+\.[0-9]+$/;
   var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;

    var invalidbill = validatebillyear(billyear);

    

    if(invalidbill == true)
    {    
        var validamount = validateamount(totalamount);
         
        if(validamount == true)
         {
              validatedate(Date);
        }
    }

   function validatebillyear(billyear)
   {  if(billyear.value.match(numbers))
       {
        return true;
       }
      else if(billyear.value == "")
       {
        alert("Field Can't be empty"); 
        return false;
       }
      else    
       {
           alert("Invalid bill year format");   
           confirm("Do you want to Re enter values??");
           document.getElementById("expenditureform").reset();
           return false;
        
       }
   }

    function  validateamount(totalamount)
    {
       if(totalamount.value.match(decimal))
        {
            return true;
        }
        else if(totalamount.value == "")
        {
            alert("Field Can't be empty"); 
            return false;

        }
        else
        {    
            alert("Invalid  amount format"); 
            confirm("Do you want to Re enter values??");
            document.getElementById("expenditureform").reset();
            return false;
        }


    } 
   
    function validatedate(Date)
    {
       if(document.getElementById('defaultGroupExample1').checked)
      {  if(Date.value.match(dateformat))
        {
       
        //Test which seperator is used '/' or '-'
        var opera1 = Date.value.split('/');
        var opera2 = Date.value.split('-');
        lopera1 = opera1.length;
        lopera2 = opera2.length;
        // Extract the string into month, date and year
        if (lopera1>1)
        {
        var pdate = Date.value.split('/');
        }
        else if (lopera2>1)
        {
        var pdate = Date.value.split('-');
        }
        var dd = parseInt(pdate[0]);
        var mm  = parseInt(pdate[1]);
        var yy = parseInt(pdate[2]);
        // Create list of days of a month [assume there is no leap year by default]
        var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
        if (mm==1 || mm>2)
        {
        if (dd>ListofDays[mm-1])
        {
            alert("Invalid  Date format"); 
            confirm("Do you want to Re enter values??");
            document.getElementById("expenditureform").reset();
            return false;
        }
        }
        if (mm==2)
        {
        var lyear = false;
        if ( (!(yy % 4) && yy % 100) || !(yy % 400)) 
        {
        lyear = true;
        }
        if ((lyear==false) && (dd>=29))
        {   
            alert("Invalid  Date format"); 
            confirm("Do you want to Re enter values??");
            document.getElementById("expenditureform").reset();
            return false;
        }
        if ((lyear==true) && (dd>29))
        {
            alert("Invalid  Date format"); 
            confirm("Do you want to Re enter values??");
            document.getElementById("expenditureform").reset();
            return false;
        }
        }
        }
        else
        {
           alert("Invalid  Date format"); 
           confirm("Do you want to Re enter values??");
           document.getElementById("expenditureform").reset();
            return false;
        }
      }
    } 
    
}

//disable the paid date text box
function enable_text(status)
{    
    
     document.expenditureform.paiddate.disabled = status;

    
}

