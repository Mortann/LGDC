<?php 
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
} 

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <title>Espace Membre </title>

    <link rel="stylesheet" href="../miseenpage.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  
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
      <div>
      <div id="imagePrincipale">
        <h1>Espace Administrateur</h1>
        <div id="premierTrait"></div>
        <h3>Bienvenu ^^ </h3>
        <p></p>
      </div>
       
    </header>
    <section id="presentation">
      <div id="texteIntro">
        <a href="../Espace membre/inscription.php">
        <button>Inscrire une nouvelle personne. </button>
        <br><br>
        <a href="deconnexion.php">
        <button>Se déconnecter</button> 
    </div>