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
        <a href="inscription.php">Veuillez vous connecter</a>
        <?php
                }
                else{
                    $_SESSION['utilisateur']['id'] = $nomplayer;
                    foreach($db->query("SELECT * from equipes WHERE chef = '$nomplayer' and jeu_id = 1") as $chef_mail){
                        $mailchef = $chef_mail['chef'];
                        }
                        if($mailchef == $nomplayer){
                            ?>
                            <p class="open-competitive" data-pop="1">Modifier</p>
                            <?php

                        }
                        else{

                ?>  
                <p class="open-competitive" data-pop="1">S'inscrire</p>
                <?php
            }
        }
            ?>
                <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Rocket League</h3>
                <?php
                if($_SESSION['utilisateur']==''){
                ?>
        <a href="inscription.php">Veuillez vous connecter</a>
        <?php
                }
                else{
                    $_SESSION['utilisateur']['id'] = $nomplayer;
                    foreach($db->query("SELECT * from equipes WHERE chef = '$nomplayer' and jeu_id = 2") as $chef_mailr){
                        $mailchefr = $chef_mailr['chef'];
                        }
                        if($mailchefr == $nomplayer){
                            ?>
                            <p class="open-competitive" data-pop="2">Modifier</p>
                            <?php

                        }
                        else{

                ?>  
                <p class="open-competitive" data-pop="2">S'inscrire</p>
                <?php
            }
        }
            ?>
                <img src="../mmi-e-sport/assets/img/rocket.svg" alt="">
            </div>
            <div class="jeux">
                <h3>Team Fortress 2</h3>
                <?php
                if($_SESSION['utilisateur']==''){
                ?>
        <a href="inscription.php">Veuillez vous connecter</a>
        <?php
                }
                else{
                    $_SESSION['utilisateur']['id'] = $nomplayer;
                    foreach($db->query("SELECT * from equipes WHERE chef = '$nomplayer' and jeu_id = 3") as $chef_mailv){
                        $mailchefv = $chef_mailv['chef'];
                        }
                        if($mailchefv == $nomplayer){
                            ?>
                            <p class="open-competitive" data-pop="3">Modifier</p>
                            <?php

                        }
                        else{

                ?>  
                <p class="open-competitive" data-pop="3">S'inscrire</p>
                <?php
            }
        }
            ?>
                <img src="../mmi-e-sport/assets/img/team.svg" alt="">
            </div>
        </div>
        <?php
        if($mailchef != $nomplayer){
            ?>
        <!-- Debut cre v -->
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
                            <label for="file-upload1" class="custom-file-upload"><i class="fa fa-cloud-upload"></i>Votre Logo</label>
                            <input id="file-upload1" type="file" name="picture" onchange="previewPicture1(this)" accept=".jpg, .png, .gif" />
                        </div>
                        <div class="upper-right">
                            <div class="logo">
                                <img id="imagevalo" src="">
                                <!-- <input type="file" name="picture" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required > -->
                            </div>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="lower-left">
                            <h4>MEMBRES D’ÉQUIPE</h4>
                            <input type="email" placeholder="Mail Universitaire chef d'équipe" name="mail1">
                            <input type="email" placeholder="Mail Universitaire" name="mail2">
                            <input type="email" placeholder="Mail Universitaire" name="mail3">
                            <input type="email" placeholder="Mail Universitaire" name="mail4">
                            <input type="email" placeholder="Mail Universitaire" name="mail5">
                        </div>

                    </div>
                    <input type="submit" value="Valider" class="button">
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
                                                'chef' => $player1_name
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
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
<!-- Fin -->
<?php
}

