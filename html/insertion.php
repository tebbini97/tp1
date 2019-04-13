<?php

            $nom = $_POST["nom"];

            $prenom = $_POST["prenom"];

            $email = $_POST["email"];
           
            $password = $_POST["password"];
            $gender = $_POST["gender"];
            $interet = $_POST["interet"];
            $telephone = $_POST["telephone"];
            $date = $_POST["date"];
            if($_POST["password"] == $_POST["confirmation"]) {
                $link = mysql_connect("localhost", "root", "")
                    or die("Impossible de se connecter : " . mysql_error());
                //echo 'Connexion réussie';
                mysql_select_db ("tp1");
                
                $qry="insert into user (email, nom, prenom, mdp, interer, gender,) values ('$email', '$nom', '$prenom', '$password', '$interet', '$gender', '$telephone', '$date',)";
                echo $qry;
                mysql_query($qry);


                mysql_close($link);
            }
?>