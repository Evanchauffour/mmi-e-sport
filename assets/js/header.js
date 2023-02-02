const header = document.querySelector('header');

window.addEventListener('scroll', () =>{
    var value = window.scrollY

    if(value > 0){
        header.classList.add('scroll')
    }else{
        header.classList.remove('scroll')
    }
})