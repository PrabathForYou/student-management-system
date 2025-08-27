<?php

require_once "Database.php";
require_once "ProgrammeDetails.php";
require_once "DepartmentDetails.php";

$dbo = new Database();
$pdo = new ProgrammeDetails();
$ddo = new DepartmentDetails();

//$getProgrammeDetailsToEdit = $pdo->getProgrammeDetailsByCode($dbo,'TT');

//$updateProgrammeDetails = $pdo->updateProgrammeDetailsById($dbo,1,'test title 2', 'TTT',8,'Testgrlvl', 'TLVL 2', 1);

//$rv =  $pdo->getAllProgrammeDetails($dbo);



//$requestValues = $pdo->createProgramme($dbo,"one title","T2",4,"TEST bro","TEST techlvl 2",2);
//print_r($rv);
?>