const start = document.querySelector('.intro')
const titre = document.querySelector('h1')
const deux = document.querySelector('.deux')
const trois = document.querySelector('.trois')
const quatre = document.querySelector('.quatre')
const cinq = document.querySelector('.cinq')
const cielneigenuit = document.querySelector('.ciel')
const deuxImg = document.querySelector('.deux-img')
const infoNeige1 = document.querySelector('.container-info-neige')
const infoNeige2 = document.querySelector('.container-info-neige-deux')
const infoNeige3 = document.querySelector('.container-info-neige-trois')
const containerTourSectionDeux = document.querySelector('.tours-section-deux')
const containerTourSectionTrois = document.querySelector('.tours-section-trois')
const containerTourSectionQuatre = document.querySelector('.tours-section-quatre')
const lune = document.querySelector('.lune')
const mongolfiere = document.querySelector('.mongolefiere')
const lunenuit = document.querySelector('.lunenuit')
const oiseaux = document.querySelector('.oiseaux')
const fusee = document.querySelector('.fusée')
const cielNuit = document.querySelector('.ciel-nuit')
const titreNeigeNuit = document.querySelector('.container-titre-neige-nuit')
const infoNeigeNuitUn = document.querySelector('.container-info-neige-nuit-un')
const infoNeigeNuitDeux = document.querySelector('.container-info-neige-nuit-deux')
const titreNuit = document.querySelector('.titre-nuit')
const titreEverest = document.querySelector('.titre-everest')
const infoEverestUn = document.querySelector('.everest-info-un')
const infoEverestDeux = document.querySelector('.everest-info-deux')
const infoEverestTrois = document.querySelector('.everest-info-trois')
const fin = document.querySelector('.fin')
window.addEventListener('scroll', function(){
    var value = window.scrollY;
    console.log(value*0.1);
    start.style.scale = value * 0.1 + 100 + '%';
    start.style.top = value * 0.1 + '%';
    titre.style.top = value * 0.2 + 5 + '%';

    if(value * 0.1 > 100){
        infoNeige1.style.opacity = 1;

    }else if(value * 0.1 < 100){
        infoNeige1.style.opacity = 0;
    }

    if(value * 0.1 > 130){
        infoNeige2.style.opacity = 1;
        infoNeige2.style.left = (value * 0.1 - 130) * 0.1 - 40 + '%';
        infoNeige3.style.opacity = 1;
        infoNeige3.style.right = (value * 0.1 - 130) * 0.1 - 40 + '%';

    }else if(value * 0.1 < 130){
        infoNeige2.style.opacity = 1;
    }

    if(value*0.1 > 800){
         deux.style.scale = (value * 0.1 - 800) + 100 + '%';
         deux.style.top = (value * 0.1 - 800) + '%';
         deux.style.right = (value * 0.1 - 800) * 0.07 + '%';
     }else if(value * 0.1 < 800){
         deux.style.top = 0;
         deux.style.scale = 1;
     }

    if(value*0.1 > 1050){
         cielneigenuit.style.opacity = (value * 0.1 - 1050) / 100;
         lune.style.right = (value * 0.1 - 1050) * 0.1 - 10 + '%';
         lune.style.bottom = (value * 0.1 - 1050) * 0.1 + 30 + '%';
         infoNeigeNuitUn.style.opacity = 1;
         infoNeigeNuitDeux.style.opacity = 1;
         mongolfiere.style.top = -(value * 0.1 - 1050) * 0.1 + 50 + '%'
        
     }else if(value*0.1 < 1050){
         cielneigenuit.style.opacity = 0;
         infoNeigeNuitUn.style.opacity = 0;
         infoNeigeNuitDeux.style.opacity = 0;
     }
     if(value * 0.1 > 1400){
       lune.style.bottom = -(value * 0.1 - 1400) * 0.2 + ((value * 0.1 - 1050) * 0.1 + 30) + '%';
     }

     if(value*0.1 > 980){
        titreNeigeNuit.style.opacity = 1;
        
     }else if(value*0.1 < 980){
         titreNeigeNuit.style.opacity = 0;
     }

     if(value*0.1 > 1200){
         titreNeigeNuit.style.color = "white";
         infoNeigeNuitUn.style.color = "white";
         infoNeigeNuitDeux.style.color = "white";
        
     }else if(value*0.1 < 1200){
         titreNeigeNuit.style.color = "black";
         infoNeigeNuitUn.style.color = "black";
         infoNeigeNuitDeux.style.color = "black";
     }

     if(value * 0.1 > 1580){
         trois.style.top = (value * 0.1 - 1580) + '%';
         trois.style.scale = (value * 0.1 - 1580) + 100 + '%';
         cielneigenuit.style.opacity = (-value * 0.1 - 1580) / 100;
         cielneigenuit.style.transition = "all 0s ease";
         lune.style.opacity = 0;
         quatre.style.opacity = 1;
     }else if(value * 0.1 < 1580){
         lune.style.opacity = 1;
         trois.style.top = 0;
         trois.style.scale = 1;
         cielneigenuit.style.transition = "all 1s ease;";
         quatre.style.opacity = 0
     }

     if(value * 0.1 > 1750){
         lunenuit.style.opacity = (value * 0.1 - 1750) / 100;
         oiseaux.style.left = -(value * 0.1 - 1750) * 0.2 + 20 + '%';
         oiseaux.style.top = -(value * 0.1 - 1750) * 0.1 + 5 + '%';
         fusee.style.top = -(value * 0.1 - 1750) * 0.3 + 100 + '%';
         cinq.style.opacity = 1

     }else if(value * 0.1 < 1750){
         lunenuit.style.opacity = (-value * 0.1 - 1750) / 100;
         cinq.style.opacity = 0;
     }

     if(value * 0.1 > 1800){
         titreNuit.style.opacity = 1;
     }else if(value * 0.1 < 1800){
         titreNuit.style.opacity = 0;
     }

     if(value * 0.1 > 2300){
        quatre.style.opacity = 0
     }

     if(value * 0.1 > 2400){
        titreEverest.style.opacity = 1
     }else if(value * 0.1 < 2400){
        titreEverest.style.opacity = 0
     }

     if(value * 0.1 > 2500){
        infoEverestUn.style.opacity = 1
        infoEverestUn.style.top = 30 + '%'

     }else if(value * 0.1 < 2500){
        infoEverestUn.style.opacity = 0
        infoEverestUn.style.top = 35 + '%'
     }

     if(value * 0.1 > 2600){
        infoEverestDeux.style.opacity = 1
        infoEverestDeux.style.top = 25 + '%'
     }else if(value * 0.1 < 2600){
        infoEverestDeux.style.opacity = 0
        infoEverestDeux.style.top = 30 + '%'
     }

     if(value * 0.1 > 2700){
        infoEverestTrois.style.opacity = 1
        infoEverestTrois.style.bottom = 25 + '%'
        fin.style.display = 'block'
     }else if(value * 0.1 < 2700){
        infoEverestTrois.style.opacity = 0
        infoEverestTrois.style.bottom = 20 + '%'
        fin.style.display = 'none'
     }
     

})

fin.addEventListener('click', () =>{
    window.scrollTo({
        top: 0
    })
})