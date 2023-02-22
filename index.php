<?php
$user = 'mamp';
$pass = 'root';
try  
{     $db = new PDO ('mysql:host=localhost;dbname=mmiesport;charset=utf8', 'mamp', 'root');
} catch (PDOException $e)
{     print "Erreur: ". $e->getmessage() . "<br/>";
die;
}
if (isset($_POST['identifiant']) && isset($_POST['mdp'])){
    $id=$_POST['pseudo'];
    $mdp=$_POST['mdp'];
}
?>  
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
                <?php
                if($_SESSION['utilisateur']==''){
                ?>
                <a href="connexion.php">Se connecter</a>
                <?php
                }
                else{
                ?>
                 <p class="open-competitive" data-pop="1">S'inscrire</p>
                <?php
                }
                ?>
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
                <form action="#" method="post">
                    <div class="upper">
                        <div class="upper-left">
                            <h4>equipe</h4>
                            <input type="text" placeholder="Nom" name="nom">
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
                            <input type="email" placeholder="Mail Universitaire" name="mail1">
                            <input type="email" placeholder="Mail Universitaire" name="mail2">
                            <input type="email" placeholder="Mail Universitaire" name="mail3">
                            <input type="email" placeholder="Mail Universitaire" name="mail4">
                            <input type="email" placeholder="Mail Universitaire" name="mail5">
                        </div>
                    </div>
                    <button>VALIDER</button>
                </form>
            </div>
            <div class="close">
                <img src="../mmi-e-sport/assets/img/close.svg" alt="">
            </div>
        </div>

        <?php
