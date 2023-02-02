<body>
<?php
    require('header.php')
?>
<div class="container-inscription">
    <h1>Inscription</h1>
    <form action="">
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
            <label for="confirme">Confirmer Mot de passe</label>
            <input type="password" name="confirme">
        </div>
        <button>Se connecter</button>
    </form>
    <p>Déjà un compte ? <span><a href="connexion.php">Connecte-toi !</a></span></p>
</div>
<?php
    require('footer.php')
?>
</body>
</html>