<?php
class Cadastro extends CI_Controller{
  
    function index(){

		
		$data['lista'] = $this->principal_model->GetAll('nome');


                /*carrega a nossa view */
        $this->load->view('template_cadastro',$data);
    }
}
?>
