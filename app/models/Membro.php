<?php 
  class Membro {
    public function _construct() {
      $this->db = new Database;
    }

    public function getMembros() {
      $sql = "SELECT * FROM membros";
      $membros = $this->db->resultSet($sql);
      return $membros;
    }
    public function getMembrosById($id_membro) {
      $sql = "SELECT * FROM membros WHERE id_membro = :id_membro";
      $membro = $this->db->single($sql);
      return $membro;
    }
    public function cadastrarMembro($dados) {
      $sql = "INSERT INTO membros ('nome', 'email', 'titulacao', 'area_pesquisa', 'facebook', 'linkedin', 'github') VALUES (:nome, :email, :titulacao, :area_pesquisa, :facebook, :linkedin, :github)";
      $this->db->bind(':nome', $data['nome']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':titulacao', $data['titulacao']);
      $this->db->bind(':area_pesquisa', $data['area_pesquisa']);
      $this->db->bind(':facebook', $data['facebook']);
      $this->db->bind(':linkedin', $data['linkedin']);
      $this->db->bind(':github', $data['github']);

      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

  }
?>