<?php
class Cadastro extends CI_Controller{
  
    function index(){
                /*carrega a nossa view */
        $this->load->view('template','cadastro');
    }
}
?>