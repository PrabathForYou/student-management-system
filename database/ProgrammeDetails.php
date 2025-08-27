<?php

require_once "Database.php";

class ProgrammeDetails
{
    public function getAllProgrammeDetails($dbo)
    {
        $cmd = "SELECT 
                pd.*
                FROM programme_details AS pd,
                department_details AS dd 
                WHERE dd.id = pd.id";

        $statement = $dbo->conn->prepare($cmd);
        $statement->execute();
        $rv = $statement->fetchAll(pdo::FETCH_ASSOC);

        return $rv;
    }

    public function createProgramme($dbo, $title = null, $code = null, $no_of_sem = null, $graduation_level = null, $technical_level = null, $department_id = null)
    {
        try {
            $cmd = "INSERT INTO programme_details
                (title,code,no_of_sem,graduation_level,technical_level,department_id)
                VALUES(:title,:code,:no_of_sem,:graduation_level,:technical_level,:department_id)";

        $statement = $dbo->conn->prepare($cmd);

        $statement->execute([
            ":title" => $title,
            ":code" => $code,
            ":no_of_sem" => $no_of_sem,
            ":graduation_level" => $graduation_level,
            ":technical_level" => $technical_level,
            ":department_id" => $department_id
        ]);

            echo "Insert Successful";
        }catch (Exception $e){
            echo "Insert Failed";
        }
    }

    public function getProgrammeDetailsByCode($dbo,$code)
    {
        $cmd = "SELECT 
                pd.*
                FROM programme_details AS pd,
                department_details AS dd 
                WHERE dd.id = pd.id AND pd.code = :code";


        $statement = $dbo->conn->prepare($cmd);

        $statement->execute([":code" => $code]);

        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $rv;
    }

    public function getProgrammeDetailsById($dbo,$id)
    {
        $cmd = "SELECT 
                pd.*
                FROM programme_details AS pd,
                department_details AS dd 
                WHERE dd.id = pd.id AND pd.id = :id";


        $statement = $dbo->conn->prepare($cmd);

        $statement->execute([":id" => $id]);

        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $rv;
    }

    public function updateProgrammeDetailsById($dbo, $id, $title, $code, $no_of_sem, $graduation_level, $technical_level, $department_id)
    {
        $cmd = "UPDATE programme_details
                SET title = :title,
                    code = :code,
                    no_of_sem = :no_of_sem,
                    graduation_level = :graduation_level,
                    technical_level = :technical_level,
                    department_id = :department_id
                WHERE id = :id";

        $statement = $dbo->conn->prepare($cmd);

        try {
            $statement->execute([
                ":id" => $id,
                ":title" => $title,
                ":code" => $code,
                ":no_of_sem" => $no_of_sem,
                ":graduation_level" => $graduation_level,
                ":technical_level" => $technical_level,
                ":department_id" => $department_id
            ]);
            echo "Update successful";
        } catch (Exception $e){
            echo "Update failed " . $e->getMessage();
        }
    }
}