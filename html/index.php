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
            
            $link= mysql_connect("localhost", "root", "")
                or die("Impossible de se connecter : " . mysql_error());
            echo 'Connexion réussie';
            mysql_close($link);
            ?>
<img src="../images/logo.png" alt="logo"  /> <br> 
<button type="button">inscription 
    <a href="inscription.php">un lien interne</a>
    

</button><br>
<a href="connexion.php">
<button type="button"class="btn btn-primary" >connexion</button> </a>
<p>
    je vous remercie pour votre attention.
</p>



<img src="../images/photo.jpg" width="300 "head= "300" alt="image" />

  
    </body>
    </html>

    

    








