<?php
    class Questao extends CI_Model {

        function get($id=null) {
            if($id){
                $this->db->where('id', $id);
                $query = $this->db->get('questao');
                return $query->row_array();
            }else{
                $query = $this->db->get('questao');
                return $query->result_array();
            }
        }
        function inserir($questao) {
          return $this->db->insert('questao', $questao);
            }
        function atualizar($questao) {
          $this->db->where('id', $questao['id']);
          return $this->db->update('questao',$questao);
        }
        function excluir($id){
          $this->db->where('id',$id);
          return $this->db->delete('questao');
        }
    }
