<?php
    class AdminController extends CI_Controller {

        public function index(){

            $parametros['titulo'] = 'SuperQuiz';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('admin/index');
            $this->load->view('rodape');
        }
    }