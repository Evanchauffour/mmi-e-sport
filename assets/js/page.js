const links = document.querySelectorAll('.link');
const pages = document.querySelectorAll('.page');
index = 0;


links.forEach(link =>{

    link.addEventListener('click', (e) =>{
        console.log('test');
        index = e.target.getAttribute('data-page');
        console.log(index)
        for(j = 0; j < pages.length; j++){
            if(pages[j].getAttribute('data-page') == index){
                pages[j].style.visibility = "visible";
                pages[j].style.display = "block";
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                })
                console.log(index);
            }else{
                pages[j].style.visibility = "hidden";
                pages[j].style.display = "none";
            }
        }
    })

})
