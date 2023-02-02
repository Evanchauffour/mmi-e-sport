const header = document.querySelector('header');
const twitch = document.querySelector('.twitch');
const a = document.querySelector('header li a');

let twitchPosition;

function postionTwitch(){
    twitchPosition = twitch.offsetTop
}
postionTwitch()
console.log(twitchPosition);

window.addEventListener('scroll', () =>{
    var value = window.scrollY
    if(value > 0){
        header.classList.add('scroll');
    }else{
        header.classList.remove('scroll');
    }

    if(value > twitchPosition){
        header.classList.add('twitch-scroll')
        a.style.color = "#404A9A";
        links.forEach(link =>{
            link.style.color = "#404A9A"
        })
    }else{
        header.classList.remove('twitch-scroll')
        a.style.color = "white";
        links.forEach(link =>{
            link.style.color = "white"
        })
    }
})