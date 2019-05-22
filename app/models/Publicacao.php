<?php 
  class publicacao {
    
    public function __construct(){ 
      $this->db = new Database;
    }
    public function getArtigos() {
      $this->db->query("SELECT * FROM publicacao");
      $artigos = $this->db->resultSet();
      return $artigos;
    }
    public function cadastrarPublicacao($data) {
     $this->db->query('INSERT INTO publicacao (`titulo`, `autores`, `resumo`, `conferencia`, `ano`, `url`) VALUES (:titulo, :autores, :resumo, :conferencia, :ano, :url)');
      $this->db->bind(':titulo', $data['titulo']);
      $this->db->bind(':autores', $data['autores']);
      $this->db->bind(':resumo', $data['resumo']);
      $this->db->bind(':conferencia', $data['conferencia']);
      $this->db->bind(':ano', $data['ano']);
      $this->db->bind(':url', $data['url']);
      
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function excluirPublicacao($id_publicacao) {
      $this->db->query("DELETE FROM publicacao WHERE id_publicacao = :id_publicacao");
      $this->db->bind(':id_publicacao', $id_publicacao);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }
?>