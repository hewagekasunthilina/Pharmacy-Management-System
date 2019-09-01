function validateaddEmployee(){
    var FirstName = document.forms["addEmployee"]["FirstName"].value;
    var LastName = document.forms["addEmployee"]["LastName"].value;
    var UserName = document.forms["addEmployee"]["UserName"].value;
    var Email = document.forms["addEmployee"]["Email"].value;
    var NICNumber = document.forms["addEmployee"]["NICNumber"].value;
    var Address = document.forms["addEmployee"]["Address"].value;
    var PhoneNumber = document.forms["addEmployee"]["PhoneNumber"].value;
    var Password = document.forms["addEmployee"]["Password"].value;
    var ConfirmPassword = document.forms["addEmployee"]["ConfirmPassword"].value;

    var numbers = /^\d+(\.\d+)?$/;
    var Email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(FirstName == null || FirstName == ""){
        alert("First Name must be filled out!");
        return false;
    }

    if(LastName == null || LastName == ""){
        alert("Last Name must be filled out!");
        return false;
    }

    if(UserName == null || UserName == ""){
        alert("First Name must be filled out!");
        return false;
    }

    if (email == null || email == ""){
        alert("Email must be filled out ");
        return false;
    }else if(!(email.match(Email))){
        alert("Invalid Email format")
        return false;
    }

    if(NICNumber == null || NICNumber == ""){
        alert("NIC Number must be filled out!");
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