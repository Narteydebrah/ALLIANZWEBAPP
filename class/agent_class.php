<?php
//connect to database class
require_once(__DIR__ .'\..\model\connection.php');

class Client extends db_connection {
    public function create($firstName, $email, $id, $password){
        // sql query
        $sql = "INSERT INTO `person`(`fname`, `email`, `PersonID`, `pswd`) VALUES ('$firstName','$email','$id','$password')";

        // run query
        return $this->db_query($sql);
    }

    public function reg($fName, $email, $Pid, $nkin,$cnumber,$ptype){
        // sql query
        $sql = "INSERT INTO `registers`(`fName`, `email`, `PerID`, `nxtkin`,`connumber`,`poltype`) VALUES ($fName, $email, $Pid, $nkin,$cnumber,$ptype)";

        // run query
        return $this->db_query($sql);
    }

    public function getClients(){
        //sql query
        $sql = "SELECT * FROM `person` ";

        //run query
        return $this->db_query($sql);
    }

    public function loginPerson($email, $password){
        // sql query
        $sql = "SELECT PersonID FROM `Person` WHERE `email`= '$email' AND `pswd`= '$password' ";

        return $this->db_query($sql);
    }

    
    public function loginAgent($email, $password){
        // sql query
        $sql = "SELECT AgentID FROM `Agent` WHERE `email`= '$email' AND `pswd`= '$password' ";

        // run query
        return $this->db_query($sql);
    }

    public function updateClient($firstName, $email, $Pers, $nxtofkin, $connumb, $polt, $nclaims){
         $sql = "UPDATE `registers` SET `fName`='$firstName', `email`='$email', `PersonID`=$Pers, `nkin`='$nxtofkin', `cnumber`='$connumb', `ptype`='$polt', `nclaims`='$nclaims'  WHERE `PersonID`='$Pers'";

        // run query
        return $this->db_query($sql);
    }

    public function deleteClient($id){
        // sql query
        $sql = "DELETE FROM `registers` WHERE `PersonID`='$id'";

        // run query
        return $this->db_query($sql);
    }
}

?>