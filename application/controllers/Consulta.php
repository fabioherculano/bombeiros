<?php
class Consulta extends CI_Controller{
  
    function index(){
                /*carrega a nossa view */
        $this->load->view('template_consulta');
    }


function salvar(){
	
	$this->load->model('Consulta_model');
	$nome =  $_POST['nome'];
	$nasc =  $_POST['nascimento'];
	$cpf =  $_POST['cpf'];
	
	if ($_POST['sexo']=="0") {
		$sexo =  true;
	}else{
		$sexo =  false;
	}

	if ( isset($_POST['fundamental'])) {
		$fundamental =  true;
	}else{
		$fundamental =  false;
	}

	if (isset($_POST['medio'])) {
		$medio =  true;
	}else{
		$medio =  false;
	}

	if (isset($_POST['superior'])){
		$superior =  true;
	}else{
		$superior =  false;
	}
	

	
	
	
	
	//$contatos = $this->Consulta_model->GetAll();

	//$dados['pessoas'] =$this->Consulta_model->Formatar($contatos);
	//var_dump($dados);
	$this->Consulta_model->nome = $nome;
	$dataSeparada = explode("/", $nasc);
	$nasc = $dataSeparada[2]."-".$dataSeparada[1]."-".$dataSeparada[0];
	$this->Consulta_model->nasc = $nasc;
	$this->Consulta_model->cpf = $cpf;
	$this->Consulta_model->sexo = $sexo;
	$this->Consulta_model->fundamental = $fundamental;
	$this->Consulta_model->medio = $medio;
	$this->Consulta_model->superior = $superior;
	$this->Consulta_model->Inserir($this->Consulta_model);
	
	//$this->Consulta_model->Inserir($contatos);
	
	 $this->load->view('template_consulta');
}

	function editar(){

		$this->load->model('Consulta_model');
    	$id = $this->uri->segment(3);

    	$query = $this->Consulta_model->GetById($id);
    	
    	$data['id'] = $id;
    	$data['nome'] = $query['nome'];
    	$data['nasc'] = $query['nasc'];
    	$data['cpf'] = $query['cpf'];
    	$data['sexo'] = $query['sexo'];
    	$data['fundamental'] = $query['fundamental'];
    	$data['medio'] = $query['medio'];
    	$data['superior'] = $query['superior'];
    	
    	//var_dump($rec);
    	  
		$this->load->view('template_consulta', $data);

    	//$this->load->view('template_consulta',$data);

	}

	function atualizar(){

		$this->load->model('Consulta_model');
		$nome =  $_POST['nome'];
		$nasc =  $_POST['nascimento'];
		$cpf =  $_POST['cpf'];

		if ($_POST['sexo']=="0") {
			$sexo =  true;
		}else{
			$sexo =  false;
		}

		if ( isset($_POST['fundamental'])) {
			$fundamental =  true;
		}else{
			$fundamental =  false;
		}

		if (isset($_POST['medio'])) {
			$medio =  true;
		}else{
			$medio =  false;
		}

		if (isset($_POST['superior'])){
			$superior =  true;
		}else{
			$superior =  false;
		}
	
		
		$this->db->set('nome', $nome);
		$dataSeparada = explode("/", $nasc);
		$nasc = $dataSeparada[2]."-".$dataSeparada[1]."-".$dataSeparada[0];
		$this->db->set('nasc', $nasc);
		$this->db->set('cpf', $cpf);
		$this->db->set('sexo', $sexo);
		$this->db->set('fundamental', $fundamental);
		$this->db->set('medio', $medio);
		$this->db->set('superior', $superior);
		$this->db->where('id', $_POST['id']);

		$this->db->update('pessoas'); // gives UPDATE mytable SET field = field+1 WHERE id = 2

		$data['lista'] = $this->principal_model->GetAll('nome');
    	 $this->load->view('template_cadastro',$data);
		//$this->load->view('template_cadastro');
	}

}
?>