function validateRegisterForm()
{
    var supplierid = document.forms["myform1"]["supplierid"].value;
    var name = document.forms["myform1"]["name"].value;
    var address = document.forms["myform1"]["address"].value;
    var brand = document.forms["myform1"]["brand"].value;
    var email = document.forms["myform1"]["email"].value;
    var contact = document.forms["myform1"]["contact"].value;

    var number = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;
    var Email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

    if ((supplierid == null || supplierid == "") && (name == null || name == "") && (address == null || address == "") && (brand == null || brand == "") && (email == null || email == "") && (contact == null || contact == "")){
        alert("Plase Fill the REGISTER form");
        return false;
    }

    if (supplierid == null || supplierid == ""){
        alert("Supplier ID must be filled out ");
        return false;
    }

    if (name == null || name == ""){
        alert("Name must be filled out ");
        return false;
    }else if(!(name.match(letter))){
        alert("Name must be letters")
        return false;
    }
    

    if (address == null || address == ""){
        alert("Address must be filled out ");
        return false;
    }

    if (brand == null || brand == ""){
        alert("Brand must be filled out ");
        return false;
    }

    if (email == null || email == ""){
        alert("Email must be filled out ");
        return false;
    }else if(!(email.match(Email))){
        alert("Invalid Email format")
        return false;
    }

    if (contact == null || contact == ""){
        alert("Contact must be filled out ");
        return false;
    }else if(!(contact.match(phoneno))){
        alert("Invalid Contact Number")
        return false;
    }
    
}



function validateDetailsForm()
{
    var supplierid = document.forms["myform2"]["supplierid"].value;
    var name = document.forms["myform2"]["name"].value;
    var address = document.forms["myform2"]["address"].value;
    var brand = document.forms["myform2"]["brand"].value;
    var email = document.forms["myform2"]["email"].value;
    var contact = document.forms["myform2"]["contact"].value;

    var number = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;
    var Email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

    if ((supplierid == null || supplierid == "") && (name == null || name == "") && (address == null || address == "") && (brand == null || brand == "") && (email == null || email == "") && (contact == null || contact == "")){
        alert("Plase Fill the UPDATE DETAILS form");
        return false;
    }

    if (supplierid == null || supplierid == ""){
        alert("Supplier ID must be filled out ");
        return false;
    }

    if (name == null || name == ""){
        alert("Name must be filled out ");
        return false;
    }else if(!(name.match(letter))){
        alert("Name must be letters")
        return false;
    }
    

    if (address == null || address == ""){
        alert("Address must be filled out ");
        return false;
    }

    if (brand == null || brand == ""){
        alert("Brand must be filled out ");
        return false;
    }

    if (email == null || email == ""){
        alert("Email must be filled out ");
        return false;
    }else if(!(email.match(Email))){
        alert("Invalid Email format")
        return false;
    }
    
    if (contact == null || contact == ""){
        alert("Contact must be filled out ");
        return false;
    }else if(!(contact.match(phoneno))){
        alert("Contact must be numbers")
        return false;
    }
    
}



function validateOrderForm()
{
    var orderid = document.forms["myform3"]["orderid"].value;
    var supplierid = document.forms["myform3"]["supplierid"].value;
    var medname = document.forms["myform3"]["medname"].value;
    var qty = document.forms["myform3"]["qty"].value;
    var date = document.forms["myform3"]["date"].value;


    var number = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;

    if ((orderid == null || orderid == "") && (supplierid == null || supplierid == "") && (medname == null || medname == "") && (qty == null || qty == "") && (date == null || date == "")){
        alert("Plase Fill the ORDER form");
        return false;
    }

    if (orderid == null || orderid == ""){
        alert("Order ID must be filled out ");
        return false;
    }

    if (supplierid == null || supplierid == ""){
        alert("Suppler ID must be filled out ");
        return false;
    }
    

    if (medname == null || medname == ""){
        alert("Name must be filled out ");
        return false;
    }else if(!(medname.match(letter))){
        alert("Name must be letters")
        return false;
    }

    if (qty == null || qty == ""){
        alert("QTY must be filled out ");
        return false;
    }else if(!(qty.match(number))){
        alert("QTY must be numbers")
        return false;
    }

    if (date == null || date == ""){
        alert("Date must be filled out ");
        return false;
    }
    
    
}




function validateReportForm()
{
    var reportid = document.forms["myform4"]["reportid"].value;
    var supplireid = document.forms["myform4"]["supplireid"].value;
    var medName = document.forms["myform4"]["medName"].value;
    var date = document.forms["myform4"]["date"].value;
    var qty = document.forms["myform4"]["qty"].value;
    var price = document.forms["myform4"]["price"].value;

    var number = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;

    if ((reportid == null || reportid == "") && (supplireid == null || supplireid == "") && (medName == null || medName == "") && (date == null || date == "") && (qty == null || qty == "") && (price == null || price == "")){
        alert("Plase Fill the REPORT form");
        return false;
    }

    if (reportid == null || reportid == ""){
        alert("Report ID must be filled out ");
        return false;
    }

    if (supplireid == null || supplireid == ""){
        alert("Supplier ID must be filled out ");
        return false;
    }
    

    if (medName == null || medName == ""){
        alert("Medicine Name must be filled out ");
        return false;
    }else if(!(medName.match(letter))){
        alert("Medicine Name must be letters")
        return false;
    }

    if (date == null || date == ""){
        alert("date must be filled out ");
        return false;
    }

    if (qty == null || qty == ""){
        alert("QTY must be filled out ");
        return false;
    }else if(!(qty.match(number))){
        alert("QTY must be numbers")
        return false;
    }

    if (price == null || price == ""){
        alert("Price must be filled out ");
        return false;
    }else if(!(price.match(number))){
        alert("Price must be numbers")
        return false;
    }
    
}




/*

function validateOrder()
{
    var orderid = document.forms["myform5"]["orderid"].value;
    var supplierid = document.forms["myform5"]["supplierid"].value;
    var medName = document.forms["myform5"]["medName"].value;
    var qty = document.forms["myform5"]["qty"].value;
    var date = document.forms["myform5"]["date"].value;
    

    var number = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;

    if ((orderid == null || orderid == "") && (supplierid == null || supplierid == "") && (medName == null || medName == "") && (qty == null || qty == "") && (date == null || date == "")){
        alert("Plase Fill the REPORT form");
        return false;
    }

    if (orderid == null || orderid == ""){
        alert("Report ID must be filled out ");
        return false;
    }

    if (supplierid == null || supplierid == ""){
        alert("Supplier ID must be filled out ");
        return false;
    }
    

    if (medName == null || medName == ""){
        alert("Medicine Name must be filled out ");
        return false;
    }else if(!(medName.match(letter))){
        alert("Medicine Name must be letters")
        return false;
    }

    if (qty == null || qty == ""){
        alert("date must be filled out ");
        return false;
    }

    if (date == null || date == ""){
        alert("QTY must be filled out ");
        return false;
    }else if(!(date.match(number))){
        alert("QTY must be numbers")
        return false;
    }

    
    
}
*/
