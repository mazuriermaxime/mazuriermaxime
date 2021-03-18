//--------------------appel variable-------------
const white = document.getElementById("reset");
const validation = document.getElementById("submitbtn");

//------------------var error------------------------

const error = document.getElementById("error");


//-------------------regeX---------------------
const regex1 = /^[a-zA-Z]+/;


//--------------------fucntion-------------------
validation.addEventListener("click", envoie);

function envoie(e) {


    if (!regexAlpha.test(firstName.value)) {
        error.innerHTML = "Please, enter your first name";
        firstName.style.border = "2px solid red";
        e.preventDefault();
    } else {
        firstName.style.border = "2px solid green";
        error.innerHTML = "";
    }

}