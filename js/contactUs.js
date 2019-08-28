function validateContactForm(){
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var subject = document.forms["contactForm"]["subject"].value;
    var message = document.forms["contactForm"]["message"].value;

    if(name == null || name == ""){
        alert("Your Name must be filled out!");
        return false;
    }

    if(email == null || email == ""){
        alert("Email must be filled out!");
        return false;
    }

    if(subject == null || subject == ""){
        alert("Subject must be filled out!");
        return false;
    }

    if(message == null || message == ""){
        alert("Message must be filled out!");
        return false;
    }

}