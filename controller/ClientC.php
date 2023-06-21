<?php
include_once("../config.php");
include_once("../model/Client.php");
class ClientC{
    //****************************fonction afficher
    function listClients(){
$sql="SELECT *FROM client";
$db=config::getConnexion();
try{
    $liste=$db->query($sql);
    return $liste;
}catch (Exception $e) {
    die('Error:' . $e->getMessage());
}

    }
    //*****************************fonction supprimer
    function deleteClient ($id) {
$sql="DELETE FROM client WHERE idClient =:id";
$db=config::getConnexion();
$req = $db->prepare($sql);
$req->bindValue(':id', $id);

try {
    $req->execute();
} catch (Exception $e) {
    die('Error:' . $e->getMessage());
}


    }
//***********************************fonction ajouter
function addClient($client){
$sql="INSERT INTO client VALUES(NULL,:firstName,:lastName,:adress,:dob)";
$db=config::getConnexion();
try{
    $query = $db->prepare($sql);
    $query->execute([
        'firstName' => $client->getFirstName(),
        'lastName' => $client->getLastName(),
        'adress' => $client->getAdress(),
        'dob' => $client->getDob()->format('Y/m/d')
    ]);

}catch(Exception $e){
    echo "error=:".$e->getMessage();


}
}
//***********************************fonction Modifier
function updateClient($client,$id){
   try{

  
    $sql="UPDATE client SET firstName=:firstName,lastName=:lastName,adress=:adress,dob=:dob where idClient=:id";

    $db=config::getConnexion(); 
    $query = $db->prepare(
        'UPDATE client SET 
            firstName = :firstName, 
            lastName = :lastName, 
            adress = :adress, 
            dob = :dob
        WHERE idClient= :idClient'
    );
    $query->execute([
        'idClient' => $id,
        'firstName' => $client->getFirstName(),
        'lastName' => $client->getLastName(),
        'adress' => $client->getAdress(),
        'dob' => $client->getDob()->format('Y/m/d')
    ]);
    echo $query->rowCount() . " records UPDATED successfully <br>";;

}catch(Exception $e){
    echo "error=:".$e->getMessage();
}
}



function showClient($id)
{
    $sql = "SELECT * from client where idClient = $id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute();

        $client = $query->fetch();
        return $client;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
}





?>