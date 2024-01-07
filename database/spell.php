<?php
require_once "database.php";   
class Spells extends Database {
    function GetAll() {
        $sql = "SELECT * FROM varazslatok WHERE 1 ORDER BY `type`,`spell` ASC;";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
?>