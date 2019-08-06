<?php 
class Categoria_modelo extends Ci_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insert($data){
       $res = $this->db->insert("categoria", $data);
        if($res){
            return true;
        }
        else {
            return false;
        }
    }

    public function listaCategorias(){
        $lista = $this->db->get("categoria");
        return $lista->result_array();
    }
}

?>