<?php  session_start();  
    require_once('actions/db.conf.php');
    // une fois l'utilisateur click sur validate
    if(isset($_POST['validate'])){
        // on fais attention si les données existes
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['niveau']) AND !empty($_POST['filiere']) AND !empty($_POST['Numcd']) AND !empty($_POST['pwd']))
        {

            $users_Numcd=htmlspecialchars($_POST['Numcd']);
            $users_nom=htmlspecialchars($_POST['nom']);
            $users_prenom=htmlspecialchars($_POST['prenom']);
            $users_niveau=htmlspecialchars($_POST['niveau']);
            $users_filiere=htmlspecialchars($_POST['filiere']);
            $users_pwd=password_hash($_POST['pwd'],PASSWORD_DEFAULT);
            $users_email=htmlspecialchars($_POST['email']);

            //verification si l'utilateur est inscrit
            $check = $bdd->prepare('SELECT * FROM users WHERE Numcd = ?'); // on selectionne toute les table qui possede le meme Numcd
            $check -> execute(array($users_Numcd));


            // verifier si l'utilisateur existe deja
            if($check->rowCount() == 0 ){
               if(strlen($users_Numcd) == 12){
                     // si non on inser les données   
                $insertuser = $bdd->prepare('INSERT INTO users(Numcd,nom,prenom,niveau,filiere,pwd,email) VALUES(?,?,?,?,?,?,?)');
                $insertuser ->execute(array($users_Numcd,$users_nom,$users_prenom,$users_niveau,$users_filiere,$users_pwd,$users_email));


                // crée une session pour l'itulisateur qui se connecte
                $getinfouser = $bdd->prepare('SELECT * FROM users WHERE Numcd= ?');
            
                 // garder ses infos dans un tableau

                $getinfouser -> execute(array($users_Numcd));
                //on recuupere les donnés pour les afficher
                $userinfo =$getinfouser->fetch();
                 $_SESSION['auth'] = true;
                 $_SESSION['Numcd'] = $userinfo['Numcd'];
                 $_SESSION['nom'] = $userinfo['nom'];
                 $_SESSION['prenom'] = $userinfo['prenom'];
                 $_SESSION['niveau'] = $userinfo['niveau'];
                 $_SESSION['filiere'] = $userinfo['filiere'];
                 $_SESSION['email'] = $userinfo['email'];

                

                // on redirige l'utilisateur sur la page d'acceuil
                header('Location: indexConnceter.php');


               }else {
                   $errorMsg = "Le numero de la carte d'etudiant est incorrecte";
               }
                // si oui on affiche une erreur
            }else{
                $errorMsg = "desolé vous avez deja un compte.";
            }


        }else{
            $errorMsg = "veuillez remplir tout les champs...";
        }
    }

