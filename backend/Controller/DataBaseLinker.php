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
	
}

