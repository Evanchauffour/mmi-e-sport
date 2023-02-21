<?php include('header.php') ?>
<div class="page page-home" data-page="1">
<div class="home">
    <div class="infos">
        <h1>ÉVÉNEMENT <br> MMI   E-SPORT</h1>
        <h2>6 AVRIL 2023<span></span>14h-20h</h2>
        <p>Rendez-vous salle “Eve” pour une expérience unique...</p>
        <?php
                if($_SESSION['utilisateur']==''){
                ?>
        <a href="inscription.php">Inscrivez-vous !</a>
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
    <iframe src="https://player.twitch.tv/?channel=kamet0&parent=mmi.univ-smb.fr" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
    </div>
</div>
<div class="team">
    <div class="contain-team">
        <h2>NOTRE EQUIPE</h2>
        <img src="../mmi-e-sport/assets/img/team-img.svg" alt="">
    </div>
</div>
</div>

<!-- Page Programme -->

<div class="page page-programme" data-page="2">
    <div class="container-espaces">
        <h1>les espaces</h1>
        <h2><span></span>lesquels ?</h2>
        <div class="contain-espaces">
            <div class="espace">
                <div class="infos">
                    <h3>un espace de détente</h3>
                    <p>Retrouver un espace convivial avec des jeux de salons phares comme Mario Kart, Just Dance et plein d'autres encore !</p>
                </div>
                <img src="../mmi-e-sport/assets/img/detente.svg" alt="">
            </div>
            <div class="espace">
                <div class="infos">
                    <h3>un espace compétitif</h3>
                    <p>Là où se passera les différents matchs compétitifs, Smash Bros, Rocket League… et bien évidemment les matchs du tournoi Valorant MMI.</p>
                </div>
                <img src="../mmi-e-sport/assets/img/compete.svg" alt="">
            </div>
            <div class="espace">
                <div class="infos">
                    <h3>un espace réalité virtuelle</h3>
                    <p>Plongez dans le futur du jeux vidéo et des innovations technologiques à travers une expérience de simulation de vol.</p>
                </div>
                <img src="../mmi-e-sport/assets/img/espace-vr.svg" alt="">
            </div>
            <div class="espace">
                <div class="infos">
                    <h3>un espace arcade</h3>
                    <p>Revivez les années 80 et le plaisir des jeux “retrogaming” entre a-mmi’s    =)</p>
                </div>
                <img src="../mmi-e-sport/assets/img/arcade.svg" alt="">
            </div>
        </div>
    </div>
    <div class="container-programme">
        <h1>PROGRAMME</h1>
        <h2><span></span>DE LA JOURNÉE</h2>
        <div class="programme">
            <h3>À VENIR</h3>
        </div>
    </div>
</div>

<!-- Page Jeux -->

<div class="page page-jeux" data-page="3">
    <div class="container-jeux-competitif">
        <h1>COMPÉTITIF</h1>
        <h2><span></span>INSCRIPTION</h2>
        <div class="jeux-competitif">
            <div class="jeux">
                <h3>Valorant</h3>
                <p class="open-competitive" data-pop="1">S'inscrire</p>
                <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Rocket League</h3>
                <p class="open-competitive" data-pop="2">S'inscrire</p>
                <img src="../mmi-e-sport/assets/img/rocket.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Team Fortress 2</h3>
                <p class="open-competitive" data-pop="3">S'inscrire</p>
                <img src="../mmi-e-sport/assets/img/team.svg" alt="">
            </div>
        </div>
        <div class="background-pop-up-competitive" data-pop="1">
        <div class="pop-up-competitive" data-pop="1">
            <div class="contain">
                <div class="left">
                    <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                    <h3>Valorant</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p>
                </div>
                <form action="">
                    <div class="upper">
                        <div class="upper-left">
                            <h4>equipe</h4>
                            <input type="text" placeholder="Nom">
                            <input type="file" name="picture" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required >
                        </div>
                        <div class="upper-right">
                            <div class="logo">
                                <img id="image" src="" alt="Votre Logo">
                            </div>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="lower-left">
                            <h4>MEMBRES D’ÉQUIPE</h4>
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                        </div>
                        <div class="lower-right">
                            <h4>Pseudos</h4>
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                        </div>
                    </div>
                    <button>VALIDER</button>
                </form>
            </div>
            <div class="close">
                <img src="../mmi-e-sport/assets/img/close.svg" alt="">
            </div>
        </div>
