<body>
<div class="page page-home" data-page="1">
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
<div class="twitch">
    <img src="../mmi-e-sport/assets/img/rejoigniez.svg" alt="">
    <div class="live">
    <iframe src="https://clips.twitch.tv/embed?clip=GleamingLazyBubbleteaWTRuck-VqjqxwFtpiXC4x_L&parent=mmi.univ-smb.fr" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
        </div>
</div>
</div>

<!-- Page jeux -->

<div class="page page-jeux" data-page="3">
<?php include('header.php') ?>
    <div class="container-jeux-competitif">
        <h1>COMPÉTITIF</h1>
        <h2><span></span>INSCRIPTION</h2>
        <div class="jeux-competitif">
            <div class="jeux">
                <h3>Valorant</h3>
                <p>S'inscrire</p>
                <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Rocket League</h3>
                <p>S'inscrire</p>
                <img src="../mmi-e-sport/assets/img/rocket.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Team Fortress 2</h3>
                <p>S'inscrire</p>
                <img src="../mmi-e-sport/assets/img/team.svg" alt="">
            </div>
        </div>
    </div>
    <div class="container-jeux-autre">
        <h1>NON-COMPÉTITIF</h1>
        <h2><span></span>ACCÈS LIBRE</h2>
        <div class="jeux-autre">
            <div class="jeux">
                <img src="../mmi-e-sport/assets/img/smash.svg" alt="">
                <h3>Smash Bros <br> Ultimate</h3>
            </div>
            <div class="jeux">
                <h3>Mario Kart</h3>
                <img src="../mmi-e-sport/assets/img/mario.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Fall Guys</h3>
                <img src="../mmi-e-sport/assets/img/fall.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Just Dance</h3>
                <img src="../mmi-e-sport/assets/img/just.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Trackmania</h3>
                <img src="../mmi-e-sport/assets/img/track.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Réalité <br> Virtuelle</h3>
                <img src="../mmi-e-sport/assets/img/vr.svg" alt="">
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
</body>