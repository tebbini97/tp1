<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Page Title</title>
    <link rel="stylesheet" href="../css/style.css>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
</head>
<body>
<?php
            
            $link = mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
            
        <img src="../images/logo.png" alt="logo"  /> <br> 
        <button type="button"class="btn btn-primary">connexion <a href="connexion.php">un lien interne</a>   </button> <br>
        
<button type="button" class="btn btn-warning">Home 
    <a href="index.php">un lien iterne</a>
    



</button> 
<br>
<form name="inscription" method="post" action="insertion.php">
   Prénom: <input type="texte" name="prénom"/> <br>
   Nom: <input type="text" name="nom"/> <br>
   télephone: <input type="number"/> <br> 
   genre:
  femme <input type="radio" name="femme"/>
  homme <input type="radio" name="homme"/>
  <br>
  email: <input type="text" name="email"/> <br>

  date de naissance: <input type="date" name="date"/> <br>
  Nationalité: <select name="pays">
      <option value="tn"> <selected="slected">tunisie</option>
      <option value="jp">japon</option>
      <option value="ca">canada </option>
  </select> <br> 
  <p>Intéret</p>
  
       art:    <input type="checkbox" name="interet"/> <br>
       music:  <input type="checkbox" name="interet"/> <br>
       sport  <input type="checkbox" name="interet"/> <br> 
       mode passe:              <input type="password" name="pdp"/> 
       confirmer le mode passe <input type="password" name="confirmation" />
       <input type="submit" class="btn btn-success" value="envoyer" onclick="JSfunction()"
      <button></button>
      <input type="button" class="btn btn-danger" value="effacer" onclick="JSfunction()"
      <button></button> 
</form>


       
    












  


     
    

    

  </body>  
  </html>

