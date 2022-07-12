<?php session_start();  

    require_once ('actions/db.conf.php');

    if(isset($_POST['validate'])){
        
        // on fais attention si les données existes
        if(!empty($_POST['Numcd']) AND !empty($_POST['pwd']))
        {

            $users_Numcd=htmlspecialchars($_POST['Numcd']);     
            $users_pwd=htmlspecialchars($_POST['pwd']);

            //verification si l'utilateur existe

            $checkuserexiste = $bdd->prepare('SELECT * FROM users WHERE Numcd= ?');
            $checkuserexiste -> execute(array($users_Numcd));
            

            if($checkuserexiste->rowCount() > 0)
            {   
                // on recuppère le mot de passe saisie pour la comparer au nouveau
                $userinfo = $checkuserexiste->fetch();
                

                // on compare les deux mots de passe
                if(password_verify($users_pwd,$userinfo['pwd'])){

                    //on authentifie l'utilisateur

                     $_SESSION['auth'] = true;
                     $_SESSION['Numcd'] = $userinfo['Numcd'];
                     $_SESSION['nom'] = $userinfo['nom'];
                     $_SESSION['prenom'] = $userinfo['prenom'];
                     $_SESSION['niveau'] = $userinfo['niveau'];
                     $_SESSION['filiere'] = $userinfo['filiere'];
                     $_SESSION['email'] = $userinfo['email'];

                     // on le redirige vers la page d'acceuil

                    
                     header('Location:indexConnceter.php');



                }else{
                    $errorMsg = "votre mot de passe est incorrecte";
                }

            }else{
                $errorMsg = "Votre matricule est incorecte";
            }
           
           

        }else{
            $errorMsg = "veuillez remplir tout les champs...";
        }
    }