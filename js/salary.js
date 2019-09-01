function empLeaveValidation()
{
    var ldate = document.forms["leaveForm"]["ldate"].value;
    var eid = document.forms["leaveForm"]["eid"].value;
    var reason = document.forms["leaveForm"]["reason"].value;
    var email = document.forms["leaveForm"]["email"].value;
    var cnum = document.forms["leaveForm"]["cnum"].value;
    
    var num = /^[0-9]+$/;
    var reas = /^[a-zA-Z]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if ((ldate == null || ldate == "") && (eid == null || eid == "") && (reason == null || reason == "") && (email == null || email == "") && (ecnum == null || cnum == "")){
        alert("Plase Fill the Form");
        return false;
    }
   
        if (ldate  == null || ldate  == ""){
            alert("Leave Date must be filled");
            return false;
        }
        
    
        if (reason == null || reason == ""){
            alert("Employee Id must be filled");
            return false;
        }
        else if(!(reason.match(reas))){
            alert("Invalid Email format")
            return false;
        }

    
        if (email == null || email == ""){
            alert("Email must be filled");
            return false;
        }else if(!(email.match(mail))){
            alert("Invalid Email format")
            return false;
        }
    
       
        if (cnum == null || cnum == ""){
            alert("Contact must be filled out ");
            return false;
        }else if(!(cnum.match(num))){
            alert("Contact must be numbers")
            return false;
        }
}

