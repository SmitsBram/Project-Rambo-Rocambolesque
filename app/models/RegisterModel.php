<?php
include_once 'app/config/config.php';
include_once 'app/controllers/Register.php';

class Register_Model extends Model
{
public function check_user($user_name,$email_id)
{
$result= $this->db->select("SELECT * FROM `register` WHERE user_name = '".$user_name."' OR email_id = '".$email_id."'");
$count = count($result);
return $count;
}
public function insert_user($data)
{
$this->db->insert('register', $data);
}
}