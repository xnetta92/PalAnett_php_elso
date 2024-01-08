<?php
require_once "database.php";   
class Spells extends Database {
    function GetAll() {
        $sql = "SELECT * FROM varazslatok WHERE 1 ORDER BY `type`,`spell` ASC;";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function Add($newspell) {
        $sql ="INSERT INTO varazslatok (spell,type,description,level,icon)
            VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $spell = $newspell['spell'];
        $type = $newspell['type'];
        $description = $newspell['description'];
        $level = $newspell['level'];
        $icon = $newspell['icon'];
        $stmt->bind_param("sssis", $spell, $type, $description, $level, $icon);        
        $stmt->execute();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Spells();
    if (isset($_FILES['icon'])) {
        $icon=base64_encode(file_get_contents($_FILES['icon']['tmp_name']));
        $newspell=[];
        $newspell['spell']=$_POST['spell'];
        $newspell['type']=$_POST['type'];
        $newspell['description']=$_POST['description'];
        $newspell['level']=$_POST['level'];
        $newspell['icon']=$icon;
        if($database->Add($newspell)) {
            http_response_code(201);
        }
        header("Location: /index.php?page=listspell");
    }
}

?>