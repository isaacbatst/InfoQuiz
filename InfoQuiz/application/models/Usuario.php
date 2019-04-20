<?php
    class Usuario extends CI_Model {

        function get($id=null) {
            if($id){
                $this->db->where('id', $id);
                $query = $this->db->get('usuario');
                return $query->row_array();
            }else{
                $query = $this->db->get('usuario');
                return $query->result_array();
            }
        }
        function inserir($usuario) {
          $usuario['password'] = md5($usuario['password']);
          return $this->db->insert('usuario', $usuario);
            }
        function atualizar($usuario) {
          $this->db->where('id', $usuario['id']);
          $usuario['password'] = md5($usuario['password']);
          return $this->db->update('usuario',$usuario);
        }
        function excluir($id){
          $this->db->where('id',$id);
          return $this->db->delete('usuario');
        }
        function logar($usuario){
          $this->db->where('username',$usuario['username']);
          $this->db->where('password',md5($usuario['password']));
          $authuser = $this->db->get('usuario')->row_array();
          return $authuser;
        }
    }
