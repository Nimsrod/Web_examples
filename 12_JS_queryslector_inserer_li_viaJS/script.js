console.log("Bonjour");
// // exercice créer en tableau en JS
// // Albert, Benoit, Charles, Didier, Emile
// // afficher dans la console
// let prenom = ['Albert', 'Benoit','Charles','Didier', 'Emile'];
// console.log(prenom);
// // créer template html pour que
// // chaque prenom soit dans <li></li>
// // pour template utilisation de accent grave(backtick)
// // ALT+96
// let html =``;
// prenom.forEach( etudiant =>{
//     html += `<li>${etudiant}</li>`
// })
// console.log(html);
// const ul = document.querySelector('.etudiant');
// console.log(ul);
// ul.innerHTML = html;
// // exercice créer une liste ordonnée
// // créer un table animal en JS(chat chien, lion)
// // injecter un template html dans la liste <ol class='animal'>
// let animal =['chat','chien','lion'];
// let html2 = ``;
// animal.forEach( animal =>{
//     html2 += `<li>${animal}</li>`
// })
// const ol = document.querySelector('.animal');
// ol.innerHTML = html2;
// const para = document.querySelector('p');
// console.log(para);
// const paras = document.querySelectorAll('p');
// console.log(paras);
// console.log(paras[0]);
// console.log(paras[2]);
// // getElementByID identifie un élément avec son Id
// // getElementsByClassName identifie avec le nom de la classe
// // getElementsByTagName
// // identifier et afficher id titrePage
// // identifier et afficher class error
// // identifier et afficher balise p
// const titre = document.getElementById('titrePage');
// console.log(titre);
// const error = document.getElementsByClassName('error');
// console.log(error);
// console.log(error[0]);
// console.log(error[1]);
// const paragraphes = document.getElementsByTagName('p');
// console.log(paragraphes);
// console.log(paragraphes[0]);
// console.log(paragraphes[1]);
// console.log(paragraphes[2]);
// const lien = document.querySelector('a');
// console.log(lien);
// console.log(lien.getAttribute('href'));
// lien.setAttribute('href', 'https://www.condorcet.be');
// lien.textContent = "Nouveau lien vers condorcet";
// const titreh1 = document.querySelector('h1');
// console.log(titreh1);
// titreh1.setAttribute('style','color:red');
// // exercice changer "titre de la page" par "Mon site web"
// titreh1.textContent = "Mon site web";
// const rouge = document.querySelectorAll('p');
// console.log(rouge);
// console.log(rouge[5]);
// // rouge[5].setAttribute('class', 'rouge');
const ps = document.querySelectorAll('p');
console.log(ps);

ps.forEach(p => {
  if(p.textContent.includes('Echec')){
    p.classList.add('error');
  }
  if(p.textContent.includes('Succès')){
    p.classList.add('success');
  }
  if(p.textContent.includes('Rouge')){
    p.classList.add('rouge');
  }
  if(p.textContent.includes('Jaune')){
    p.classList.add('jaune');
  }
  if(p.textContent.includes('Bleu')){
    p.classList.add('bleu');
  }
  if(p.textContent.includes('centré')){
    p.classList.add('center');
  }
  if(p.textContent.includes('droite')){
    p.classList.add('droite');
  }
});
// console.log(ps[0]);
// console.log(ps[1]);
// console.log(ps[2]);
// console.log(ps[3]);
// console.log(ps[4]);
// console.log(ps[5]);
// console.log(ps[6]);
// console.log(ps[7]);
// console.log(ps[8]);
