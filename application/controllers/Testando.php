<?php
class Testando extends CI_Controller{
  
    function index(){
                /*carrega a nossa view */
        $this->load->view('template','testando');
    }

    function cadastro(){
                /*carrega a nossa view */
        $this->load->view('testando');
    }
}
?>