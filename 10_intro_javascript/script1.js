document.write("Je viens du fichier script1.js","<br>");
// Ceci est un commentaite monoligne
/* Ceci est un
commentaire 
multiligne */
// Exercice écrire "Bonsoir" dans la console
console.log("Bonsoir");

// var pour variable
var age; // déclaration de la variable age
age = 20; // affectation de la variable age
// Exercice afficher la variable age dans le document
document.write(age,"<br>");
document.write("age","<br>");
document.write("Mon age est: ", age ,"<br>");
document.write(typeof age,"<br>");
age = 40;
document.write("Mon age est: ", age ,"<br>");
document.write(typeof age,"<br>");
age = "Pierre";
document.write(age ,"<br>");
document.write(typeof age,"<br>");
age = true;
document.write(age ,"<br>");
document.write(typeof age,"<br>");
age = false;
document.write(age ,"<br>");
document.write(typeof age,"<br>");
// let pour variable
let prenom = "Pierre";
document.write(prenom,"<br>");
// const pour constante
const PI = 3.14;
document.write(PI,"<br>");
// PI = 50;
document.write(PI,"<br>");

// opérateur d'affectation =
// opérateur mathématique +, -, / ,*
// Exercice créer deux variables nb1 et nb2
// faire addition, soustraction, division et multiplication
// afficher résultat dans le document 
// nb1= 100 et nb2 = 50
let nb1 = 100;
let nb2 = 50;
let resultat = nb1 + nb2;
document.write(resultat,"<br>");
document.write(nb1 + nb2,"<br>");
document.write("La somme de ", nb1, " et de ", nb2, " est égale à ", nb1 + nb2,"<br>");
document.write("Soustraction: ", nb1 - nb2,"<br>");
document.write("Division: ", nb1 / nb2,"<br>");
document.write("Multiplication: ", nb1 * nb2,"<br>");

// conditions
// if
let nb3 = 200;
if(nb3 == 50){
    document.write("nb3 est égal à 50","<br>");
} else if(nb3 == 100) {
    document.write("nb3 est égal à 100","<br>");
} else {
    document.write("nb3 est différent de 50 et de 100","<br>");
}
// exercice écrire "est différent de 50" dans les autres cas
// switch
switch(nb3){
    case 0:
        document.write("nb3 est égal à 0","<br>");
        break;
    case 50:
        document.write("nb3 est égal à 50","<br>");
        break;
    case 100:
        document.write("nb3 est égal à 100","<br>");
        break;
    default:
        document.write("nb3 est différent de 0, 50, 100");
        break;
}

// boucles
// while
// exercice afficher les valeurs de 0 à 4
// avec boucle while
// avec boucle do while
// avec boucle for
let i = 0;
i = 0;
while(i < 5){
    document.write(i,"<br>");
    i++;
}
i = 0;
do{
    document.write(i,"<br>");
    i++
} while(i < 5);
for(let i = 0; i < 5; i++){
    document.write(i,"<br>");
}

// fonctions
function Bonjour(){
    document.write("Bonjour","<br>");
}
Bonjour();
Bonjour();
Bonjour();
// exercice créer une fonction "Message" avec un paramètre
// afficher la valeur du paramètre dans le document
function Message(mot){
    document.write(mot,"<br>");
}
// Albert
Message("Albert");
Message("Benoit");
Message(50);
// Exercice
// faire fonction Somme
// faire la somme de 3 nombres et afficher le résultat
function Somme(nb1, nb2, nb3){
    document.write("La somme de ", nb1,", ", nb2," et ", nb3," vaut: ");
    document.write(nb1 + nb2 + nb3,"<br>");
}
// 10, 20 ,30
Somme(10, 20, 30);
// 100, 200, 700
Somme(100, 200, 700);




