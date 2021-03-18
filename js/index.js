const fonction1btn = document.getElementById('btn1')
fonction1btn.onclick = age;
const fonction2btn = document.getElementById('btn2')
fonction2btn.onclick = TableMultiplication;
const fonction3btn = document.getElementById('btn3')
fonction3btn.onclick = tableauPrenom;
const fonction4btn = document.getElementById('btn4')
fonction4btn.onclick = prixCmmande;



//Exercie 1: (évaluation)
/*Il s'agit de dénombrer les personnes d'âge strictement inférieur à 20 ans, les personnes d'âge strictement supérieur à 40 ans et celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et 40 ans y compris).

Le programme doit demander les âges successifs.

Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté.

Donnez le programme Javascript correspondant qui affiche les résultats.*/
function age() {
    // var pour les differents types de personnes15
    var jeunes = 0;
    var adultes = 0;
    var vieux = 0;
    let age = 0;
    // saisie de l'age
    while (age < 100) {
        age = parseInt(prompt("qu'elle est votre age ? Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté."));
        if (age != age) {
            window.alert("invalide");
        } else if (age < 20) {
            jeunes++;
        } else if (age >= 20 && age <= 40) {
            adultes++;
        } else vieux++;
    }

    // reponse en fonction de l'age 
    window.alert(" Il y a " + jeunes + " jeunes. \n" + " Il y a " + adultes + " adultes. \n" + " Il y a " + vieux + " vieux.");
}

//age()

//Exercice 2: (évaluation)
/*Ecrivez une fonction qui affiche une table de multiplication.

Votre fonction doit prendre un paramètre qui permet d'indiquer quelle table afficher.

Par exemple, TableMultiplication(7) doit afficher :

1 x 7 = 7 */

function TableMultiplication() {
    alert('bonjour ! ');
    var nombre = prompt("Entrer un nombre ?");
    for (let i = 1; i <= 10; i++) {
        console.log(nombre + " x " + i + " = " + nombre * i);
    }
    window.alert("Ouvrez le console pour voir le resultat (f12)")
}
// TableMultiplication()

//Exercice 3: (évaluation)
/*Un prénom est saisi au clavier. On le recherche dans le tableau tab donné ci-après.

Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent, 
et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message d'erreur 
apparait et aucun prénom ne se supprime. */

function tableauPrenom() {
    alert('bonjour à tous');
    var tableau = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
    var nombre = prompt("Entrer un prenom que vous voulez éliminer parmis la liste ?");
    if (tableau.includes(nombre)) {
        tableau.splice(tableau.indexOf(nombre), 1);
        tableau.push(" ");
        alert(tableau)
    } else {
        alert("erreur")
    }
}
//tableauPrenom()

//Exercice 3: (évaluation)
/*A partir de la saisie du prix unitaire noté PU d'un produit et de la quantité commandée QTECOM,
 afficher le prix à payer PAP, en détaillant la remise REM et le port PORT, sachant que :

TOT = ( PU * QTECOM )
la remise est de 5% si TOT est compris entre 100 et 200 € et de 10% au-delà
le port est gratuit si le prix des produits ( le total remisé ) est supérieur à 500 €.
 Dans le cas contraire, le port est de 2%
la valeur minimale du port à payer est de 6 €
Testez tous les cas possibles afin de vous assurez que votre script fonctionne.*/
function prixCmmande() {
    //declaration de variable 
    var PU = parseInt(prompt("saisissez le prix ?"));
    //saisie de la QTECOM
    var QTECOM = parseInt(prompt("saisissez la quantite commande"));

    var TOT = PU * QTECOM;
    var REM = [0.05, 0.1];
    var PORT = [0.02, 6];
    var valeur = 0;
    var fPort = 0;
    // remise
    if (TOT >= 100 && TOT <= 200) {
        valeur = TOT * REM[0];
        TOT = TOT - valeur + 6;
    } else if (TOT >= 201 && TOT <= 499) {
        valeur = TOT * REM[1];
        TOT = TOT - valeur;
        fPort = TOT * PORT[0];

        if (fPort >= 6) {
            fPort = TOT + fPort;
        } else TOT = TOT + PORT[1];

    } else if (TOT >= 500) {
        valeur = TOT * REM[1];
        TOT = TOT - valeur;
        if (TOT < 500) {
            fPort = TOT * PORT[0];
            TOT = TOT + fPort;
        } else TOT;
    }
    if (TOT < 100) {
        valeur = TOT + PORT[1];
        TOT = valeur;
    }

    window.alert(`${TOT}`);
}
// prixCmmande();