<?php 
class Main extends Ci_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function mostrar($vista = "", $datos = array()){
        $this->load->view('Temas/encabezado');
        $this->load->view('Temas/pie');
        $this->load->view($vista,$datos);
    }

    public function index() {
        $this->mostrar('main');
    }

    public function salir()
	{

		$this->session->sess_destroy();
		redirect('login');
	}
}
?>