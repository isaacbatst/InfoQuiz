<?php
    class Questionario extends CI_Model {

        function get($qtd) {
            if($qtd){
              $this->db->limit($qtd);
              $sql = $this->db->order_by('id', 'RANDOM');
              return $sql->result_array();
              
            }else{
                echo("Erro.");
            }
        }
    }

    // $sql = "SELECT pergunta, alternativa_a, alternativa_b,alternativa_c, alternativa_d, alternativa_correta FROM questoes ORDER BY RAND() LIMIT ". $qtd;