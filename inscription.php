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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mmi-e-sport/assets/css/app.css">
    <title>MMI E-SPORT</title>
</head>
<body>
<div class="container-inscription">
    <div class="info-inscription">
        <h1>Inscription</h1>
        <form action="#" method="post">
            <div class="container-input">
                <div class="container-input_label">
                    <label for="pseudo">Pseudonyme :</label>
                    <input type="text" name="pseudo">
                </div>
                <div class="container-input_label">
                    <label for="email">Mail universitaire :</label>
                    <input type="email" name="email">
                </div>
                <div class="container-input_label">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="motdepasse">
                </div>
                <div class="container-input_label">
                    <label for="confirmePassword">Confirmer mot de passe :</label>
                    <input type="password" name="cmotdepasse">
                </div>
            </div>
            <button>S'inscrire</button>
        </form>
        <p>Déjà un compte? <span><a href="connexion.php">Connecte-toi !</a></span></p>
        <img class="bg-connexion" src="../mmi-e-sport/assets/img/bg-connexion.svg" alt=""> 
    </div>
    <a href="index.php" class="back-to-home">Retour site web...</a>
</div>
<?php   
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$motdepasse = $_POST['motdepasse'];
$cmotdepasse = $_POST['cmotdepasse'];
if($motdepasse != NULL){
    if($motdepasse == $cmotdepasse){
        foreach($db->query("SELECT * from univ WHERE mail = '$email'") as $row) {
        $mail = $row['3'];
        }
        foreach($db->query("SELECT * from joueurs WHERE email = '$email'") as $player) {
            $player_mail = $player['2'];
            }

        if($email != $player_mail){
            if($email==$mail){
                $q = $db->prepare("INSERT INTO joueurs(pseudo,email,mot_de_passe) VALUES (:pseudo,:email,:motdepasse)");
                $q->execute([
                    'email' => $email,
                    'pseudo'=> $pseudo,
                    'motdepasse' => $motdepasse
                    ]);
                    header("Location:index.php");
            }
            elseif($email!=$mail){
                echo "<p>L'adresse mail est invalide</p>"; 
                }
        }
    }
    elseif($motdepasse != $cmotdepasse){
        echo "<p>les deux mots de passe ne corespondent pas</p>"; 
        }
}
?>
<?php
    require('footer.php');
?>
</body>
</html>