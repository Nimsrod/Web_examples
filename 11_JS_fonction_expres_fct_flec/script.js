// document.write("Bonjour","<br>");
// let prenom = "Pierre";
// let nom = "Van";
// document.write(prenom,"<br>");
// // concaténation
// let coordonnées = nom + " " + prenom;
// document.write(coordonnées,"<br>");
// // length
// document.write(coordonnées.length,"<br>");
// // exercice appliqué métode toUpperCase()
// // a coordonnées
// // indexOf("e")
// // lastIndexOf("e")
// // startWith("P")
// // startWith("V")
// document.write(coordonnées.toUpperCase(),"<br>");
// document.write(coordonnées.toLowerCase(),"<br>");
// document.write(coordonnées.indexOf("z"),"<br>");
// document.write(coordonnées.indexOf("e"),"<br>");
// document.write(coordonnées.startsWith("v"),"<br>");
// document.write(coordonnées.startsWith("V"),"<br>");
// document.write(coordonnées[4],"<br>");
// // exercice afficher les lettres
// // de coordonnées ligne par ligne
// // utiliser une boucle
// for(let i = 0; i < coordonnées.length; i++){
//     document.write(coordonnées[i],"<br>");
// }
// // autre manière concaténation
// // utilisation du symbole accent grave(backtick)
// let resultat = `Mon nom est ${nom} et mon prénom est ${prenom}`;
// document.write(resultat,"<br>");
// let html = `
// <h2>Nom</h2>${nom}
// <h2>Prénom</h2>${prenom}
// `;
// document.write(html,"<br>");

///////////////////
// les fonctions //
///////////////////
function hello1(){
    document.write("Bonjour1","<br>");
}
hello1();

// les expressions de fonction
let hi1 = function hello2(){
    document.write("Bonjour2","<br>");
}
hi1();

// les expressions de fonction anonyme
let hi2 = function (){
    document.write("Bonjour3","<br>");
}
hi2();

function somme1 (x,y){
    document.write(x+y,"<br>");
}
somme1(10,15);
// exercice ecrire fonction somme
// expression de fonction
// expression de fonction anonyme
let addition2 = function somme2(x,y){
    document.write(x+y,"<br>");
}
addition2(20,20);
let addition3 = function (x,y){
    document.write(x+y,"<br>");
}
addition3(30,30);

let addition4 = function (x,y){
    return x+y;
}
document.write(addition4(40,40),"<br>");

// les fonctions fléchées
let addition5 = (x,y) => {
    return x+y;
}
document.write(addition5(50,50),"<br>");

// si fonction fléchée avec uniquement un return
// return n'est pas obligatoire ni les {}
let addition6 = (x,y) => x+y;
document.write(addition6(60,60),"<br>");

// fonction qui rajoute 5 à un nombre
let plus5 = (x) => x+5;
document.write(plus5(100),"<br>");

// si fonction fléchée a uniquement un paramètre
// () ne sont pas obligatoire
let plus10 = x => x+10;
document.write(plus10(200),"<br>");

//exercice1 faire fonction
// qui prend un paramètre 
// et qui retourne ce paramètre
// manière classique
// expression de fonction
// fonction fléchée
function ecrire1(mot){
    return mot;
}

let message1 = function (mot){
    return mot;
}

let message2 = mot => mot;

//exercice2 faire fonction
// qui fait produit de 3 nombres 
// et qui retourne le résultat
// manière classique
// expression de fonction
// fonction fléchée

function calcul1(x,y,z){
    return x*y*z;
}

let calc1 = function (x,y,z){
    return x*y*z;
}

let calc2 = (x,y,z) => x*y*z;