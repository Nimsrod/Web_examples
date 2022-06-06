console.log("Bonjour");
const li = document.querySelectorAll('li');
console.log(li);
li.forEach( item => {
    item.addEventListener('click', e =>{
        e.target.style.textDecoration= 'line-through';
    });
});
// exercice quand on clic le texte s'affiche en rouge