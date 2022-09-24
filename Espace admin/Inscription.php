<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Espace d'inscription</title>
    <link rel="stylesheet" href="../Espace membre/miseenpage2.css">   
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

        <h2>IDENTITÉ</h2>
        <br><h3>Clan :</h3>
        <input type="checkbox" class="demo2" id="demo2">
        <label for="demo2">Démo 2</label>   

        <br><h3>Nom Chaton :</h3>
        <input type="text" name="NomC" autocomplete="off">
        <br><h3>Nom Apprenti :</h3>
        <input type="text" name="NomA" autocomplete="off">
        <br><h3>Nom Guerrier :</h3>
        <input type="text" name="NomG" autocomplete="off">
        <br><h3>Grade :</h3>
        <input type="text" name="grade" autocomplete="off">
        <br><h3>Genre :</h3>
        <input type="text" name="genre" autocomplete="off">
        <br><h3>Âge :</h3>
        <input type="text" name="age" autocomplete="off">
<br><br>
        <h2>PHYSIQUE</h2>
        <br><h3>Pelage :</h3>
        <input type="text" name="pelage" autocomplete="off">
        <br><h3>Yeux :</h3>
        <input type="text" name="Yeux" autocomplete="off">
        <br><h3>Taille :</h3>
        <input type="text" name="taille" autocomplete="off">
        <br><h3>Poids :</h3>
        <input type="text" name="poid" autocomplete="off">
        <br><h3>Autre :</h3>
        <input type="text" name="autre" autocomplete="off">

        <br><br>
        <h2>MENTAL</h2>
        <br><h3>Caractère :</h3>
        <textarea name="caractère" rows="10" cols="50"></textarea>
        <br><h3>Goûts :</h3>
        <textarea name="gout" rows="10" cols="50"></textarea>
        
        <br><br>
        <h2>FAMILLE</h2>

        <br><h3>Mère :</h3>
        <input type="text" name="mere" autocomplete="off">
        <br><h3>Père :</h3>
        <input type="text" name="pere" autocomplete="off">
        <br><h3>Fraterie :</h3>
        <input type="text" name="fraterie" autocomplete="off">
        <br><h3>Compagnon :</h3>
        <input type="text" name="compagnon" autocomplete="off">
        <br><h3>Enfants :</h3>
        <input type="text" name="enfant" autocomplete="off">
        <br><h3>Mentor :</h3>
        <input type="text" name="mentor" autocomplete="off">
        <br><h3>Apprenti :</h3>
        <input type="text" name="apprenti" autocomplete="off">
        <br><h3>Autre :</h3>
        <input type="text" name="autre" autocomplete="off">

        <br><br>
        <h2>HISTOIRE</h2>
        <textarea name="histoire" rows="10" cols="50"></textarea>
        <br><h3>Image (lien) :</h3>
        <input type="text" name="image" autocomplete="off">        
        
        
        

        <br><br>

        <input type="submit" name="envoi">
    </form>
    <h1><br><br><br></h1>
<br><br><br>
</body>
</html>