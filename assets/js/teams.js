document.addEventListener("DOMContentLoaded", function() {
    var flkty = new Flickity('.carousel', {
    });
  
    window.addEventListener("resize", function() {
      flkty.resize();
    });
  });

  
