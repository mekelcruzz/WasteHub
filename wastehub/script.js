var signin = document.getElementById("signin");
var signup = document.getElementById("signup");
var create = document.getElementById("create");
var log = document.getElementById("login");

function login(){
    log.style.visibility = "visible";
    create.style.visibility = "visible";
    signin.style.visibility = "hidden";
    signup.style.visibility = "hidden";
}

function register(){
    log.style.visibility = "hidden";
    create.style.visibility = "hidden";
    signin.style.visibility = "visible";
    signup.style.visibility = "visible";
}