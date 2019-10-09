function validate() {
    // check first name field
    var first = document.getElementById("firstName").value;
    var last = document.getElementById("lastName").value;
    var size = document.getElementById("selectSize").value;


    // clears all error messages
    var errors = document.getElementsByClassName("err");
    for(var i=0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    // create boolean
    var canSubmit = true;

    // check first name
    if(first == "") {
        var errFirst = document.getElementById("err-fname");
        errFirst.style.visibility = "visible";

        // CRITICAL TO RETURN FALSE - PREVENTS FORM FROM POSTING
        canSubmit = false;
    }

    // check last name
    if(last == "") {
        var errLast = document.getElementById("err-lname");
        errLast.style.visibility = "visible";

        canSubmit = false;
    }

    // check size


    if(size == "none") {
        var errSize = document.getElementById("err-size");
        errSize.style.visibility = "visible";
        canSubmit = false;
    }

    // validate pickup or delivery

    // create delivery boolean
    var isDelivery = false;

    var method = document.getElementsByName("method");
    var methodValue = "";
    for(i = 0; i < method.length; i++) {
        if(method[i].checked) {
            if(method[i].value == "delivery") {
                isDelivery = true;
            }
            methodValue = method[i].value;
        }
    }

    if(methodValue == "") {
        // set the error here (no button selected)
        var errMethod = document.getElementById("err-method");
        errMethod.style.visibility = "visible";
        canSubmit = false;
    }

    // validate for address
    var address = document.getElementById("address").value;
    // OR can check methodValue == "delivery" -- from above it's already declared!!
    if(address == "" && isDelivery == true) {
        var errAddress = document.getElementById("err-address");
        errAddress.style.visibility = "visible";
        canSubmit = false;
    }

    // validate for toppings
    var toppings = document.getElementsByName("toppings[]");

    var count = 0;
    for(i=0; i < toppings.length; i++) {
        if(toppings[i].checked) {
            count++;
        }
        console.log(count);
    }

    if(count == 0) {
        var toppingsError = document.getElementById("err-toppings");
        toppingsError.style.visibility = "visible";
        canSubmit = false;
    }

    return canSubmit;

}



document.getElementById("pizza-form").onsubmit = validate;