</div>
        <div class="background-pop-up-competitive" data-pop="2">
            <div class="pop-up-competitive">
                <div class="contain">
                    <div class="left">
                        <img src="../mmi-e-sport/assets/img/rocket.svg" alt="">
                        <h3>Rocket Leagues</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p>
                    </div>
                    <form action="">
                        <div class="upper">
                            <div class="upper-left">
                                <h4>equipe</h4>
                                <input type="text" placeholder="Nom">
                                <input type="file" name="picture" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required >
                            </div>
                            <div class="upper-right">
                                <div class="logo">
                                    <img id="image" src="" alt="Votre Logo">
                                </div>
                            </div>
                        </div>
                        <div class="lower">
                            <div class="lower-left">
                                <h4>MEMBRES D’ÉQUIPE</h4>
                                <input type="email" placeholder="Mail Universitaire">
                                <input type="email" placeholder="Mail Universitaire">
                                <input type="email" placeholder="Mail Universitaire">
                                <input type="email" placeholder="Mail Universitaire">
                                <input type="email" placeholder="Mail Universitaire">
                            </div>
                            <div class="lower-right">
                                <h4>Pseudos</h4>
                                <input type="text" placeholder="Pseudo">
                                <input type="text" placeholder="Pseudo">
                                <input type="text" placeholder="Pseudo">
                                <input type="text" placeholder="Pseudo">
                                <input type="text" placeholder="Pseudo">
                            </div>
                        </div>
                        <button>VALIDER</button>
                    </form>
                </div>
                <div class="close">
                    <img src="../mmi-e-sport/assets/img/close.svg" alt="">
                </div>
            </div>
        </div>
        <div class="background-pop-up-competitive" data-pop="3">
        <div class="pop-up-competitive">
            <div class="contain">
                <div class="left">
                    <img src="../mmi-e-sport/assets/img/team.svg" alt="">
                    <h3>Team fortress</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p>
                </div>
                <form action="">
                    <div class="upper">
                        <div class="upper-left">
                            <h4>equipe</h4>
                            <input type="text" placeholder="Nom">
                            <input type="file" name="picture" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required >
                        </div>
                        <div class="upper-right">
                            <div class="logo">
                                <img id="image" src="" alt="Votre Logo">
                            </div>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="lower-left">
                            <h4>MEMBRES D’ÉQUIPE</h4>
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                            <input type="email" placeholder="Mail Universitaire">
                        </div>
                        <div class="lower-right">
                            <h4>Pseudos</h4>
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                            <input type="text" placeholder="Pseudo">
                        </div>
                    </div>
                    <button>VALIDER</button>
                </form>
            </div>
            <div class="close">
                <img src="../mmi-e-sport/assets/img/close.svg" alt="">
            </div>
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

<!-- Page Equipe -->

<div class="page page-teams" data-page="4">
    <div class="myEquipe">
        <div class="head-myEquipe">
            <h3>MES ÉQUIPES</h3>
        </div>
        <div class="infos-myEquipe">
            <div class="jeu">
                <div class="head-jeu">
                    <h4>Valorant</h4>
                    <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                </div>
                <div class="contain-jeu">
                    <p>f</p>
                    <p>vsdv</p>
                    <p>dsvsdv</p>
                </div>
            </div>
        </div>
    </div>
    <h1>ÉQUIPES</h1>
    <h2><span></span>INSCRITES</h2>
    <div class="valorant-teams">
        <h3>VALORANT</h3>
        <div class="container-card">
        <!-- div foreach -->
        <div class="carousel">
                <div class="spin-container">
                    <div class="front">
                        <div class="contain-front">
                            <img src="../mmi-e-sport/assets/img/logo-exemple.svg" alt="">
                            <h3>team</h3>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Players</h3>
                        <ul>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rocket-teams">
        <h3>ROCKET LEAGUE</h3>
        <div class="container-card">
        <!-- div foraach -->
        <div class="carousel">
                <div class="spin-container">
                    <div class="front">
                        <div class="contain-front">
                            <img src="../mmi-e-sport/assets/img/logo-exemple.svg" alt="">
                            <h3>team</h3>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Players</h3>
                        <ul>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="tf2-teams">
        <h3>TEAM FORTRESS</h3>
        <div class="container-card">
            <!-- div pour foreach -->
            <div class="carousel">
                <div class="spin-container">
                    <div class="front">
                        <div class="contain-front">
                            <img src="../mmi-e-sport/assets/img/logo-exemple.svg" alt="">
                            <h3>team</h3>
                        </div>
                    </div>
                    <div class="back">
                        <h3>Players</h3>
                        <ul>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                            <li>joueurs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>