<?php
//connect to database class
require_once ('../model/connection.php');

class Client extends db_connection {

    public function updateClient($firstName, $email, $Pers, $nxtofkin, $connumb, $polt, $nclaims){
         $sql = "UPDATE `registers` SET `fName`='$firstName', `email`='$email', `PersonID`=$Pers, `nkin`='$nxtofkin', `cnumber`='$connumb', `ptype`='$polt', `nclaims`='$nclaims'  WHERE `PersonID`='$Pers'";

        // run query
        return $this->db_query($sql);
    }

    public function password($email){
        return $this->getClientfrommail($email)['pswd'];
    }

    public function isClientValid($email,$password){
        $databasePassword = $this->getClientfrommail($email)['pswd'];

        return ($databasePassword == $password);
    }
     public function getClientfrommail($email){
        // sql query
        $sql = "SELECT * FROM `persons` WHERE `email`='$email'";

        // run query
        return $this->db_query($sql)['id'];
    }
    public function register($fName, $email, $Pid, $nkin,$cnumber,$ptype){
        // sql query
        //$sql = "SELECT * FROM `persons` WHERE `email`='$email'";
        $Client = new Client;
        // run query
        $runQuery = $Client -> reg($fName, $email, $Pid, $nkin,$cnumber,$ptype);
        if($runQuery){
            return $runQuery;
        }else{
            return false;
        }
        
        //return $this->db_query($sql)[`fName`, `email`, `PerID`, `nxtkin`,`connumber`,`poltype`];
    }
}

?>