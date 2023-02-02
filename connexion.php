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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mmi-e-sport/assets/css/app.css">
    <title>MMI E-SPORT</title>
</head>
<body>
<div class="container-connexion">
    <div class="info-connexion">
        <h1>Connexion</h1>
        <form action="#" method="post">
            <div class="container-input_label">
                <label for="email">Mail universitaire</label>
                <input type="email" name="email">
            </div>
            <div class="container-input_label">
                <label for="password">Mot de passe</label>
                <input type="password" name="motdepasse">
            </div>
            <button>Se connecter</button>
        </form>
        <p>Pas de compte ? <span><a href="inscription.php">Inscris-toi !</a></span></p>
        <img class="bg-connexion" src="../mmi-e-sport/assets/img/bg-connexion.svg" alt=""> 
    </div>
    <a href="index.php" class="back-to-home">Retour site web...</a>
</div>
<?php
$id = $_POST['email'];
$mdp = $_POST['motdepasse'];
foreach($db->query("SELECT * from joueurs WHERE email = '$id' AND mot_de_passe = '$mdp'") as $row) {
    $user = $row['email'];
    $idcompte = $row['pseudo'];
    $_SESSION['utilisateur']=array('email' => $user, 'id' => $idcompte);

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
<?php
    require('footer.php');
?>
</body>
</html>