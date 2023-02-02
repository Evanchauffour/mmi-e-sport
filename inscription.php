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
        <form action="">
            <div class="container-input">
                <div class="container-input_label">
                    <label for="pseudo">Pseudonyme</label>
                    <input type="text" name="pseudo">
                </div>
                <div class="container-input_label">
                    <label for="email">Mail universitaire</label>
                    <input type="email" name="email">
                </div>
                <div class="container-input_label">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password">
                </div>
                <div class="container-input_label">
                    <label for="confirmePassword">Confirmer mot de passe</label>
                    <input type="password" name="confirmePassword">
                </div>
            </div>
            <button>S'inscrire</button>
        </form>
        <p>Pas de compte ? <span><a href="connexion.php">Inscris-toi !</a></span></p>
        <img class="bg-connexion" src="../mmi-e-sport/assets/img/bg-connexion.svg" alt=""> 
    </div>
    <a href="index.php" class="back-to-home">Retour site web...</a>
</div>

<?php
    require('footer.php');
?>
</body>
</html>