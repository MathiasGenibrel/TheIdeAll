<?php

	class DataBaseLinker
	{           
    private static $monPdo;
    private static $monPdoDataBaseLinker = null;

    private function __construct()
    {
        DataBaseLinker::$monPdo = new PDO('mysql:host=localhost;dbname=projet_lc', 'root', 'root');
		DataBaseLinker::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function __destruct(){
        DataBaseLinker::$monPdo = null;
    }

	public  static function getDataBaseLinker()
    {
        if(DataBaseLinker::$monPdoDataBaseLinker == null)
        {
            DataBaseLinker::$monPdoDataBaseLinker= new DataBaseLinker();
        }
        return DataBaseLinker::$monPdoDataBaseLinker;  
    }

	public function testLogin()
    {
		echo'test';
       /* $ok = false;
        $req = "select * from utilisateurs";
        $res = DataBaseLinker::$monPdo->query($req);
        $nbLignes = $res->rowCount();
        if($nbLignes == 1)
        {
            $ok = true;
        }
        else
        {
           $ok= false;
        }
        return $ok;*/
    }
	public function afficherUtilisateurs()
    {
      
          // afficher utilisateur 
          $sql=DataBaseLinker::$monPdo->query('SELECT utilisateurs.nom_utilisateurs, utilisateurs.prenom_utilisateurs FROM utilisateurs');
          $tab =$sql->fetchAll();
          return $tab;
        
    }
    public function afficherEvenements()
    {
         // afficher evenement
        $sql=DataBaseLinker::$monPdo->query('SELECT * FROM evenements;');
        $tab =$sql->fetchAll();
        return $tab;
    }

    public function afficherFactures()
    {
      // afficher facture 
      $sql=DataBaseLinker::$monPdo->query('SELECT * FROM facturations;');
      $tab =$sql->fetchAll();
      return $tab;
    }

    public function afficherLangues()
    {
      // afficher facture 
      $sql=DataBaseLinker::$monPdo->query('SELECT * FROM langues;');
      $tab =$sql->fetchAll();
      return $tab;
    }

    public function deleteUtilisateur()
    {
      // delete utilisateur 
      $sql=DataBaseLinker::$monPdo->query("DELETE FROM utilisateurs WHERE utilisateurs.id_utilisateurs = 1");
      $tab =$sql->fetchAll();
      return $tab;
    } 
   
    public function cookieIdentification()
    {
        $motDePasse=$_POST["motDePasse"];
        $email=$_POST["email"];
        
        $sql=DataBaseLinker::$monPdo->prepare("SELECT COUNT(id_utilisateurs) AS nombre FROM utilisateurs WHERE utilisateurs.email =  :email AND utilisateurs.motDePasse =:motDePasse");
        $sql->bindParam(':email', $email);
        $sql->bindParam(':motDePasse', $motDePasse);
        $sql->execute();
        $tab = $sql->fetch();
        var_dump($tab);
       
     
        if ($tab['nombre'] == 1)
        {
            setcookie('connexion-succes', '1'); 
            if (isset($_COOKIE["connexion-succes"]));
        }
        else{
            setcookie('connexion-succes', '0'); 
            if (isset($_COOKIE["connexion-succes"]));
        }
        return $tab;
      
    }
}

