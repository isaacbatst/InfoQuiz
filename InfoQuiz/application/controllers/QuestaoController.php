<?php
    class QuestaoController extends CI_Controller {

        public function index(){
            $parametros['titulo'] = 'Questões';
            $parametros['questoes'] =  $this->Questao->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/index',$parametros);
            $this->load->view('rodape');
        }
        
        /*
   	    public function visualizar($id){
            $parametros['titulo'] = 'Questao';
            $parametros['questao'] =  $this->Questao->get($id);
            $this->load->view('questao/visualizar',$parametros);
            $this->load->view('rodape');
        }
        */

        public function novo(){
            $parametros['titulo'] = 'Nova Questão';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/novo');
            $this->load->view('rodape');
        }

        public function salvar(){
            $questao = $this->input->post();
            $this->Questao->inserir($questao);
            redirect('questao-index');
        }
        public function editar($id){
            $parametros['titulo'] = 'Edição de Questao';
            $parametros['questao'] = $this->Questao->get($id);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/editar',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
          $questao = $this->input->post();
          $this->Questao->atualizar($questao);
          redirect('questao-index');

        }

        public function excluir($id){
          $this->Questao->excluir($id);
          redirect('questao-index');
        }
<<<<<<< HEAD

 }
=======
  	}
>>>>>>> 758110b37310d86de3a22cf55f1f651136f2dd99
