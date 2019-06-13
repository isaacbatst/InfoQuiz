<?php
    class LoginController extends CI_Controller {

        public function autenticar(){
            $usuario = $this->input->post();
            $auth = $this->Usuario->logar($usuario);
            if($auth){
                $this->session->set_userdata("usuariologado",$usuario);
                $this->session->set_flashdata("success","Logado com sucesso");
            } else {
                $this->session->set_flashdata("danger","Usuário ou senha inválidos");
            }

            redirect('admin-index');
        }

        public function logout(){
            $this->session->unset_userdata("usuariologado");
            $this->session->set_flashdata("success","Deslogado com sucesso");
            redirect('index');
        }
        
  	}
