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
    <body>
            <?php
            require('header.php');
            ?>
        <section class="formulaire">
            <div class="bodyconnexion">
                <section class="connex">
                    <h1>Connexion</h1>
                    <form action="#" method="post">
                        <div class="create">
                            <h2>Pseudo</h2>
                            <input type="text" style="text-align:center" name="nom">
                            <h2>Mot de passe:</h2>
                            <input type="password" style="text-align:center" name="motdepasse">
                            <input type="submit" name="Connexion" value="connexion" class="boutton">
                            <button><a href="inscription.php">S'inscrire</a></button>
                        </div>
                    </form>
                    <?php
$id = $_POST['nom'];
$mdp = $_POST['motdepasse'];
foreach($db->query("SELECT * from joueurs WHERE pseudo = '$id' AND mot_de_passe = '$mdp'") as $row) {
    $user = $row['pseudo'];
    $idcompte = $row['idplayer'];
    $_SESSION['utilisateur']=array('nom' => $user, 'id' => $idcompte);

}

if($id==$user)
{
    echo "ok"; 
    header('Location:index.php');
    
}
elseif($id!=''){
    echo "<p class='inco'>L'identifiant et/ou le mode de passe est inncorect</p>";
}

?>
                </section>
            </div>
        </section>
    </body>
        <script src="js/javascript_ins.js"></script>
<?php
require('footer.php');
?>
</html>