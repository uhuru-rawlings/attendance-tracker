const toogleLabel = (clickedid) =>{
    var target = document.getElementById(clickedid);
    if(target.value.trim() == ""){
        document.getElementsByClassName(clickedid)[0].style.display="none";
        target.style.borderColor = "#c43030";
    }else{
        document.getElementsByClassName(clickedid)[0].style.display="block";
        target.style.borderColor = "#CED4DA";
    }
}

const validateForm = () =>{
    var username = document.getElementById("userenames");
    var useremail = document.getElementById("useremails");
    var phonenumber = document.getElementById("phonenumbers");
    var message = document.getElementById("messages");
    if(username.value.trim() === "" || useremail.value.trim() === "" || phonenumber.value.trim() === "" || message.value.trim() === ""){
        if(username.value.trim() === ""){
            username.style.borderColor = "#c43030";
            return false;
        }else if(useremail.value.trim() === ""){
            useremail.style.borderColor = "#c43030";
            return false;
        }else if(phonenumber.value.trim() === ""){
            phonenumber.style.borderColor = "#c43030";
            return false;
        }else{
            message.style.borderColor = "#c43030";
            return false;
        }
    }
}