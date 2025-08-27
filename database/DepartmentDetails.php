<?php
    class DepartmentDetails
    {
        public function getAllDeparmentDetails($dbo)
        {
            $cmd = "SELECT * FROM department_details";

            $statement = $dbo->conn->prepare($cmd);

            $statement->execute();

            $rv = $statement->fetchAll(pdo::FETCH_ASSOC);

            return $rv;
        }
    }
?>