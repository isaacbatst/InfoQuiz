<?php
    class IndexController extends CI_Controller {

        public function index(){
            $parametros['titulo'] = 'Página Inicial';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('index');
            $this->load->view('rodape');
        }
    }