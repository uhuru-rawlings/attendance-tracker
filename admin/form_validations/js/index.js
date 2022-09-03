const removeError = (clicked_id) =>{
    document.getElementById(clicked_id).style.borderColor = "#CED4DA";
 }

const validateVendorForms = () =>{
    var companyname = document.getElementById("companyname");
    var companyemail = document.getElementById("companyemail");
    var phonenumber = document.getElementById("phonenumber");
    var vendorgroup = document.getElementById("vendorgroup");
    var commodities = document.getElementById("commodities");
    if(companyname.value.trim() === "" || companyemail.value.trim() === "" || phonenumber.value.trim() === "" || vendorgroup.value.trim() === "" || commodities.value.trim() === ""){
        if(companyname.value.trim() === ""){
            companyname.style.borderColor = "red";
            return false;
        }else if(companyemail.value.trim() === ""){
            companyemail.style.borderColor = "red";
            return false;
        }else if(phonenumber.value.trim() === ""){
            phonenumber.style.borderColor = "red";
            return false;
        }else if(vendorgroup.value.trim() === ""){
            vendorgroup.style.borderColor = "red";
            return false;
        }else{
            commodities.style.borderColor = "red";
            return false;
        }
    }
}

const validateAddmins = () =>{
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var emails = document.getElementById("emails");
    var phone = document.getElementById("phone");
    var selectrole = document.getElementById("selectrole");
    var passwords = document.getElementById("passwords");
    var password_again = document.getElementById("password_again");

    if(fname.value.trim() === "" || lname.value.trim() === "" || emails.value.trim() === "" || phone.value.trim() === "" || selectrole.value.trim() === "" || passwords.value.trim() === "" || password_again.value.trim() === ""){
        if(fname.value.trim() === ""){
            fname.style.borderColor = "red";
            return false;
        }else if(lname.value.trim() === ""){
            lname.style.borderColor = "red";
            return false;
        }else if(emails.value.trim() === ""){
            emails.style.borderColor = "red";
            return false;
        }
        else if(phone.value.trim() === ""){
            phone.style.borderColor = "red";
            return false;
        }
        else if(selectrole.value.trim() === ""){
            selectrole.style.borderColor = "red";
            return false;
        }else if(passwords.value.trim() === ""){
            passwords.style.borderColor = "red";
            return false;
        }else{
            password_again.style.borderColor = "red";
            return false;
        }
    }else{
        if(passwords.value.trim() !== password_again.value.trim()){
            passwords.style.borderColor = "red";
            password_again.style.borderColor = "red";
            return false;
        }
    }
}

// const toggleDiscountForm = () =>{
//     var target = document.getElementById("discount");
//     var inputs = document.getElementById("dicount_form");
//     if(target.checked){
//         inputs.style.display = "block";
//     }else{
//         inputs.style.display = "none";
//     }
// }

const validateAddProducts = () =>{
    var vendor = document.getElementById("vendor");
    var category = document.getElementById("category");
    var itemname = document.getElementById("itemname");
    var metrix = document.getElementById("metrix");
    var price = document.getElementById("price");
    var itemimage = document.getElementById("itemimage");
    var stockcount = document.getElementById("stockcount");
    var description = document.getElementById("description");

    if(vendor.value.trim() === "" || category.value.trim() === "" || itemname.value.trim() === "" || metrix.value.trim() === "" || price.value.trim() === "" || stockcount.value.trim() === "" || itemimage.value.trim() === "" || description.value.trim() === ""){
        if(vendor.value.trim() === ""){
            vendor.style.borderColor="red";
            return false;
        }else if(category.value.trim() === ""){
            category.style.borderColor="red";
            return false;
        }else if(itemname.value.trim() === ""){
            itemname.style.borderColor="red";
            return false;
        }else if(metrix.value.trim() === ""){
            metrix.style.borderColor="red";
            return false;
        }else if(price.value.trim() === ""){
            price.style.borderColor="red";
            return false;
        }else if(itemimage.value.trim() === ""){
            itemimage.style.borderColor="red";
            return false;
        }else if(stockcount.value.trim() === ""){
            stockcount.style.borderColor="red";
            return false;
        }else{
            description.style.borderColor="red";
            return false;
        }
    }else{
        var discountpercentage = document.getElementById("discountpercentage");
        var startdate = document.getElementById("startdate");
        var stopdate = document.getElementById("stopdate");
        var target = document.getElementById("discount");

        if(target.checked && discountpercentage.value.trim() === "" || target.checked && startdate.value.trim() === "" || target.checked && stopdate.value.trim() === ""){
            if(target.checked && discountpercentage.value.trim() === ""){
                discountpercentage.style.borderColor = "red";
                return false;
            }else if(target.checked && startdate.value.trim() === ""){
                startdate.style.borderColor = "red";
                return false;
            }else{
                stopdate.style.borderColor = "red";
                return false;
            }
        }
    }
}


const validateUpdatePayment = () =>{
    var orderid = document.getElementById("orderid");
    var ammount_p = document.getElementById("ammountpaid");

    if(orderid.value.trim() === "" || ammount_p.value.trim() === ""){
        if(orderid.value.trim() === ""){
            orderid.style.borderColor = "red";
            return false;
        }else{
            ammount_p.style.borderColor = "red";
            return false;
        }
    }else{
        if(ammount_p.value.trim() < 1){
            ammount_p.style.borderColor = "red";
            return false;
        }
    }
}

const validateEmail = () =>{
    var useremail = document.getElementById("useremail");
    var passwords = document.getElementById("passwords");

    if(useremail.value.trim() === "" || passwords.value.trim() === ""){
        if(useremail.value.trim() === ""){
            useremail.style.borderColor = "red";
            return false;
        }else{
            passwords.style.borderColor = "red";
            return false;
        }
    }
}