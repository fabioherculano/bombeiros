<?php
class Cadastro extends CI_Controller{
  
    function index(){

		
		$data['lista'] = $this->principal_model->GetAll('nome');


                /*carrega a nossa view */
        $this->load->view('template_cadastro',$data);
    }

    function excluir(){
    	
    	$this->load->model('Consulta_model');
    	$id = $this->uri->segment(3);
    	$this->Consulta_model->Excluir($id);
    	//redirect("cadastro/");
    	//exit();
    	$data['lista'] = $this->principal_model->GetAll('nome');
    	 $this->load->view('template_cadastro',$data);
    }


}
?>
