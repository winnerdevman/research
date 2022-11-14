<?php
namespace App\Models;

use App\Models\BaseModel;

class LocationUserTokenModel extends BaseModel
{
    protected $table      = 'locationusertokens';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['locationuser_id', 'locationuser_key', 'start_time'];

    protected $useTimestamps = false;

    public function __construct(){
        parent::__construct(); 
    }

    public function getUserTokenItem($user_id){
        $result = $this->db->table($this->table)
                        ->where("locationuser_id", $user_id )
                        ->get()->getResult();
        var_dump($user_id);
        return count($result) == 0 ? false : $result[0];
    }

    public function generateResetPasswordToken($user_id ){
        $user_token = md5(date("Y-m-d H:i:s"));
        $result = $this->db->table($this->table)
                        ->where("locationuser_id", $user_id )
                        ->get()->getResult();
        if (count($result) == 0 ){
            $this->db->insert($this->table, 
                ["locationuser_id"=> $user_id, "locationuser_key"=> $user_token, "start_time"=> date("Y-m-d H:i:s")] );
        }else{
            $this->db
                ->where("locationuser_id", $user_id)
                ->update(["locationuser_key"=> $user_token, "start_time"=> date("Y-m-d H:i:s")]);
        }
        return $user_token;
    }
}

?>