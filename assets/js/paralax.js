const star1 = document.querySelector('.star1')
const star2 = document.querySelector('.star2')
const star3 = document.querySelector('.star3')

window.addEventListener('scroll', () =>{
    var value = window.scrollY
    console.log(value);
    star1.style.top = value * 0.09 - 80 + 'px' 
    star2.style.top = value * 0.13 + 'px'
    star3.style.bottom = value * 0.09 - 120 + 'px' 
})