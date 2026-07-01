<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion Administrateur</title>
</head>

<body>
    <header>
        <h1>Bienvenue sur la page de connexion de l'administration</h1>
    </header>
    <main>
        <h2>Veuillez vous connecter</h2>
        <form action="" method="post">
            <!-- Entree adresse email -->
            <div> <label for="email" class="form-label fw-semibold">Adresse email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ex : johndoe@gmail.com" required>
            </div>
            <!-- Entree mot de passe -->
            <div>
                <label for="password" class="form-label fw-semibold">Mot de passe :</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <!-- bouton envoi -->
            <input type="submit" value="Se connecter">
        </form>
    </main>
</body>

</html>