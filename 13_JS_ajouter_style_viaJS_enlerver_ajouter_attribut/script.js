console.log("Bonjour");
const titre = document.querySelector('h1');
console.log(titre);
//titre.setAttribute('style', 'color: red;');
console.log(titre.style);
titre.style.margin = '50px';
titre.style.color = 'red';
titre.style.fontSize = '60px';
console.log(titre.style);

const paras = document.querySelectorAll('p');
console.log(paras);

// utilisation de add
paras.forEach( p => {
    if(p.textContent.includes('error')){
        p.classList.add('error');
    } else if(p.textContent.includes('success')){
        p.classList.add('success');
    }
});

// utilisation de remove
// exercice ecrire un script
// qui enlevr les class des <p>
paras.forEach( p => {
    if(p.textContent.includes('error')){
        p.classList.remove('error');
    } else if(p.textContent.includes('success')){
        p.classList.remove('success');
    }
});

console.log(titre.parentElement);
console.log(titre.parentElement.parentElement);
console.log(titre.parentElement.parentElement.parentElement);
console.log(titre.nextElementSibling);
console.log(titre.nextElementSibling.nextElementSibling);
console.log(titre.nextElementSibling.nextElementSibling.previousElementSibling);
console.log(titre.parentElement.children);

const B = document.querySelectorAll('li');
console.log(B);
console.log(B[1]);
console.log(B[1].parentElement);
console.log(B[1].parentElement.parentElement);
console.log(B[1].parentElement.children);

const ol = document.querySelector('ol');
console.log(ol.children);

const C = document.querySelectorAll('li');
console.log(C[4].parentElement);
console.log(C[4].parentElement.parentElement);
console.log(C[4].parentElement.parentElement.parentElement);
console.log(C[4].parentElement.parentElement.parentElement.parentElement);