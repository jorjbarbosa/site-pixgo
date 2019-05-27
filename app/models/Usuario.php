<?php 
  class Usuario {
    public function __construct() {
      $this->db = new Database;
    }

    public function login($email, $senha) {
      $this->db->query("SELECT * from usuario WHERE email = :email");
      $this->db->bind(':email', $email);
      $usuario = $this->db->single();
      if($usuario->senha == $senha){
        return $usuario;
      } else {
        return false;
      }
    }
    public function findUserByEmail($email) {
      $this->db->query("SELECT * from usuario WHERE email = :email");
      $this->db->bind(':email', $email);
      $usuario = $this->db->single();
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }
?>