<?php
namespace Controllers;

class User extends Controllers{

    protected $nom_modele = /Models/User::class;

    public function index(){

    $titre = "Accueil";
    $users = $this->modele->lister_utilisateurs();

    /Renderer::render('users/index', compact('pageTitle', 'users'));

    }

    public function insertion(){

        //variables que l'utilisateur va entrer et envoyer à la base de donnée pour vérification
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        $prenom = $_POST["prenom"];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];

        $erreurs = array();

        //empty() -> checke si $_POST est vide

        //Pour gérer les erreurs d'entrée utilisateur, on va creer un tableau qui va se remplir 
        //lorsqu'il y a une erreur de saisie. Ainsi, l'inscription sera reussie lorsque le tableau sera vide
        // au moment d'envoyer les données.

        if(empty($_POST['pseudo'])) {

            $erreurs['pseudo'] = "Pseudo non-disponible";
            echo $erreurs["pseudo"];

        }
        else {
            
            //$res_recherche est un compteur qui s'incrémente lorsque le pseudo saisi correspond
            //avec un pseudo déjà existant dans la base de donnée

            $res_recherche = $this->model->lister_InfoUt($pseudo);
            $a = count($res_recherche);
            if(a != 0){

                $erreurs['pseudo'] = "Pseudo non disponible, veuillez en choisir un autre";
                echo $erreurs["pseudo"];

            }

            // cas de mdp incorrect
            //$_POST['mdp'] est la variable contenant le mot de passe que l'utilisateur a entré

            if($_POST['mdp'] != $_POST['mdp_vrai']){

                $erreurs['mdp_vrai'] = "Mot de passe incorrect, veuillez reessayer";
                echo $erreurs['mdp_vrai'];

            }

            //cas où toutes les informations sont correctes

            if (empty($erreurs)){

                $ajout_utilisateur = $this->model->insertion_utilisateur($pseudo, $mdp, $prenom, $nom, $sexe);

                //demarrage de la session
                session_start();
                
                //redirection vers la page de connexion
                /Redirection::redirection("page_connexion.php");
            }
            



        }

        //création du tableau d'inscription
        $titre = "inscription";
        /Rendu::rendu('users/inscription', compact('titre'));
    }

    //fonction d'authentification, dans le cas ou l'utilisateur a déjà crée son compte

    public function auth(){

        if (!empty($_POST) && !empty($_POST['pseudo']) && !empty['mdp']) {

            // '@' avant l'initialisation de la variable permet de supprimer les messages d'erreurs liées
            @$pseudo = $_POST['pseudo'];
            @$mdp = $_POST['mdp'];
            $erreurs = array();

            $utilisateur = $this->model->lister_InfoUt($pseudo);

            //vérification des saisies par rapport aux infos liées à cet utilisateur dans la bdd
            if($mdp == $utilisateur['0']['mdp']) {

                session_start();
                $_SESSION['utilisateur'] = $utilisateur['0']['pseudo'];
                $_SESSION['mdp_utilisateur'] = $utilisateur['0']['mdp'];
                $_SESSION['id_utilisateur'] = $utilisateur['0']['id'];
                
                //redirection vers la page d'accueil 'index.php'
                /Redirection::redirection("index.php");
            }
            else {

                $erreurs['err_connexion'] = "Identifiants ou mot de passe incorrect, veuillez reessayer."
                echo $erreurs['err_connexion'];
            }

            $titre = "page_connexion"
            /Rendu::rendu('users/page_connexion', compact('titre'));



        }


    }

    //fonction permettant de mettre à jour son identifiant ou mot de passe
    public function maj(){

        //pseudo

        @$pseudo_session = $_SESSION['utilisateur'];
        @$mdp_session = $_SESSION['mdp_utilisateur'];

        @$id = $_SESSION['id_utilisateur'];

        @$nouveau_pseudo = $_POST['pseudo'];

        @$mdp = $_POST['mdp'];

        //récupération du pseudo et mot de passe
        if(isset($_SESSION['utilisateur'])){

            $r_ps = $this->model->trouver_utilisateur_id($id);


        }

            $requete = $this->model->lister_InfoUt($nouveau_pseudo);

            $var_ps = $_POST['pseudo'];
            if(!empty($var_ps)) {

                //mise à jour du pseudo
                $a = count($requete);
                if($a == 0) {

                    $nv_pseudo = $_POST['pseudo'];
                    $mise_a_jour = $this->Model->maj_pseudo($nv_pseudo, $id);

                    if(isset($mise_a_jour)) {

                        $r_mdp = $this->Model->trouver_utilisateur_id($id);
                    }

                }
            
            }

            $var_mdp = $_POST['mdp'];    
            if(!empty($var_mdp)){

                $mise_a_jour_mdp = $this->Model->maj_mdp($mdp, $id);

            }

        $titre = "profil"
        /Rendu::rendu('users/profil', compact('titre', 'r_ps'));
        
    }
?>