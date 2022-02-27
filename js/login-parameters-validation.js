
var email = document.querySelector('#email');
var password = document.querySelector('#password');
var submitBtn = document.querySelector('#submitBtn');


function signInValidate() {
    //email
    var emailRegex = /\w+@\w+\.[a-z]{2,3}|[a-z0-9]+@\w+\-\w+\.[a-z]{2,3}/;
    if (email.value == "" || password.value == "") {
        alert("Plotesoni te gjitha fushat")
    } else {
        if (emailRegex.test(email.value)) {
            var passwordRegex = /^\w+[a-z]+\d+$/;
            if (passwordRegex.test(password.value) == false) {
                showAlert("Password duhet te perfundoje me 1 ose me shume numra", "password-div")
            }
        } else {
            showAlert("Email nuk eshte Valid", "email-div")
        }
    }
}

function showAlert(message, className) {
    const p = document.createElement('p');
    p.classList.add('alert-danger-message');
    p.appendChild(document.createTextNode(message));

    const inputDiv = document.querySelector(`.${className}`);
    if (inputDiv.contains(document.querySelector('.alert-danger-message'))) {
        inputDiv.removeChild(document.querySelector('.alert-danger-message'))
    }
    const inputField = document.querySelector(`.${className}`).children[2];
    inputField.after(p)
}
