<?php
    class QuestionarioController extends CI_Controller {

        public function index($qtd){
            $parametros['titulo'] = 'Questionário';
            $parametros['questoes'] =  $this->Questionario->get($qtd);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questionario/index',$parametros);
            $this->load->view('rodape');
        }
           
  	}
