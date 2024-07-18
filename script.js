function validateEmail(email) {
    var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regex.test(email);
}

function validateForm() {
    var emailField = document.querySelector("#email-field");
    var email = emailField.value;
    var isValid = validateEmail(email);
    var incorrectMail = document.querySelector("#incorrect-mail");
    var successMail = document.querySelector("#success-mail");
    if (!isValid) {
        incorrectMail.style.display = "block";
        successMail.style.display = "none";
        return false;
    } else {
        incorrectMail.style.display = "none";
        return true;
    }
}