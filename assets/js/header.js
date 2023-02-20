const header = document.querySelector('header');
const twitch = document.querySelector('.twitch');
const a = document.querySelector('header li a');

let twitchPosition;

function postionTwitch(){
    twitchPosition = twitch.offsetTop
}
postionTwitch()

window.addEventListener('scroll', () =>{
    var value = window.scrollY
    if(value > twitchPosition){
        header.classList.add('twitch-scroll')
        links.forEach(link => {
            link.style.color = "#404A9A"
        });
        a.style.color = "#404A9A"
    }else{
        header.classList.remove('twitch-scroll')
        links.forEach(link => {
            link.style.color = "white"
        });
        a.style.color = "white"
    }
})