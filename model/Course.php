<?php
class Course{

private ?int $idCourse=null;
private ?string $label=null;
private ?int $duration=null;
private ?int $nbPlaces=null;
private ? DateTime $dateCourse=null;
function __construct ($idCourse=null,$label,$duration,$nbPlaces,$dateCourse){ 
$this->label=$label;
$this->duration=$duration;

$this->nbPlaces=$nbPlaces;

$this->dateCourse=$dateCourse;



}
function getIdCourse()
{

    return $this->idCourse;
}
function getLabel()
{

    return $this->label;
}
function getDuration()
{

    return $this->duration;
}
function getNbPlaces()
{

    return $this->duration;
}
function getDateCourse()
{

    return $this->dateCourse;
}
function setLabel($label){
    $this->label=$label;


}
function setDuration($duration){
    $this->duration=$duration;


}
function setNbPlaces($nbPlaces){
    $this->nbPlaces=$nbPlaces;


}
function setDateCourse($dateCourse){
    $this->dateCourse=$dateCourse;


}





}


?>