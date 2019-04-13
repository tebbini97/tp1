<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Page Title</title>
    <link rel="stylesheet" href="../2.css/style.css">
    <link rel="stylesheet" href="../html/bootstrap.min.css">
    </head>

    <body>
    <?php
            
            $link = mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
        
<img src="../images/logo.png" alt="logo"  /> <br>
<button type="button"  class="btn btn-danger">déconnecté  <a href="connexion.php">un lien interne  </a></button> <br>
<a href="profil.php">
<button type="button" class="btn btn-info">profil  </button> </a>
 <br>
<p>
    <h2>TODO</h2>
</p> <br>
<button type="button"class="btn btn-secondary">ajouter TODO</button> <br>
<table>
    <tr><th>description</th><th>date d'ajout</th><th>action</th></tr>
    <tr><td>manger</td><td>05/09/2018</td><td><input type="button" value="done" onclick="JSfunction()"
     <button></button></td></tr>
     <tr><td>préparer le projet</td><td>28/08/2018</td><td><input type="button" value="done" onclick="JSfunction()"
         <button></button></td></tr>

 </table>



   




    </body>
    </html>