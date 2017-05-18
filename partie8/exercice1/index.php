<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 1 Partie 8</title>
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
        <h1>Exercice 1  Partie 8</h1>
        <h2> Faire une page HTML permettant de donner à l'utilisateur :<br>
            - son User Agent <br>
            - son adresse ip<br>
            - le nom du serveur
        </h2>
        <p>
            <?php
            /* @var $_SERVER['HTTP_USER_AGENT'] pour avoir le user agent */
            echo 'User agent: ' . $_SERVER['HTTP_USER_AGENT'];
            ?>
            </br>
            <?php
            /* @var $_SERVER['REMOTE_ADDR'] pour connaitre l'IP du visiteur */
            echo 'Adresse IP: ' . $_SERVER['REMOTE_ADDR'];
            ?>
            </br>
            <?php
            /* @var $_SERVER['SERVER_NAME'] donne le nom du serveur */
            echo 'Nom du serveur: ' . $_SERVER['SERVER_NAME'];
            ?>
        </p>
    </body>
</html>