$nom_create = $_POST['nom'];
$mail1 = $_POST['mail1'];
$mail2 = $_POST['mail2'];
$mail3 = $_POST['mail3'];
$mail4 = $_POST['mail4'];   
$mail5 = $_POST['mail5'];
if($nom_create != NULL){
    foreach($db->query("SELECT * FROM equipes INNER JOIN jeux ON equipes.jeu_id = jeux.id WHERE jeux.nom = 'valorant'") as $row) {
        $team_valo_name = $row['1'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail1'") as $player1) {
        $player1_id = $player1['0'];
        $player1_name = $player1['1'];
        $player1_mail = $player1['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail2'") as $player2) {
        $player2_id = $player2['0'];
        $player2_name = $player2['1'];
        $player2_mail = $player2['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail3'") as $player3) {
        $player3_id = $player3['0'];
        $player3_name = $player3['1'];
        $player3_mail = $player3['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail4'") as $player4) {
        $player4_id = $player4['0'];
        $player4_name = $player4['1'];
        $player4_mail = $player4['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail5'") as $player5) {
        $player5_id = $player5['0'];
        $player5_name = $player5['1'];
        $player5_mail = $player5['2'];
        }
    if($nom_create != $team_valo_name){       
                if($mail1 == $player1_mail){
                    if($mail2 == $player2_mail){
                        if($mail3 == $player3_mail){
                            if($mail4 == $player4_mail){
                                if($mail5 == $player5_mail){
                                            $q = $db->prepare("INSERT INTO equipes(nom,jeu_id,chef) VALUES (:nom,:jeu_id,:chef)");
                                            $q->execute([
                                                'nom' => $nom_create,
                                                'jeu_id'=> 1,
                                                'chef' => $mail1
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$mail1'") as $equipes){
                                                    $id_equipev = $equipes['0'];
                                                    }
                                         $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player1_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                         $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player2_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player3_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                        $i->execute([
                                        'idplayer' => $player4_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player5_id,
                                        'idteam'=> $id_equipev,
                                        ]);   
                                }
                            }
                        }
                    }   
                }
        else{
            echo "<p>Veuillez rentrez tout les champs</p>";
        }
    }
    elseif($team_valo_name==$nom_create){
            echo "<p>Le nom d'équipe est déjà utilisé</p>";
    }
} 
?>
</div>
        <div class="background-pop-up-competitive" data-pop="2">
            <div class="pop-up-competitive">
                <div class="contain">
                    <div class="left">
                        <img src="../mmi-e-sport/assets/img/rocket.svg" alt="">
                        <h3>Rocket Leagues</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p>
                    </div>
                    <form action="#" method="post">
                        <div class="upper">
                            <div class="upper-left">
                                <h4>equipe</h4>
                                <input type="text" placeholder="Nom" name="nomr">
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
                            <input type="email" placeholder="Mail Universitaire" name="mail1r">
                            <input type="email" placeholder="Mail Universitaire" name="mail2r">
                            <input type="email" placeholder="Mail Universitaire" name="mail3r">
                            </div>
                        </div>
                        <button>VALIDER</button>
                    </form>
                </div>
                <?php
$nom_create = $_POST['nomr'];
$mail1 = $_POST['mail1r'];
$mail2 = $_POST['mail2r'];
$mail3 = $_POST['mail3r'];
if($nom_create != NULL){
    foreach($db->query("SELECT * FROM equipes INNER JOIN jeux ON equipes.jeu_id = jeux.id WHERE jeux.nom = 'rocket'") as $row) {
        $team_valo_name = $row['1'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail1'") as $player1) {
        $player1_id = $player1['0'];
        $player1_name = $player1['1'];
        $player1_mail = $player1['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail2'") as $player2) {
        $player2_id = $player2['0'];
        $player2_name = $player2['1'];
        $player2_mail = $player2['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail3'") as $player3) {
        $player3_id = $player3['0'];
        $player3_name = $player3['1'];
        $player3_mail = $player3['2'];
        }
    if($nom_create != $team_valo_name){       
                if($mail1 == $player1_mail){
                    if($mail2 == $player2_mail){
                        if($mail3 == $player3_mail){
                                            $q = $db->prepare("INSERT INTO equipes(nom,jeu_id,chef) VALUES (:nom,:jeu_id,:chef)");
                                            $q->execute([
                                                'nom' => $nom_create,
                                                'jeu_id'=> 2,
                                                'chef' => $mail1
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$mail1'") as $equipes){
                                                    $id_equipev = $equipes['0'];
                                                    }
                                         $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player1_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                         $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player2_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player3_id,
                                        'idteam'=> $id_equipev,
                                        ]);   
                        }
                    }   
                }
        else{
            echo "<p>Veuillez rentrez tout les champs</p>";
        }
    }
    elseif($team_valo_name==$nom_create){
            echo "<p>Le nom d'équipe est déjà utilisé</p>";
    }
} 
?>
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
                <form action="#" method="post">
                    <div class="upper">
                        <div class="upper-left">
                            <h4>equipe</h4>
                            <input type="text" placeholder="Nom" name="nomtf2">
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
                            <input type="email" placeholder="Mail Universitaire" name="mail1tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail2tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail3tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail4tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail5tf2">
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

            <?php
$nom_create = $_POST['nomtf2'];
$mail1 = $_POST['mail1tf2'];
$mail2 = $_POST['mail2tf2'];
$mail3 = $_POST['mail3tf2'];
$mail4 = $_POST['mail4tf2'];   
$mail5 = $_POST['mail5tf2'];
if($nom_create != NULL){
    foreach($db->query("SELECT * FROM equipes INNER JOIN jeux ON equipes.jeu_id = jeux.id WHERE jeux.nom = 'tf2'") as $row) {
        $team_valo_name = $row['1'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail1'") as $player1) {
        $player1_id = $player1['0'];
        $player1_name = $player1['1'];
        $player1_mail = $player1['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail2'") as $player2) {
        $player2_id = $player2['0'];
        $player2_name = $player2['1'];
        $player2_mail = $player2['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail3'") as $player3) {
        $player3_id = $player3['0'];
        $player3_name = $player3['1'];
        $player3_mail = $player3['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail4'") as $player4) {
        $player4_id = $player4['0'];
        $player4_name = $player4['1'];
        $player4_mail = $player4['2'];
        }
    foreach($db->query("SELECT * from joueurs WHERE email = '$mail5'") as $player5) {
        $player5_id = $player5['0'];
        $player5_name = $player5['1'];
        $player5_mail = $player5['2'];
        }
    if($nom_create != $team_valo_name){       
                if($mail1 == $player1_mail){
                    if($mail2 == $player2_mail){
                        if($mail3 == $player3_mail){
                            if($mail4 == $player4_mail){
                                if($mail5 == $player5_mail){
                                            $q = $db->prepare("INSERT INTO equipes(nom,jeu_id,chef) VALUES (:nom,:jeu_id,:chef)");
                                            $q->execute([
                                                'nom' => $nom_create,
                                                'jeu_id'=> 3,
                                                'chef' => $mail1
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$mail1'") as $equipes){
                                                    $id_equipev = $equipes['0'];
                                                    }
                                         $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player1_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                         $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player2_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player3_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                        $i->execute([
                                        'idplayer' => $player4_id,
                                        'idteam'=> $id_equipev,
                                        ]); 
                                        $i = $db->prepare("INSERT INTO membres_equipe(joueur_id,equipe_id) VALUES (:idplayer,:idteam)");
                                         $i->execute([
                                        'idplayer' => $player5_id,
                                        'idteam'=> $id_equipev,
                                        ]);   
                                }
                            }
                        }
                    }   
                }
        else{
            echo "<p>Veuillez rentrez tout les champs</p>";
        }
    }
    elseif($team_valo_name==$nom_create){
            echo "<p>Le nom d'équipe est déjà utilisé</p>";
    }
} 
?>

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
                    <h5>Nom d’équipe</h5>
                    <h6>LA TEAM DES FOUS</h6>
                    <div class="container-joueurs">
                        <h5>Joueurs</h5>
                        <ul>
                            <li>teregkoe</li>
                            <li>ipjip</li>
                            <li>pijipjiop</li>
                            <li>ijijiij</li>
                            <li>ijijiji</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>ÉQUIPES</h1>
    <h2><span></span>INSCRITES</h2>
    <div class="valorant-teams">
        <h3>VALORANT</h3>
        <div class="container-card">
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