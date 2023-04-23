<?php
namespace Models;

class User extends Model {

    //fonction permettant de récupérer tous les utilisateurs en base de données
    public function lister_InfoUt($pseudo): array{

        //la méthode pour executer des commandes sql a été tirée du TP mvc
        $query = $this->pdo->prepare("SELECT * FROM `users` WHERE `pseudo` = '$pseudo'");
        $query->setFetchMode(\PDO::FETCH_ASSOC);

        $query->execute();
        $utilisateur = $query->fetchall();

        return $utilisateur
    }

    public function insertion_utilisateur($pseudo, $mdp, $prenom, $nom, $sexe): void {

        $data = [

            'pseudo'=>$pseudo,
            'mdp'=>$mdp,
            'prenom'=>$prenom,
            'nom'=>$nom,
            'sexe'=>$sexe

        ];

        $query = "INSERT INTO utilisateurs (pseudo, mdp, prenom, nom, sexe) VALUES ( :pseudo, :mdp, prenom, nom, sexe )";
       
        $requete_insertion = $this->pdo->prepare($query);
        $requete_insertion->execute();
    }


    public function trouver_utilisateur_id($id): array {

        $query_id = $this->pdo->prepare("SELECT * FROM `utilisateurs` WHERE `id` = '$id'");
        $query_id->setFetchMode(\PDO::FETCH_ASSOC);

        $query_id->execute();
        
        $resultat = $query_id->fetchall();

        return $resultat;

    }


    public function lister_utilisateurs(): array {

        $query_ut = $this->pdo->prepare("SELECT * FROM `utilisateurs`");
        $query_ut->setFetchMode(\PDO::FETCH_ASSOC);

        $query_ut->execute();
        $utilisateurs = $query_ut->fetchall();

        return $utilisateurs;
    }


    public function maj_pseudo($nv_pseudo, $id): void{

        $maj_p = $this->pdo->prepare("UPDATE `utilisateurs` SET `pseudo` = 'nv_pseudo' WHERE `id` = '$id'");

        $maj_p->execute();
        

    }

    public function maj_mdp($nv_mdp, $id): void {

        $maj_m = $this->pdo->prepare("UPDATE `utilisateurs` SET `mdp` = '$nv_mdp' WHERE `id` = '$id'");
        
        $maj_m->execute();
    }
}
?>