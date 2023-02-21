<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site MMI Esport">
    <link rel="stylesheet" href="../mmi-e-sport/assets/css/app.css">
    <title>MMI E-SPORT</title>
    <link rel="icon" type="image/x-icon" href="../mmi-e-sport/assets/img/logo.svg">
</head>
<body>
    <header>
        <a href="index.php"><img src="../mmi-e-sport/assets/img/logo.svg" alt=""></a>
            <ul>
                <a href="index.php" class="link">Accueil</a>
                <a href="index.php" class="link">Programme</a>
                <a href="index.php" href="jeux.php">Jeux</a>
                <a href="index.php" class="link">Equipes</a>
                <?php
                if($_SESSION['utilisateur']==''){
                ?>
                <a href="connexion.php">Se connecter</a>
                <?php
                }
                else{
                ?>
                 <a href=""><?php echo$_SESSION['utilisateur']['id']?></a>
                 <a href="deco.php">Déconnexion</a>
                <?php
                }
                ?>
            </ul>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
    </header>
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
<?php include('footer.php') ?>
