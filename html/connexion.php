<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Page Title</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
<style>

{
 
 background-color:rgb(179, 125, 125);

}
</style> 
        <?php
            
        $link = mysql_connect("localhost", "root", "")
            or die("Impossible de se connecter : " . mysql_error());
        echo 'Connexion réussie';
        mysql_close($link);
        ?>
        
   
   <img src="../images/logo.png" alt="logo"/> <br>
<a href="inscription.php">
   <button type="button" class="btn btn-secondary">inscription</button></a> <br>
   <button type="button"class="btn btn-warning" >Home <a href="index.html">un lien relatif</a></button> <br>
   <form name="connexion" method="post" action="insertion.php">

   Email:         <input type="email" name="email"/>
   mode de passe: <input type="password" name="mode-de-passe"/> <br>


<button type="button" class="btn btn-dark">envoyer <a href="Home.php">un lien interne</a> </button> <br>

<button type="button" class="btn btn-link">effacer</button>
</form>


</body>
</html>