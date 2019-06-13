<?php
    class UsuarioController extends CI_Controller {

        public function index(){
            $parametros['titulo'] = 'Usuários';
            $parametros['usuarios'] =  $this->Usuario->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('usuario/index',$parametros);
            $this->load->view('rodape');
        }
        
        /*
   	    public function visualizar($id){
            $parametros['titulo'] = 'Usuario';
            $parametros['usuario'] =  $this->Usuario->get($id);
            $this->load->view('usuario/visualizar',$parametros);
            $this->load->view('rodape');
        }
        */

        public function novo(){
            $parametros['titulo'] = 'Novo Usuário';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('usuario/novo');
            $this->load->view('rodape');
        }

        public function salvar(){
            $usuario = $this->input->post();
            $this->Usuario->inserir($usuario);
            redirect('usuario-index');
        }
  	}
