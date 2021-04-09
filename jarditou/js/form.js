//--------------------appel variable-------------
const white = document.getElementById("reset");
const validation = document.getElementById("submitbtn");
const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const code = document.getElementById("codeP")
const email = document.getElementById("email")

//------------------var error------------------------

const error = document.getElementById("error");
const error1 = document.getElementById("error1");
const errorCode = document.getElementById("errorCode");
const errorMail = document.getElementById("errorMail");


//-------------------regeX---------------------
const regex1 = /^[a-zA-Z]+/;
const regexCp = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
const regexEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

//--------------------fucntion-------------------
validation.addEventListener("click", envoie);

function envoie(e) {


    if (!regex1.test(nom.value)) {
        error.innerHTML = "saisissez votre nom"; // si la regex1 n'apparait pas alors message saisissez votre nom apparait 
        nom.style.border = "2px solid red"; // encadrement rouge apparait
        e.preventDefault();
    } else {
        nom.style.border = "2px solid green"; // si tout est bon encadrement vert apparait 
        error.innerHTML = ""; // plus de message d'erreur 
    }
    if (!regex1.test(prenom.value)) {
        error.innerHTML = "saisissez votre Prenom"; // si la regex1 n'apparait pas alors message saisissez votre prenom apparait
        prenom.style.border = "2px solid red"; // encadrement rouge apparait
        e.preventDefault();
    } else {
        prenom.style.border = "2px solid green"; // si tout est bon encadrement vert apparait 
        error.innerHTML = ""; // plus de message d'erreur
    }

    // validation code postal
    if (!regexCp.test(codeP.value)) {
        errorCode.innerHTML = "saisie non valide"; // si la regex1 n'apparait pas alors message saisissez votre nom apparait 
        codeP.style.border = "2px solid red"; // encadrement rouge apparait
        e.preventDefault();
    } else {
        codeP.style.border = "2px solid green"; // si tout est bon encadrement vert apparait 
        errorCode.innerHTML = ""; // plus de message d'erreur 
    }
    // validation email
    if (!regexEmail.test(email.value)) {
        errorMail.innerHTML = "saisissez une adresse mail valide!"; // si la regex1 n'apparait pas alors message saisissez votre nom apparait 
        email.style.border = "2px solid red"; // encadrement rouge apparait
        e.preventDefault();
    } else {
        email.style.border = "2px solid green"; // si tout est bon encadrement vert apparait 
        errorMail.innerHTML = ""; // plus de message d'erreur 
    }
}