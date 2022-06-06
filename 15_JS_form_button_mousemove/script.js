console.log("Bonjour");
const ul= document.querySelector('ul');
const boutton = document.querySelector('button');

boutton.addEventListener('click', () => {
    const li = document.createElement('li');
    li.textContent = 'quelque chose à faire';
    ul.appendChild(li);
})

ul.addEventListener('click', e => {
    if(e.target.tagName = 'LI'){
        e.target.remove();
    }
})

const box = document.querySelector('.box');
box.addEventListener('mousemove', e =>{
    box.textContent = `Position X = ${e.offsetX} Position Y = ${e.offsetY}`;
}) 