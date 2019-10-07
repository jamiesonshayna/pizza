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

    return canSubmit;

}



document.getElementById("pizza-form").onsubmit = validate;





