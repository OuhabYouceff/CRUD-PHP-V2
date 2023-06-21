<?php
class Client{
    private ?int $idClient = null;
    private ?string $lastName = null;
    private ?string $firstName = null;
    private ?string $adress = null;
    private ?DateTime $dob = null;

function __construct($idClient=null,$lastName,$firstName,$adress,$dob){
   $this->idClient=$idClient; 
   $this->lastName=$lastName; 
   $this->firstName=$firstName; 
   $this->adress=$adress; 
   $this->dob=$dob; 
}
function getIdClient(){
return$this->idClient;
}
function getLastName(){
    return$this->lastName;
    }
    function getFirstName(){
        return$this->firstName;
        }
        function getAdress(){
            return$this->adress;
            }
        function getDob(){
            return$this->dob;
            }
            function setIdClient($idClient){
                $this->idClient=$idClient;
            }
            function setLastName($lastName){
                $this->lastName=$lastName;

           

              }
              function setFirstName($firstName){
                $this->firstName=$firstName;

           

              }
              function setAdress($address){
                $this->adress=$address;

           

              }
              function setDob($dob){
                $this->dob=$dob;

           

              }
              
}




?>