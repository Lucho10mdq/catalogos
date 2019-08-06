<?php 
class Usuario_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
    }

    public function insert($datos){
       $rta =  $this->db->insert("users",$datos);
        if($rta){
            return true;
        } else {
            return false;
        }
    }

    public function checkingLogin($usuario,$password){
        $this->db->where("usuario",$usuario);
        $this->db->where("password",$password);

        return $res = $this->db->get("users")->row_array();
    }
}
?>