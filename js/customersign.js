
function validatecustomerSign(){
    var name = document.forms["customerSign"]["name"].value;
    var Email = document.forms["customerSign"]["email"].value;
    var Address = document.forms["customerSign"]["address"].value;
    var PhoneNumber = document.forms["customerSign"]["number"].value;
    var Password = document.forms["customerSign"]["password"].value;
    var ConfirmPassword = document.forms["customerSign"]["repeat"].value;

    var numbers = /^\d+(\.\d+)?$/;

    if(name == null || name == ""){
        alert("Name must be filled out!");
        return false;
    }


    if(Email == null || Email == ""){
        alert("E-mail must be filled out!");
        return false;
    }


    if(Address == null || Address == ""){
        alert("Address must be filled out!");
        return false;
    }

    if(PhoneNumber == null || PhoneNumber == ""){
        alert("Phone Number must be filled out!")
        return false;
    }  else if(!(PhoneNumber.match(numbers))){
        alert('Phone Number is Invalid!');
        return false;
    }
}