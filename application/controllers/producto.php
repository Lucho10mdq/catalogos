<?php
    class Producto extends Ci_Controller {

        public function __construct(){
            parent:: __construct();
            if(!isset($this->session->userdata["usuario"]))
            {
                redirect("login");
            }

            $this->load->model("producto_model");
            $this->load->model("categoria_modelo");
        }

        public function mostrar($vista="",$data = array()){
            $this->load->view("Temas/encabezado");
            $this->load->view("Temas/pie");
            $this->load->view($vista,$data);
        }

        public function index(){
            $categoria["categoria"] = $this->categoria_modelo->listaCategorias();
            $this->mostrar('addProducto',$categoria);
          
        }

        public function agregarProducto() {
           
            if(($this->input->post('nombre') == "") && ($this->input->post('precio') == "") && ($this->input->post('descripcion') == "")){
                $op["op"] = "No pueden quedar datos vacios";
                $this->mostrar('addProducto',$op);
            } else {
                $nombre = $this->input->post('nombre');
                $precio = $this->input->post('precio');
                $descripcion = $this->input->post('descripcion');

                $datos = array("nombre" => $nombre,
                                "precio" =>$precio,
                                "descripcion" =>$descripcion    
                );  
                if($this->producto_model->insert($datos) ==  true){
                    $op["op"] = " se guardo con exito";
                    $this->mostrar('addProducto', $op);
                } else {
                    $op["op"] = " no se pudo guardar";
                    $this->mostrar('addProducto', $op);
                }
            }
        }

        public function listarProductos(){
            $producto["producto"] = $this->producto_model->listarProductos();
            $this->mostrar('listaProducto', $producto);
        }

        public function eliminarProducto($idProducto = ""){
            if(intval($idProducto)){
                $this->producto_model->eliminarProducto($idProducto);
            }
            $producto["producto"] = $this->producto_model->listarProductos();
            $this->mostrar('listaProducto', $producto);
        }

        public function modificarProducto($idProducto = ""){
            if(intval($idProducto)){
                $producto["producto"] = $this->producto_model->buscarProducto($idProducto);
            }

            $this->mostrar('modificarProducto', $producto);
        }

        public function modificarProductoSeleccionado(){
            $idProducto = $this->input->post("idProducto");
            $nombre = $this->input->post("nombre");
            $descripcion = $this->input->post("descripcion");
            $precio = $this->input->post("precio");

            $datos = array("nombre" => $nombre,
                           "descripcion" => $descripcion,
                            "precio" => $precio
             );
             if($this->producto_model->modificarProducto($datos,$idProducto) == true){
                $op["op"] = " se guardo con exito";
                
            } else {
                $op["op"] = " no se pudo guardar";
                $this->mostrar('listaProducto', $op);
            }

            $producto["producto"] = $this->producto_model->listarProductos();
            $this->mostrar('listaProducto', $producto);
        }
    } 
    
    
?>