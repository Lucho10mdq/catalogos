<?php 
class Producto_model extends Ci_Model
{
    public function __construct(){
        parent:: __construct();
    }

    public function insert($datos) {
        $rta = $this->db->insert("productos",$datos);
        if($rta) {
            return true;
        } else {
            return false;
        }
    }

    public function listarProductos() {
        $res = $this->db->get("productos");
        return $res->result_array();
        
    }

    public function eliminarProducto($idProducto){
        $this->db->where("idProducto", $idProducto);
        $this->db->delete("productos");
    }

    public function buscarProducto($idProducto){
        $this->db->where("idProducto",$idProducto);
        $res = $this->db->get("productos");
        return $res->result_array();
    }

    public function modificarProducto($data,$idProducto){
        $this->db->where("idProducto", $idProducto);
        $res = $this->db->update("productos",$data);
        if($res){
            return true;
        } else {
            return false;
        }
    }
}

?>