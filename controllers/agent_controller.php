<?php
//connect to client class
include_once(__DIR__.'\..\class\agent_class.php');

// Inserting a new client
function createClient($firstName, $email, $id, $password){
    // Create new post object
    $post = new Client;

    // Run query
    $runQuery = $post->create($firstName, $email, $id, $password);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function updateClient($firstName, $email, $Pers, $nxtofkin, $connumb, $polt, $nclaims){
    // Create new post object
    $client = new Client;

    // Run query
    $runQuery = $client->updateClient($firstName, $email, $Pers, $nxtofkin, $connumb, $polt, $nclaims);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}



function getClients(){
    // Create new post object
    $post = new Client;

    // Run query
    $runQuery = $post->getClients();

    if($runQuery){
        $posts = array();
        while($record = $post->db_fetch()){
            $posts[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}

function clientValid($email, $password){
    // Create new client object
    $client1 = new Client;
    $client2 = new Client;

    // Run query
    $runQuery1 = $client1->loginPerson($email, $password);
    $runQuery2 = $client2->loginAgent($email, $password);


    if($runQuery1){
        $queries1 = $client1->db_fetch();
        if(!empty($queries1)){
            return "person";
        }
    } 
    if($runQuery2){
        $queries2 = $client2->db_fetch();
        if(!empty($queries2)){
            return "agent";
        }
    } 
    return "false";
}

function agentValid($email, $password){
    // Create new post object
    $post = new Client;

    // Run query
    $runQuery = $post->loginAgent($email, $password);

    if($runQuery){

        $posts = $post->db_fetch();
        if(!empty($posts)){
            return $posts;
        }else{
            return [];
        }
        
    }else{
        return false;
    }
}

// function updateClient($id, $title, $body){
//     // Create new post object
//     $post = new Post;

//     // Run query
//     $runQuery = $post->update($id, $title, $body);

//     if($runQuery){
//         return $runQuery;
//     }else{
//         return false;
//     }
// }

function deleteClient($id){
    // Create new post object
    $post = new Client;

    // Run query
    $runQuery = $post->deleteClient($id);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}
?>