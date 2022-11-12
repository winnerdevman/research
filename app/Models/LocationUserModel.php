<?php
namespace App\Models;

use App\Models\BaseModel;

class LocationUserModel extends BaseModel
{
    protected $table = "locationusers"; 
    
    public function __construct(){
        parent::__construct(); 
    }

    public function getUser($email, $password){
        $where = [
            "locationUserEmail"=> $email,
            "locationUserPassword"=> md5($password)
        ];

        $result = $this->db->table($this->table)
                ->where($where)
                ->get()->getResult();
        
        return count($result) == 0 ? false : $result[0];
    }
}

?>