const burger = document.querySelector('.burger');
const ul = document.querySelector('header ul');

burger.addEventListener('click', () =>{
    ul.classList.toggle('active')
})