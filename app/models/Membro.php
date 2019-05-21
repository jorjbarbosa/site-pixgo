<?php 
  class Membro {
    public function __construct() {
      $this->db = new Database;
    }

    public function getMembros() {
      $sql = "SELECT * FROM membros";
      $this->db->query($sql);
      $membros = $this->db->resultSet();
      return $membros;
    }
    public function getMembroById($id_membro) {
      $this->db->query("SELECT * FROM membros WHERE id_membro = :id_membro");
      $this->db->bind(':id_membro', $id_membro);
      $membro = $this->db->single();
      return $membro;
    }
    public function cadastrarMembro($dados) {
      $this->db->query("INSERT INTO `membros` (`id_membro`, `nome`, `area_pesquisa`, `facebook`, `linkedin`, `github`, `foto`) VALUES (NULL, :nome, :area_pesquisa, :facebook, :linkedin, :github, :foto);");
      $this->db->bind(':nome', $dados['nome']);
      $this->db->bind(':area_pesquisa', $dados['area_pesquisa']);
      $this->db->bind(':facebook', $dados['facebook']);
      $this->db->bind(':linkedin', $dados['linkedin']);
      $this->db->bind(':github', $dados['github']);
      $this->db->bind(':foto', $dados['foto']);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function editarMembro($data) {
      $this->db->query("UPDATE membros SET nome = :nome, area_pesquisa = :area_pesquisa, facebook = :facebook, linkedin = :linkedin, github = :github, foto = :foto");
      $this->db->bind(':nome', $dados['nome']);
      $this->db->bind(':area_pesquisa', $dados['area_pesquisa']);
      $this->db->bind(':facebook', $dados['facebook']);
      $this->db->bind(':linkedin', $dados['linkedin']);
      $this->db->bind(':github', $dados['github']);
      $this->db->bind(':foto', $dados['foto']);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function excluirFoto($foto) {
      
    }

  }
?>