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
    public function getPublicacaoById($id) {
      $this->db->query("SELECT * FROM publicacao WHERE id_publicacao = :id_publicacao");
      $this->db->bind(':id_publicacao', $id);
      $result = $this->db->single();
      return $result;
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
    public function editarPublicacao($data) {
      $this->db->query("UPDATE publicacao SET titulo = :titulo, autores = :autores, resumo = :resumo, conferencia = :conferencia, ano = :ano, url = :url WHERE id_publicacao = :id_publicacao");
      $this->db->bind(':id_publicacao', $data['id_publicacao']);
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