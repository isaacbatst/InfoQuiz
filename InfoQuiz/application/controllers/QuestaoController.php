<?php
    class QuestaoController extends CI_Controller {

        public function index(){
            $parametros['titulo'] = 'Questões';
            $parametros['questoes'] =  $this->Questao->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/index',$parametros);
            $this->load->view('rodape');
        }

   	    public function visualizar($id){
            $parametros['titulo'] = 'Questao';
            $parametros['Questao'] =  $this->Questao->get($id);
            $this->load->view('Questao/visualizar',$parametros);
            $this->load->view('rodape');
        }

        public function novo(){
            $parametros['titulo'] = 'Nova Questao';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('Questao/novo');
            $this->load->view('rodape');
        }

        public function salvar(){
            $Questao = $this->input->post();
            $this->Questao->inserir($Questao);
            redirect();
        }
        public function editar($id){
            $parametros['titulo'] = 'Edição de Questao';
            $parametros['Questao'] = $this->Questao->get($id);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('Questao/editar',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
          $Questao = $this->input->post();
          $this->Questao->atualizar($Questao);
          redirect();
        }

        public function excluir($id){
          $this->Questao->excluir($id);
          redirect();
        }
  	}
