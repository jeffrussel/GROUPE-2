<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblio</title>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="biblio.css">
</head>

<body>
    <div class="header" id="header">
        <div class="head">
            <div class="logo"><img id="plume" src="images/pngegg(3).png" width="120px" alt=""></div>
        </div>
        <div class="text-accueil" data-aos="zoom-in-down">
            <p class="text">Site de gestion de la bibliotheque</p>
        </div>
        <div class="menu">
            <div class="text-menu">Accedez aux differentes rubriques de la page via les liens suivants : </div>
            <div class="nav-links">
                <a class="nav-link" href="#etudiant">Etudiants</a>
                <a class="nav-link" href="#book">Livres</a>
                <a class="nav-link" href="#emprunter">Emprunter</a>
            </div>
        </div>
    </div>
    <div id="etudiant" data-aos="zoom-in-up" class="container">
        <div class="left-container">
            <div class="redirect-links">
                <div class="link1">
                   
                    <a class="redirect-link" data-aos="flip-down" target="right-container" href="pages_de redirection/etudiant/add/etudiantbase.php">
                        Ajouter  <span class="studHide">un etudiant</span> </a>
                </div>
                <div class="link1">

                    <a class="redirect-link" data-aos="flip-down" target="right-container" href="pages_de redirection/etudiant/delete/etudiantdelbase.php">supprimer  <span class="studHide">un etudiant</span></a>
                </div>
                <div class="link1">
                 
                    <a class="redirect-link" data-aos="flip-down" target="right-container" href="pages_de redirection/etudiant/list/list.php">liste  <span class="studHide">des etudiants</span></a>
                </div>
            </div>
        </div>
        <div class="right-container">
            <div class="rightlink1">
              
                <a class="homelink" data-aos="flip-down" href="#header">Accueil</a>
            </div>
            <iframe name="right-container" id="right-container" frameborder="0" width="100%" height="100%"></iframe>

        </div>
    </div>
    <div class="book" data-aos="zoom-in-up" id="book">
        <div class="bookcontainer">
            <div class="logo1">Livres</div>
            <div class="navbar">
                <a class="booklinks" href="#header">Accueil</a>
                <a href="pages_de redirection/livres/list/list.php" target="down-container" class="booklinks">Liste</a>
                <a href="pages_de redirection/livres/add/addbookbase.php" target="down-container" class="booklinks">Ajouter</a>
                <a href="pages_de redirection/livres/delete/bookdelbase.php" target="down-container" class="booklinks">Supprimer</a>
                <a href="#" target="down-container" class="booklinks">Modifier</a>
            </div>
        </div>
        <div class="down-container">
            <iframe name="down-container" id="down-container" frameborder="0" width="100%" height="100%"></iframe>

        </div>
    </div>
    <div class="emprunter" data-aos="zoom-in-down" id="emprunter">
        <div class="emprunter-header">
            <div class="emprunterLogo">Emprunter</div>
            <div class="emprunter-links">
                <a href="#header" class="emprunter-link">Accueil</a>
                <a href="pages_de redirection/emprunter/emprunterbase.php" class="emprunter-link">Emprunter un livre</a>
                <a href="" class="emprunter-link">Emprunts en cours</a>
            </div>
        </div>
    </div>
    <div class="end">
        <div class="names">
            <div class="authorsAndUseless">
                Made by :
            </div>
            <ul class="nameslist">
                <li class="name">Ordi Marvin</li>
                <li class="name">William</li>
                <li class="name">Elie</li>
                <li class="name">Manuella</li>
                <li class="name">Jeff</li>
            </ul>
        </div>
        <div class="rights">
            <p class="right">© Tous droits reserves.</p>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
    <script src="biblio.js"></script>
</body>

</html>





