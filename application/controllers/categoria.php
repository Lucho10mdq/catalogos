<?php 
class Categoria extends Ci_Controller
{
    public function __construct(){
        parent::__construct();
        if(!isset($this->session->userdata["usuario"])){
            redirect('login');
        }
        $this->load->model("categoria_modelo");
    }

    public function mostrar($vista = "",$data = array()){
        $this->load->view("Temas/encabezado");
        $this->load->view("Temas/pie");
        $this->load->view($vista,$data);
    }

    public function index(){
        $this->mostrar('addCategoria');
    }

    public function agregarCategoria(){

        if($this->input->post("nombre") == ""){
            $op["op"] = "no deben quedar datos vacios";
            $this->mostrar('addCategoria', $op);
        }else {
            $nombre = $this->input->post("nombre");
            $data = array(
                "nombre" => $nombre
            );
            if($this->categoria_modelo->insert($data) == true){
                $op["op"] = "se guardo con exito";
                $this->mostrar('addCategoria',$op);
            }
            else {
                $op["op"] = "no se pudo guardar";
                $this->mostrar('addCategoria',$op);
            }
        }
    }

    public function listarCategoria(){
        $categoria["categoria"] = $this->categoria_modelo->listaCategorias();
        $this->mostrar('addProducto',$categoria);
    }

}

?>