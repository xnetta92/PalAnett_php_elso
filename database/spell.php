<?php
require_once "database.php";   
class Spells extends Database {
    function GetAll() {
        $sql = "SELECT * FROM varazslatok WHERE 1 ORDER BY `type`,`spell` ASC;";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function create($newspell) {
        $sql ="INSERT INTO varazslatok (spell,type,description,level,icon)
            VALUES (?,?,?,?,NULL)";
        $stmt = $this->connection->prepare($sql);
        $spell = $newspell['spell'];
        $type = $newspell['type'];
        $description = $newspell['description'];
        $level = $newspell['level'];
        $licon = $newspell['icon'];
        $stmt->bind_param("sssi", $spell, $type, $description,  $level);        
        $stmt->execute();
    }
}

?>