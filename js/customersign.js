function validateRegisterForm()
{
    var name = document.forms["customerSign"]["name"].value;
    var email = document.forms["customerSign"]["email"].value;
    var address = document.forms["customerSign"]["address"].value;
    var mobile = document.forms["customerSign"]["number"].value;
    var password = document.forms["customerSign"]["password"].value;

    var number = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;
    var Email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if ((name == null || name == "") && (address == null || address == "") && (mobile == null || mobile == "") && (email == null || email == "") && (password == null || password == "")){
        alert("Plase Fill the sign up form");
        return false;
    }


    if (name == null || name == ""){
        alert("Name must be filled out ");
        return false;
    }else if(!(name.match(letter))){
        alert("Name must be letters only")
        return false;
    }
    

    if (address == null || address == ""){
        alert("Address must be filled out ");
        return false;
    }

    if (mobile == null || mobile == ""){
        alert("mobile must be filled out ");
        return false;
    }

    if (email == null || email == ""){
        alert("Email must be filled out ");
        return false;
    }else if(!(email.match(Email))){
        alert("Invalid Email format")
        return false;
    }

    if (password == null || password == ""){
        alert("password must be filled out ");
        return false;
    }else if(!(password.match(number))){
        alert("password must be numbers")
        return false;
    }
    
}

