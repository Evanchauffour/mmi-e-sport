<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mmi-e-sport/assets/css/app.css">
    <title>MMI E-SPORT</title>
</head>
<body>
<div class="container-connexion">
    <h1>Connexion</h1>
    <form action="">
        <div class="container-input_label">
            <label for="email">Mail universitaire</label>
            <input type="email" name="email">
        </div>
        <div class="container-input_label">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>
        <button>Se connecter</button>
    </form>
    <p>Pas de compte ? <span><a href="inscription.php">Inscris-toi !</a></span></p>
</div>
<img class="bg-connexion" src="../mmi-e-sport/assets/img/bg-connexion.svg" alt="">

<?php
    require('footer.php');
?>
</body>
</html>