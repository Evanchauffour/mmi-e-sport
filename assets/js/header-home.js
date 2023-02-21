const header = document.querySelector('header');
const twitch = document.querySelector('.twitch');
const us = document.querySelector('.team');
const a = document.querySelector('header ul a');

let twitchPosition;
let usPosition;

function postionTwitch(){
    twitchPosition = twitch.offsetTop
}
postionTwitch()
function postionUs(){
    usPosition = us.offsetTop
}
postionUs()

window.addEventListener('scroll', () =>{
    console.log(usPosition);
    console.log(twitchPosition);
    var value = window.scrollY
    if(value > twitchPosition && value + 100 < usPosition){
        header.classList.add('twitch-scroll')
    }else{
        header.classList.remove('twitch-scroll')
    }
})