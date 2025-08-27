<?php
require_once("../database/Database.php");
require_once("../database/ProgrammeDetails.php");

$dbo = new Database();
$programmeDetails = new ProgrammeDetails();
//theses files inside ajax folder are used to handle ajax requests.
$action = $_POST["action"];

if($action == "getProgrammingDetails") {
    $results = $programmeDetails->getAllProgrammeDetails($dbo);

   $rv = json_encode($results);
   echo $rv;
   exit();
}
//$p = $_POST["a"];
?>