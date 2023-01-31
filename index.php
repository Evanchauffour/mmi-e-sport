<?php include('header.php') ?>

<div class="home">
    <div class="infos">
        <h1>ÉVÉNEMENT <br> MMI   E-SPORT</h1>
        <h2>6 AVRIL 2023<span></span>14h-20h</h2>
        <p>Rendez-vous salle “Eve” pour une expérience unique...</p>
        <?php
                if($_SESSION['utilisateur']==''){
                ?>
        <a href="">Inscrivez-vous !</a>
        <?php
                }
            
                else{
                    ?>
                    <a href="">Découvrir</a>
                    <?php
                }
                ?>
    </div>
</div>
<div class="sponsor">
    <marquee>Valiant - MMI Chambéry - L'avalanche - Breakout - MICOUD Production - </marquee>
    <marquee>Valiant - MMI Chambéry - L'avalanche - Breakout - MICOUD Production - </marquee>
    <marquee>Valiant - MMI Chambéry - L'avalanche - Breakout - MICOUD Production - </marquee>
    <marquee>Valiant - MMI Chambéry - L'avalanche - Breakout - MICOUD Production - </marquee>
</div>
<div class="info-event">
    <div class="text">
        <h2>MMI E-SPORT</h2>
        <h3><span></span>c’est quoi ?</h3>
        <p>Un événement d’e-sport mêlant convivialité et compétition, accessible à tous les étudiants de technolac (habitué aux jeux vidéo ou non), le 6 Avril de 14H à 20H dans la salle EVE, ou en live sur Twitch. <br>
        <br> Venez passer un bon moment sur nos différents stands (réalité virtuelle, arcades, et bien d’autres), et supporter nos équipes d’étudiants MMI pendant les demi-finales et finales de notre tournoi Valorant. 
        De nombreux lots seront à gagner grâce à nos partenaires sur l'événement.</p>
    </div>
    <div class="picture"></div>
    <img src="../mmi-e-sport/assets/img/star.svg" alt="" class="star1">
    <img src="../mmi-e-sport/assets/img/star.svg" alt="" class="star2">
    <img src="../mmi-e-sport/assets/img/star.svg" alt="" class="star3">
</div>
