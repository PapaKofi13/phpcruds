<?php
require_once "./db.php";
class Volume{
    
    private $conn;

    public function __construct()
    {
      $database = new Connection();
      $this->conn = $database->connect();
      return $this->conn;
    }


    private function addVolume($vol_title, $vol_year, $vol_descriprion)
    {
        $modify_date = date('Y-m-d H:i:s');
    
        $sql = "INSERT INTO gwer_volume(`Volume_title`,`Volume_year`,`Volume_description`, `Volume_modify_date`) VALUES(?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$vol_title, $vol_year, $vol_descriprion, $modify_date]);
        if ($success) {
            echo "Volume Saved";
        } else {
            echo "An unexpected error occured...try again ";
        }
    }

    public function executeAddVolume($vol_title, $vol_year, $vol_descriprion){
        return $this->addVolume($vol_title, $vol_year, $vol_descriprion);
    }
}