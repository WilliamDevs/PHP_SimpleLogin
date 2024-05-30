<?php 
class HomeModel{
    public $db;


    public function CheckUserLogin($username,$password){
        $query = "SELECT count(*) FROM tbl_user WHERE username='{$username}' AND password='{$password}'";

        $stmt = $this->db->prepare($query)->execute();
        print_r($stmt);
        exit;
        return $stmt;
    }
}