if($mailchef == $nomplayer){
?>
<!-- Debut chef  -->
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
                            <label for="file-upload1" class="custom-file-upload"><i class="fa fa-cloud-upload"></i>Votre Logo</label>
                            <input id="file-upload1" type="file" name="picture" onchange="previewPicture1(this)" accept=".jpg, .png, .gif" />
                        </div>
                        <div class="upper-right">
                            <div class="logo">
                                <img id="imagevalo" src="">
                                <!-- <input type="file" name="picture" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required > -->
                            </div>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="lower-left">
                            <h4>MEMBRES D’ÉQUIPE</h4>
                            <input type="email" placeholder="Mail Universitaire chef d'équipe" name="mail1">
                            <input type="email" placeholder="Mail Universitaire" name="mail2">
                            <input type="email" placeholder="Mail Universitaire" name="mail3">
                            <input type="email" placeholder="Mail Universitaire" name="mail4">
                            <input type="email" placeholder="Mail Universitaire" name="mail5">
                        </div>

                    </div>
                    <input type="submit" value="Modifier" class="button">
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
                                    foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
                                        $id_equipev = $equipes['0'];
                                        }
                                    $db->exec("DELETE FROM membres_equipe WHERE equipe_id = '$id_equipev';
                                            DELETE FROM equipes WHERE id = '$id_equipev';");
                                            $q = $db->prepare("INSERT INTO equipes(nom,jeu_id,chef) VALUES (:nom,:jeu_id,:chef)");
                                            $q->execute([
                                                'nom' => $nom_create,
                                                'jeu_id'=> 1,
                                                'chef' => $player1_name
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
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

<!-- fin chef -->
<?php
}


if($mailchefr != $nomplayer){
    ?>

<!-- debut crea rocket  -->
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
                                <label for="file-upload2" class="custom-file-upload"><i class="fa fa-cloud-upload"></i>Votre Logo</label>
                                <input id="file-upload2" type="file" name="picture" onchange="previewPicture2(this)" accept=".jpg, .png, .gif" />
                            </div>
                            <div class="upper-right">
                                <div class="logo">
                                    <img id="imagerocket" src="">
                                </div>
                            </div>
                        </div>
                        <div class="lower">
                            <div class="lower-left">
                                <h4>MEMBRES D’ÉQUIPE</h4>
                                <input type="email" placeholder="Mail Universitaire chef d'équipe" name="mail1r">
                                <input type="email" placeholder="Mail Universitaire" name="mail2r">
                                <input type="email" placeholder="Mail Universitaire" name="mail3r">
                            </div>
                        </div>
                        <input type="submit" value="Valider" class="button">
                    </form>
                </div>
                <div class="close">
                    <img src="../mmi-e-sport/assets/img/close.svg" alt="">
                </div>
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
                                                'chef' => $player1_name
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
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
      </div>
      <?php
}
if($mailchefr == $nomplayer){
    ?>
      <!-- fin crea rocket  -->
    <!-- debut  chef rocket  -->
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
                                <label for="file-upload2" class="custom-file-upload"><i class="fa fa-cloud-upload"></i>Votre Logo</label>
                                <input id="file-upload2" type="file" name="picture" onchange="previewPicture2(this)" accept=".jpg, .png, .gif" />
                            </div>
                            <div class="upper-right">
                                <div class="logo">
                                    <img id="imagerocket" src="">
                                </div>
                            </div>
                        </div>
                        <div class="lower">
                            <div class="lower-left">
                                <h4>MEMBRES D’ÉQUIPE</h4>
                                <input type="email" placeholder="Mail Universitaire chef d'équipe" name="mail1r">
                                <input type="email" placeholder="Mail Universitaire" name="mail2r">
                                <input type="email" placeholder="Mail Universitaire" name="mail3r">
                            </div>
                        </div>
                        <input type="submit" value="Modifier" class="button">
                    </form>
                </div>
                <div class="close">
                    <img src="../mmi-e-sport/assets/img/close.svg" alt="">
                </div>
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
                            foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
                                $id_equipev = $equipes['0'];
                                }
                            $db->exec("DELETE FROM membres_equipe WHERE equipe_id = '$id_equipev';
                                    DELETE FROM equipes WHERE id = '$id_equipev';");
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
      </div>
      <?php
}
?>
    <!--  fin chef rocket -->
    <?php
    if($mailchefv != $nomplayer){
        ?>
      <!-- Debut crea tf2 -->
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
                            <label for="file-upload3" class="custom-file-upload"><i class="fa fa-cloud-upload"></i>Votre Logo</label>
                            <input id="file-upload3" type="file" name="picture" onchange="previewPicture3(this)" accept=".jpg, .png, .gif" />
                        </div>
                        <div class="upper-right">
                            <div class="logo">
                                <img id="imageteam" src="">
                            </div>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="lower-left">
                            <h4>MEMBRES D’ÉQUIPE</h4>
                            <input type="email" placeholder="Mail Universitaire chef d'équipe" name="mail1tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail2tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail3tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail4tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail5tf2">
                        </div>
                    </div>
                    <input type="submit" value="Valider" class="button">
                </form>
            </div>
            <div class="close">
                <img src="../mmi-e-sport/assets/img/close.svg" alt="">
            </div>
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
                                                'chef' => $player1_name
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
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

<!-- fin -->
<?php
}
if($mailchefv == $nomplayer){
    ?>
<!-- debut chef tf2 -->
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
                            <label for="file-upload3" class="custom-file-upload"><i class="fa fa-cloud-upload"></i>Votre Logo</label>
                            <input id="file-upload3" type="file" name="picture" onchange="previewPicture3(this)" accept=".jpg, .png, .gif" />
                        </div>
                        <div class="upper-right">
                            <div class="logo">
                                <img id="imageteam" src="">
                            </div>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="lower-left">
                            <h4>MEMBRES D’ÉQUIPE</h4>
                            <input type="email" placeholder="Mail Universitaire chef d'équipe" name="mail1tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail2tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail3tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail4tf2">
                            <input type="email" placeholder="Mail Universitaire" name="mail5tf2">
                        </div>
                    </div>
                    <input type="submit" value="Modifier" class="button">
                </form>
            </div>
            <div class="close">
                <img src="../mmi-e-sport/assets/img/close.svg" alt="">
            </div>
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
                                    foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
                                        $id_equipev = $equipes['0'];
                                        }
                                    $db->exec("DELETE FROM membres_equipe WHERE equipe_id = '$id_equipev';
                                            DELETE FROM equipes WHERE id = '$id_equipev';");
                                            $q = $db->prepare("INSERT INTO equipes(nom,jeu_id,chef) VALUES (:nom,:jeu_id,:chef)");
                                            $q->execute([
                                                'nom' => $nom_create,
                                                'jeu_id'=> 3,
                                                'chef' => $player1_name
                                                ]);
                                                foreach($db->query("SELECT * from equipes WHERE chef = '$player1_name'") as $equipes){
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
<!--  fin chef tf2 -->
<?php
}?>
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
<?php
foreach($db->query("SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
FROM equipes e
JOIN membres_equipe me ON e.id = me.equipe_id
JOIN joueurs j ON me.joueur_id = j.id
WHERE e.chef = '$mailchef'
GROUP BY e.id") as $myteam0v){
    $name_myteam0v = $myteam0v['0'];
    }  
    if($name_myteam0v!=''){
    ?>
    <div class="myEquipe">
        <div class="head-myEquipe">
            <h3>MES ÉQUIPES</h3>
        </div>
        <div class="infos-myEquipe">
            <!-- valo -->
            <?php
foreach($db->query("SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
FROM equipes e
JOIN membres_equipe me ON e.id = me.equipe_id
JOIN joueurs j ON me.joueur_id = j.id
WHERE e.jeu_id = 1 AND e.chef = '$mailchef'
GROUP BY e.id") as $myteamv){
    $name_myteamv = $myteamv['0'];
    $player_myteamv = $myteamv['1'];
    }  
    if($name_myteam !=''){
    ?>
            <div class="jeu">
                <div class="head-jeu">
                    <h4>Valorant</h4>
                    <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                </div>
                 <div class="contain-jeu">
                    <h5>Nom d’équipe</h5>
                    <h6><?php echo $name_myteamv?></h6>
                    <div class="container-joueurs">
                        <h5>Joueurs</h5>    
                        <ul>
                            <?php
                            echo $player_myteamv; 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
        <!-- fin -->
        <!-- rocket league -->
        <?php
        foreach($db->query("SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
        FROM equipes e
        JOIN membres_equipe me ON e.id = me.equipe_id
        JOIN joueurs j ON me.joueur_id = j.id
        WHERE e.jeu_id = 2 AND e.chef = '$mailchef'
        GROUP BY e.id") as $myteamr){
            $name_myteamr = $myteamr['0'];
            $player_myteamr = $myteamr['1'];
            }  
            if($name_myteamr !=''){
            ?>
                    <div class="jeu">
                        <div class="head-jeu">
                            <h4>Rocket League</h4>
                            <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                        </div>
                         <div class="contain-jeu">
                            <h5>Nom d’équipe</h5>
                            <h6><?php echo $name_myteamr?></h6>
                            <div class="container-joueurs">
                                <h5>Joueurs</h5>    
                                <ul>
                                    <?php
                                    echo $player_myteamr; 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>
        <!-- Fin -->
         <!-- TF2 -->
         <?php
        foreach($db->query("SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
        FROM equipes e
        JOIN membres_equipe me ON e.id = me.equipe_id
        JOIN joueurs j ON me.joueur_id = j.id
        WHERE e.jeu_id = 3 AND e.chef = '$mailchef'
        GROUP BY e.id") as $myteamt){
            $name_myteamt = $myteamt['0'];
            $player_myteamt = $myteamt['1'];
            }  
            if($name_myteam !=''){
            ?>
                    <div class="jeu">
                        <div class="head-jeu">
                            <h4>Team Forteress 2</h4>
                            <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                        </div>
                         <div class="contain-jeu">
                            <h5>Nom d’équipe</h5>
                            <h6><?php echo $name_myteamt?></h6>
                            <div class="container-joueurs">
                                <h5>Joueurs</h5>    
                                <ul>
                                    <?php
                                    echo $player_myteamt; 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>
        <!-- Fin -->
        </div>
    </div>
    <?php
                }
            
                ?>

                <!-- Page Equipe pas chef -->

<div class="page page-teams" data-page="4">
<?php
foreach($db->query("SELECT * FROM `joueurs` WHERE pseudo = '$nomplayer'") as $idp){
    $idplayer = $idp['0'];
    }  
foreach($db->query("SELECT joueurs_equipe.equipe_id, GROUP_CONCAT('<li>', joueurs.pseudo, '</li>' SEPARATOR '') AS joueurs
FROM membres_equipe joueurs_equipe
JOIN joueurs ON joueurs.id = joueurs_equipe.joueur_id
JOIN equipes ON equipes.id = joueurs_equipe.equipe_id
JOIN jeux ON jeux.id = equipes.jeu_id
WHERE joueurs_equipe.equipe_id IN (
  SELECT joueurs_equipe.equipe_id
  FROM membres_equipe joueurs_equipe
  WHERE joueurs_equipe.joueur_id = '$idplayer')
GROUP BY joueurs_equipe.equipe_id") as $myteam0vv){
    $name_myteam0vv = $myteam0vv['0'];
    }  
    if($name_myteam0vv !=''){
    ?>
    <div class="myEquipe">
        <div class="head-myEquipe">
            <h3>MES ÉQUIPES</h3>
        </div>
        <div class="infos-myEquipe">
            <!-- valo -->
            <?php
foreach($db->query("SELECT joueurs_equipe.equipe_id, GROUP_CONCAT('<li>', joueurs.pseudo, '</li>' SEPARATOR '') AS joueurs
FROM membres_equipe joueurs_equipe
JOIN joueurs ON joueurs.id = joueurs_equipe.joueur_id
JOIN equipes ON equipes.id = joueurs_equipe.equipe_id
JOIN jeux ON jeux.id = equipes.jeu_id
WHERE joueurs_equipe.equipe_id IN (
  SELECT joueurs_equipe.equipe_id
  FROM membres_equipe joueurs_equipe
  WHERE jeux.nom = 'valorant' AND joueurs_equipe.joueur_id = '$idplayer')
GROUP BY joueurs_equipe.equipe_id") as $myteamvv){
    $name_myteamvv = $myteamvv['0'];
    $player_myteamvv = $myteamvv['1'];
    }  
    foreach($db->query("SELECT * FROM `equipes` WHERE id = '$name_myteamvv'") as $idteamvv){
        $name_teamv= $idteam['1'];
        } 
    if($name_myteamvv !=''){
    ?>
            <div class="jeu">
                <div class="head-jeu">
                    <h4>Valorant</h4>
                    <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                </div>
                 <div class="contain-jeu">
                    <h5>Nom d’équipe</h5>
                    <h6><?php echo $name_teamvv?></h6>
                    <div class="container-joueurs">
                        <h5>Joueurs</h5>    
                        <ul>
                            <?php
                            echo $player_myteamvv; 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
        <!-- fin -->
        <!-- rocket league -->
        <?php
        foreach($db->query("SELECT joueurs_equipe.equipe_id, GROUP_CONCAT('<li>', joueurs.pseudo, '</li>' SEPARATOR '') AS joueurs
        FROM membres_equipe joueurs_equipe
        JOIN joueurs ON joueurs.id = joueurs_equipe.joueur_id
        JOIN equipes ON equipes.id = joueurs_equipe.equipe_id
        JOIN jeux ON jeux.id = equipes.jeu_id
        WHERE joueurs_equipe.equipe_id IN (
          SELECT joueurs_equipe.equipe_id
          FROM membres_equipe joueurs_equipe
          WHERE jeux.nom = 'rocket' AND joueurs_equipe.joueur_id = '$idplayer')
        GROUP BY joueurs_equipe.equipe_id") as $myteamrr){
            $name_myteamrr = $myteamrr['0'];
            $player_myteamrr = $myteamrr['1'];
            }  
            foreach($db->query("SELECT * FROM `equipes` WHERE id = '$name_myteamrr'") as $idteamrr){
                $name_teamrr= $idteamrr['1'];
                } 
            if($name_myteam !=''){
            ?>
                    <div class="jeu">
                        <div class="head-jeu">
                            <h4>Rocket League</h4>
                            <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                        </div>
                         <div class="contain-jeu">
                            <h5>Nom d’équipe</h5>
                            <h6><?php echo $name_teamrr?></h6>
                            <div class="container-joueurs">
                                <h5>Joueurs</h5>    
                                <ul>
                                    <?php
                                    echo $player_myteamrr; 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>
        <!-- Fin -->
         <!-- TF2 -->
         <?php
        foreach($db->query("SELECT joueurs_equipe.equipe_id, GROUP_CONCAT('<li>', joueurs.pseudo, '</li>' SEPARATOR '') AS joueurs
        FROM membres_equipe joueurs_equipe
        JOIN joueurs ON joueurs.id = joueurs_equipe.joueur_id
        JOIN equipes ON equipes.id = joueurs_equipe.equipe_id
        JOIN jeux ON jeux.id = equipes.jeu_id
        WHERE joueurs_equipe.equipe_id IN (
          SELECT joueurs_equipe.equipe_id
          FROM membres_equipe joueurs_equipe
          WHERE jeux.nom = 'tf2' AND joueurs_equipe.joueur_id = '$idplayer')
        GROUP BY joueurs_equipe.equipe_id") as $myteamtt){
            $name_myteamtt = $myteamtt['0'];
            $player_myteamtt = $myteamtt['1'];
            }  
            foreach($db->query("SELECT * FROM `equipes` WHERE id = '$name_myteamtt'") as $idteamtt){
            $name_teamtt= $idteamtt['1'];
            }  

            if($name_myteamtt !=''){
            ?>
                    <div class="jeu">
                        <div class="head-jeu">
                            <h4>Team Forteress 2</h4>
                            <img src="../mmi-e-sport/assets/img/valo.svg" alt="">
                        </div>
                         <div class="contain-jeu">
                            <h5>Nom d’équipe</h5>
                            <h6><?php echo $name_teamtt?></h6>
                            <div class="container-joueurs">
                                <h5>Joueurs</h5>    
                                <ul>
                                    <?php
                                    echo $player_myteamtt; 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>
        <!-- Fin -->
        </div>
    </div>
    <?php
                }
            
                ?>
    <h1>ÉQUIPES</h1>
    <h2><span></span>INSCRITES</h2>
    <div class="valorant-teams">
        <h3>VALORANT</h3>
        <div class="container-card">
            <!-- Début -->
            <?php
            $serveur = "localhost";								
            $utilisateur = "mamp";				
            $mdp = "root";						
            $base = "mmiesport";
            $lienBase = mysqli_init();
            $succes = mysqli_real_connect($lienBase,$serveur,$utilisateur,$mdp,$base,$port) OR DIE ('Probl&egrave;me au niveau du serveur de bdd');
            $requete2 = "SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
            FROM equipes e
            JOIN membres_equipe me ON e.id = me.equipe_id
            JOIN joueurs j ON me.joueur_id = j.id
            WHERE e.jeu_id = 1 
            GROUP BY e.id;
            ";
            $resultat2 = mysqli_query($lienBase,$requete2) OR DIE("Requ&ecirc;te : ".mysql_error());
            if(!$resultat2) {
                echo "Impossible d'ex&eacute;cuter la requ&ecirc;te dans la base : " . mysql_error();
                exit;
            }
            $nbEnreg2 = mysqli_num_rows($resultat2);
        
            
            for ($j=0;$j<$nbEnreg2;$j++) {
                $donnees2 = mysqli_fetch_row($resultat2);
                $name_team= $donnees2[0];
                $name_player = $donnees2[1];
                
                ?>
                <div class="carousel">
                    <div class="spin-container">
                        <div class="front">
                            <div class="contain-front">
                                <img src="../mmi-e-sport/assets/img/logo-exemple.svg" alt="">
                                <h3><?php echo $name_team?></h3>
                            </div>
                        </div>
                        <div class="back">
                            <h3>Players</h3>
                            <ul>
                                <li><?php echo $name_player?></li>
                            </ul>
                        </div>
                    </div>
                </div>   
                        <!--Fin  -->
                        <?php
            }
            ?>
        </div>
    </div>


    <div class="rocket-teams">
        <h3>ROCKET LEAGUE</h3>
        <div class="container-card">

                <!-- Début -->
            <?php
            $serveur = "localhost";								
            $utilisateur = "mamp";				
            $mdp = "root";						
            $base = "mmiesport";
            $lienBase = mysqli_init();
            $succes = mysqli_real_connect($lienBase,$serveur,$utilisateur,$mdp,$base,$port) OR DIE ('Probl&egrave;me au niveau du serveur de bdd');
            $requete2 = "SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
            FROM equipes e
            JOIN membres_equipe me ON e.id = me.equipe_id
            JOIN joueurs j ON me.joueur_id = j.id
            WHERE e.jeu_id = 2
            GROUP BY e.id;
            ";
            $resultat2 = mysqli_query($lienBase,$requete2) OR DIE("Requ&ecirc;te : ".mysql_error());
            if(!$resultat2) {
                echo "Impossible d'ex&eacute;cuter la requ&ecirc;te dans la base : " . mysql_error();
                exit;
            }
            $nbEnreg2 = mysqli_num_rows($resultat2);
        
            
            for ($j=0;$j<$nbEnreg2;$j++) {
                $donnees2 = mysqli_fetch_row($resultat2);
                $name_team= $donnees2[0];
                $name_player = $donnees2[1];
                
                ?>
                <div class="carousel">
                    <div class="spin-container">
                        <div class="front">
                            <div class="contain-front">
                                <img src="../mmi-e-sport/assets/img/logo-exemple.svg" alt="">
                                <h3><?php echo $name_team?></h3>
                            </div>
                        </div>
                        <div class="back">
                            <h3>Players</h3>
                            <ul>
                                <li><?php echo $name_player?></li>
                            </ul>
                        </div>
                    </div>
                </div>   
                        <!--Fin  -->
                        <?php
            }
            ?>
                
        </div>
    </div>


    <div class="tf2-teams">
        <h3>TEAM FORTRESS</h3>
        <div class="container-card">

            <!-- Début -->
            <?php
            $serveur = "localhost";								
            $utilisateur = "mamp";				
            $mdp = "root";						
            $base = "mmiesport";
            $lienBase = mysqli_init();
            $succes = mysqli_real_connect($lienBase,$serveur,$utilisateur,$mdp,$base,$port) OR DIE ('Probl&egrave;me au niveau du serveur de bdd');
            $requete2 = "SELECT e.nom AS equipe, GROUP_CONCAT(CONCAT('<li>', j.pseudo, '</li>') SEPARATOR '') AS joueurs
            FROM equipes e
            JOIN membres_equipe me ON e.id = me.equipe_id
            JOIN joueurs j ON me.joueur_id = j.id
            WHERE e.jeu_id = 3
            GROUP BY e.id;
            ";
            $resultat2 = mysqli_query($lienBase,$requete2) OR DIE("Requ&ecirc;te : ".mysql_error());
            if(!$resultat2) {
                echo "Impossible d'ex&eacute;cuter la requ&ecirc;te dans la base : " . mysql_error();
                exit;
            }
            $nbEnreg2 = mysqli_num_rows($resultat2);
        
            
            for ($j=0;$j<$nbEnreg2;$j++) {
                $donnees2 = mysqli_fetch_row($resultat2);
                $name_team= $donnees2[0];
                $name_player = $donnees2[1];
                
                ?>
                <div class="carousel">
                    <div class="spin-container">
                        <div class="front">
                            <div class="contain-front">
                                <img src="../mmi-e-sport/assets/img/logo-exemple.svg" alt="">
                                <h3><?php echo $name_team?></h3>
                            </div>
                        </div>
                        <div class="back">
                            <h3>Players</h3>
                            <ul>
                                <li><?php echo $name_player?></li>
                            </ul>
                        </div>
                    </div>
                </div>   
                        <!--Fin  -->
                        <?php
            }
            ?>

        </div>
    </div>
</div>

<?php include('footer.php') ?>