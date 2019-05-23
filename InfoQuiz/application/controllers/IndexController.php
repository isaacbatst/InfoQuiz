<?php
    class IndexController extends CI_Controller {

        public function index(){
<<<<<<< HEAD
            $parametros['titulo'] = 'SuperQuiz';
=======
            $parametros['titulo'] = 'Página Inicial';
>>>>>>> 758110b37310d86de3a22cf55f1f651136f2dd99
            $this->load->view('cabecalho',$parametros);
            $this->load->view('index');
            $this->load->view('rodape');
        }
    }