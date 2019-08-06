<?php
class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("usuario_model");
    }

    public function mostrar($vista="",$datos = array()){
        $this->load->view("Temas/encabezado");
        $this->load->view("Temas/pie");
        $this->load->view($vista,$datos);
    }

    public function index(){
        $this->mostrar('login');
    }

    public function registrarseView(){
        $this->mostrar('registrarse');
    }

    public function registrarse(){
        $usuario = $this->input->post("usuario");
        $password = $this->input->post("password");

        $datos = array("usuario" => $usuario,
                        "password" => $password                
        );
        $rta = $this->usuario_model->insert($datos);
        
        if($rta == true){
            $op["op"] = "se creo con exito";
           
            $this->mostrar('registrarse', $op);
        } else {
            $op["op"] = "no se pudo  guardar";
            $this->mostrar('registrarse', $op);
        }
    }

    public function checkingLogin() {
        $usuario = $this->input->post("usuario");
        $password = $this->input->post("password");
        
        if($user = $this->usuario_model->checkingLogin($usuario,$password)){
            $this->session->set_userdata("idUser", $user["idUser"]);
            $this->session->set_userdata("usuario", $user["usuario"]);
            redirect('main/main');

        } else {
            $op["op"] = "usuario no existe";
            $this->mostrar('login', $op);
        }
    }
}
 
?>