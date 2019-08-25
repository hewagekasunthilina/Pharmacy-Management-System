const FirstName = document.getElementById('FirstName');
const LastName = document.getElementById('LastName');
const UserName = document.getElementById('UserName');
const Email = document.getElementById('Email');
const NICNumber = document.getElementById('NICNumber');
const Address = document.getElementById('Address');
const Phone = document.getElementById('Phone');
const Password = document.getElementById('Password');
const ConfirmPassword = document.getElementById('ConfirmPassword');

//Form
const Form = document.getElementById('addEmployee');
//validate colours
const green = '#4CAF0'
const red = '#F44336'

function validateFirstName(){
    //check if is empty
    if(checkIfEmpty(FirstName))return;
    //is id it has only letters
    if(!checkIfOnlyLetters(FirstName))return;
    return true;
}

function checkIfEmpty(field){
    if(isEmpty(field.value.trim())){
        //set field invalid
        setInterval(field, `${field.name} Must not be empty`);
        return true;
    } else{
        //set field valid
        setValid(field);
        return false;
    }
}

function isEmpty(value){
    if(value === '') return true;
    return false;
}

function setInvalid(field, message){
    field.className = 'invalid';
    field.nextElementSibling.innerHTML = message;
    field.nextElementSibling.style.color = red;
}

function setvalid(field, message){
    field.className = 'valid';
    field.nextElementSibling.innerHTML = '';
    //field.nextElementSibling.style.color = green;
}

function checkIfOnlyLetters(field){
    if(/^[a-zA-Z]+$/.test(field.value)){
        setValid(field);
        return true;
    } else{
        setInvalid(field, `${field.name}Must contain only letters`);
        return false;
    }
}