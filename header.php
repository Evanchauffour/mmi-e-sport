<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$user = 'mamp';
$pass = 'root';
try  
{     $db = new PDO ('mysql:host=localhost;dbname=mmiesport', $user, $pass);
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
    <link rel="stylesheet" href="../mmi-e-sport/assets/css/app.css">
    <title>MMI E-SPORT</title>
</head>
<body>
    <header>
        <img src="../mmi-e-sport/assets/img/logo.svg" alt="">
            <ul>
                <li data-page='1'>Accueil</li>
                <li data-page='2'>Programme</li>
                <li data-page='3'>Jeux</li>
                <li data-page='4'>Contact</li>
                <?php
                if($_SESSION['utilisateur']==''){
                ?>
                <li><a href="">Se connecter</a></li>
                <?php
                }
                else{
                ?>
                 <li><a href=""><?php echo$_SESSION['utilisateur']['nom']?></a></li>
                <?php
                }
                ?>
            </ul>

    </header>
</body>
</html>