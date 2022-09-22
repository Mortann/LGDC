<?php
session_start();
$bdd = new PDO( 'mysql:host=localhost;dbname=u623834937_espace_membres;charset=UTF8', 'u623834937_discord', 'lgdcRP<1' );
    if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));

        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: membre.php');
        }else{
            echo"Votre mot de passe ou pseudo est incorrect";
        }

    }else{
        echo "Veuillez compléter tous les champs ...";
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="miseenpage.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>


    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="logo"><a href="../index.html">LGDC RP</a></li>
          <li id="PD"><a href="../Hors RP/qui-nous-sommes.html">Qui sommes nous ?</a></li>
          <li id="PD"><a href="../Hors RP/Page Lien.html">Page Lien</a></li>
          <li id="PD"><a href="../RP/RP.html">RP</a></li>
          <li id="connexion"><a href="../Espace membre/membre.php">Connexion/Espace Membre</a></li>
        </ul>
      </nav>

    
</head>
<body>
<section id="imagePrincipale2">
<div id="imagefond">
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <form method="POST" action="" align ="center">
        <br><br><br>
        <input type="text" name="pseudo" autocomplete="off">
        <br><br>
        <input type="password" name="mdp" autocomplete="off">

        <br><br>

        <input type="submit" name="envoi">
<h1><br><br><br></h1>
<br><br><br>
<br><br>  
  
        <footer>
          <h2 id="contact">Nos réseaux !!!</h2>
  
          <div id="deuxiemeTrait"></div>
          <div id="copyrightEtIcons">
            <div id="copyright">
              <span>© LGDC RP; 2022</span>
            </div>
            <div id="icons">
              <a href="http://www.youtube.fr"><i class="fa fa-youtube"></i></a>
              <a href="https://discord.gg/vt5abvRWJK"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                  <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                </svg></a>
    
            </div>
          </div>
    
        </footer>
    </form>
    </section>
</body>
</html>