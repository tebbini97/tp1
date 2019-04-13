<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    
    <title>Page Title</title> 

    <link rel="stylesheet" href="../2.css/style.css">
    <link rel="stylesheet" href="../2.css/bootstrap.min - Raccourci.lnk">
    </head>
    <body>
            <?php
            
            $link = mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
        <p>
            tebbini oumayma <br>
            tebbini oumayma @gmail.com


            
        </p> <br/>

        <img src="51079037_2181081665540810_5020649067730960384_n.jpg" height="150px"  width="150px"  alt="photo de profil"/> <br>
        <
      <hr/>
      <h1>Formation</h1>  
      <h4>diplome baccalauréat en economie gestion en 2017 <br>
     étudiante en 2 éme année comtabilité a l'institut des hautes études commerciale (IHEC)</h4> <br>
     <h1>
        centre d'intérét
     </h1>
     <ul>
    <li>la music</li>
    <li>la lecture</li>
    <li>le sport</li>
</ul>









    </body>
</html>