<?php
    class Questionario extends CI_Model {

        function get($qtd,$disciplina) {
            if($qtd){
              $this->db->where('disciplina', $disciplina);
 
              $this->db->order_by('id', 'RANDOM');
              $this->db->limit($qtd);
              $query = $this->db->get('questao');

              return $query->result_array();

            }else{
                echo("Erro.");
            }
        }
    }

    // $sql = "SELECT pergunta, alternativa_a, alternativa_b,alternativa_c, alternativa_d, alternativa_correta FROM questoes ORDER BY RAND() LIMIT ". $qtd;