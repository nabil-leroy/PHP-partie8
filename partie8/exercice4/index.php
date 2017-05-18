<?php
session_start()
?>
<?php
if (isset($_POST['pseudo'])) { // Si le formulaire a été envoyé...
    setcookie('pseudo', $_POST['pseudo'], time() + 365 * 24 * 3600, null, null, false, true); // On créé le cookie du pseudo 
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true); // On créé le cookie du mot de passe
    header("../exercice4/index.php"); // Et on actualise la page pour que ce script marche 
}
?>

<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 4 Partie 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie8/exercice1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie8/exercice2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie8/exercice3/'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie8/exercice4/'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie8/exercice5/'" />
        </header>
        <h1>Exercice 4  Partie 8</h1>
        <h2> Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
        </h2>
        <p>
        <form action="../exercice4/index.php" method="post"> 
            <p>Votre pseudo : <input type="text" name="pseudo" id="pseudo" maxlength="20" value="<?php if (isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo']; ?>" size="20" /> <!-- Si le cookie existe, on écrit le pseudo dans le champ -->    
            <p>Votre mot de passe : <input type="text" name="password" id="password" maxlength="20" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" size="20" /></p>
            <p><input type="submit" value="OK"></p>
        </form>
            Ton pseudo est <?php echo $_COOKIE['pseudo']; ?> et ton mot de passe est  <?php echo $_COOKIE['password']; ?> c'est bien ça ?
        </p>
    </body>
</html>