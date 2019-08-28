const empID = document.getElementById('empid');
const atDate = document.getElementById('inputMDEx');
const intime = document.getElementById('inputMDEx1');
const outime = document.getElementById('inputMDEx2');


//Form
const Form = document.getElementById('form-id');
//validate colours
const green = '#4CAF0'
const red = '#F44336'

function validateEmpid(){
    //check if is empty
    if(checkIfEmpty(empID))return;
    //is id it has only letters
    if(!checkIfOnlyLetters(empID))return;
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