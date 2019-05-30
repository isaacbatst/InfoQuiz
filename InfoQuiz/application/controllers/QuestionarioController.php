<?php
    class QuestionarioController extends CI_Controller {

        public function index($qtd){
        	$post = $this->input->post();
        	$disciplina = $post['disciplina'];
            $parametros['titulo'] = 'Questionário';
            $parametros['questoes'] =  $this->Questionario->get($qtd,$disciplina);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questionario/index',$parametros);
            $this->load->view('rodape');
        }
           
  	}
