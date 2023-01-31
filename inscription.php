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
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../mmi-e-sport/assets/css/app.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <title>E-sport</title>
    </head>
    <?php
            require('header.php')
            ?>
    <body>
        <section class="formulaire">
            <div class="bodyconnexion">
                <section class="createe">
                    <h1>Inscription</h1>
                    <form action="#" method="post">
                        <div class="create">
                            <div class="entre">
                            <h2>Pseudo:</h2>
                            <input type="text" style="text-align:center" name="pseudo">
                            <h2>Adresse mail (universitaire):</h2>
                            <input type="text" style="text-align:center" name="email">
                            <h2>Mot de passe:</h2>
                            <input type="password" style="text-align:center" name="motdepasse">
                            <h2>Confirmer mot de passe:</h2>
                            <input type="password" style="text-align:center" name="cmotdepasse" value="">
                            </div>
                            <input type="submit" name="connexion" value="S'inscrire" class="button">
                        </div>
                    </form>
                </section>
            </div>
        </section>
<?php   
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$motdepasse = $_POST['motdepasse'];
$cmotdepasse = $_POST['cmotdepasse'];
if($motdepasse != NULL){
    if($motdepasse == $cmotdepasse){
        foreach($db->query("SELECT * from univ WHERE mail = '$email'") as $row) {
        $mail = $row['3'];
        header("Location:index.php");
        }
        foreach($db->query("SELECT * from joueurs WHERE email = '$email'") as $player) {
            $player_mail = $player['3'];
            }
        if($email != $player_mail){

            if($email==$mail){
                $q = $db->prepare("INSERT INTO joueurs(pseudo,email,mot_de_passe) VALUES (:pseudo,:email,:motdepasse)");
                $q->execute([
                    'email' => $email,
                    'pseudo'=> $pseudo,
                    'motdepasse' => $motdepasse
                    ]);
            }
        }

    }
}

else{
    echo "<p class='inco'>Les deux mots de passe de correspondent pas.</p>";
    }


?>
    </body>
</html>