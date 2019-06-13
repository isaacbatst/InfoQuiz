<?php
    class IndexController extends CI_Controller {

        public function index(){

            $parametros['titulo'] = 'SuperQuiz';
            $parametros['disciplinas'] =  $this->Disciplina->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('index',$parametros);
            $this->load->view('rodape');
        }
    }