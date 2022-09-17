<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "adminlgdc";
        $mdp_par_deaut = "lgdcadmin";
    
        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_deaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: espace_admin.php');
        }else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    }else{
        echo "Veuiller compléter tous les champs..";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace de connexion admin</title>
    <link rel="stylesheet" href="../Espace membre/miseenpage.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="logo"><a href="../index.html">LGDC RP</a></li>
          <li id="PD"><a href="../Hors RP/qui-nous-sommes.html">Qui sommes nous ?</a></li>
          <li id="PD"><a href="../Hors RP/Page Lien.html">Page lien</a></li>
          <li id="PD"><a href="../RP/RP.html">RP</a></li>
          <li id="connexion"><a href="../Espace membre/membre.php">Connexion/Espace Membre</a></li>
        </ul>
      </nav>

    
</head>
<body>
    <div id="imagePrincipale2">
    <br><br><br><br><br><br><br><br><br><br><br><br>
        <form method="POST" action="" align ="center">
            <br><br><br>
            <input type="text" name="pseudo" autocomplete="off">
            <br><br>
            <input type="password" name="mdp" autocomplete="off">
            <br><br>
            <input type="submit" name="valider">
            <li id="MDC"><a href="connexion.php">Vous n'avez pas de compte ?</a></li>
            <h1><br><br><br></h1>
<br><br><br>
        </form>
</body>
</html>