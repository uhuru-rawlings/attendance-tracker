const validateSignup = () => {
    var target = document.getElementById("useremail");
    if(target.value.trim() === ""){
        alert("Please fill in all reaquired details");
        return false;
    }
}


const validateContactForm = () => {
    var userenames = document.getElementById("userenames");
    var useremails = document.getElementById("useremails");
    var phonenumbers = document.getElementById("phonenumbers");
    var messages = document.getElementById("messages");
    if(userenames.value.trim() === "" || useremails.value.trim() === "" || phonenumbers.value.trim() === "" || messages.value.trim() === ""){
        alert("Please fill in all reaquired details");
        return false;
    }
}

const validateRequestForm = () => {
    var fullnames = document.getElementById("fullnames");
    var emailadress = document.getElementById("emailadress");
    var phonenumber = document.getElementById("phonenumber");
    var positions = document.getElementById("positions");
    if(fullnames.value.trim() === "" || emailadress.value.trim() === "" || phonenumber.value.trim() === "" || positions.value.trim() === ""){
        alert("Please fill in all reaquired details");
        return false;
    }
}