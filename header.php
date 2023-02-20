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
                <li class="link" data-page='1'>Accueil</li>
                <li class="link" data-page='2'>Programme</li>
                <li class="link" data-page='3'>Jeux</li>
                <li class="link" data-page='4'>Equipes</li>
                <?php
                if($_SESSION['utilisateur']==''){
                ?>
                <li><a href="connexion.php">Se connecter</a></li>
                <?php
                }
                else{
                ?>
                 <li><a href=""><?php echo$_SESSION['utilisateur']['id']?></a></li>
                 <li><a href="deco.php">Déconnexion</a></li>
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