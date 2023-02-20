const buttonsClose = document.querySelectorAll('.close');
const buttonsOpenCompetitive = document.querySelectorAll('.open-competitive');
const popupsCompetitive = document.querySelectorAll('.pop-up-competitive');

buttonsOpenCompetitive.forEach(button =>{
    button.addEventListener('click', () =>{
        popupCompetitive.style.visibility = "visible"
    })
})

buttonsClose.forEach(close =>{
    close.addEventListener('click', () =>{
        popupsCompetitive.forEach(popupCompetitive =>{
            popupCompetitive.style.visibility = "hidden"
        })
    })
})


   // L'image img#image
   var image = document.getElementById("image");
     
   // La fonction previewPicture
   var previewPicture  = function (e) {

       // e.files contient un objet FileList
       const [picture] = e.files

       // "picture" est un objet File
       if (picture) {

           // L'objet FileReader
           var reader = new FileReader();

           // L'événement déclenché lorsque la lecture est complète
           reader.onload = function (e) {
               // On change l'URL de l'image (base64)
               image.src = e.target.result
           }

           // On lit le fichier "picture" uploadé
           reader.readAsDataURL(picture)

       }
   } 

   const linksGame = document.querySelectorAll('.open-competitive');
   const popGame = document.querySelectorAll('.pop-up-competitive');
   indexPop = 0;
   
   
   linksGame.forEach(link =>{
   
       link.addEventListener('click', (e) =>{
           console.log('test');
           indexPop = e.target.getAttribute('data-pop');
           console.log(index)
           for(j = 0; j < popGame.length; j++){
               if(popGame[j].getAttribute('data-pop') == indexPop){
                   popGame[j].style.visibility = "visible";
                   popGame[j].style.display = "block";
                   console.log(index);
               }else{
                   popGame[j].style.visibility = "hidden";
                   popGame[j].style.display = "none";
               }
           }
       })
   
   })