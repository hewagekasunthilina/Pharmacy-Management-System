function validateaddEmployee()
{
	var EmpId = document.forms["addEmployee"]["EmpId"].value;
    var FirstName = document.forms["addEmployee"]["FirstName"].value;
    var LastName = document.forms["addEmployee"]["LastName"].value;
    var UserName = document.forms["addEmployee"]["UserName"].value;
    var Email = document.forms["addEmployee"]["Email"].value;
    var NICNumber = document.forms["addEmployee"]["NICNumber"].value;
    var Address = document.forms["addEmployee"]["Address"].value;
    var PhoneNumber = document.forms["addEmployee"]["PhoneNumber"].value;
    var Password = document.forms["addEmployee"]["Password"].value;
    var ConfirmPassword = document.forms["addEmployee"]["ConfirmPassword"].value;

    var numbers = /^[0-9]+$/;
    var letter = /^[a-zA-Z]+$/;
    var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

    if ((EmpId == null || EmpId == "") && (FirstName == null || FirstName == "") && (LastName == null || LastName == "") && (UserName == null || UserName == "") && (Email == null || Email == "") && (NICNumber == null || NICNumber == "") && (Address == null || Address == "") && (PhoneNumber == null || PhoneNumber == "") && (Password == null || Password == "") && (ConfirmPassword == null || ConfirmPassword == "")){
        alert("Plase Fill the REGISTER form");
        return false;
    }

    if(EmpId == null || EmpId == ""){
        alert("Employee ID must be filled out!");
        return false;
    }

    if(FirstName == null || FirstName == ""){
        alert("First Name must be filled out!");
        return false;
    }else if(!(FirstName.match(letter))){
        alert("First Name must be letters")
        return false;
    }

    if(LastName == null || LastName == ""){
        alert("Last Name must be filled out!");
        return false;
    }else if(!(LastName.match(letter))){
        alert("Last Name must be letters")
        return false;
    }

    if(UserName == null || UserName == ""){
        alert("User Name must be filled out!");
        return false;
    }

    if(Email == null || Email == ""){
        alert("Email must be filled out ");
        return false;
    }else if(!(Email.match(email))){
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
    }  else if(!(PhoneNumber.match(phoneno))){
        alert('Phone Number is Invalid!');
        return false;
    }
	if(Password == null || Password == ""){
        alert("Address must be filled out!");
        return false;
    }
	if(Password.length < 5){
		alert("Password length must be greater than 5 characters");
		return false;
	}
	if(Password.length > 25){
		alert("Password length must be lower than 25 characters");
		return false;
	}
	if(Password != ConfirmPassword){
		alert("Password not match");
		return false;
	}
	
}

function validateSignin(){

    var UserName = document.forms["signIn"]["UserName"].value;
    var Password = document.forms["signIn"]["Password"].value;


    if ((UserName == null || UserName == "") && (Password == null || Password == "")){
        alert("Plase Fill the Sign form");
        return false;
    }

}