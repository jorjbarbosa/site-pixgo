<?php 
  class publicacao {
    
    public function _construct(){ 
      $this->db = new Database;
    }
    public function getArtigos() {
      $query = 'SELECT * FROM publicacoes WHERE tipo_publicacao == artigo';
      $artigos = $this->db->resultSet();
      return $artigos;
    }
    public function getResumos() {
      $query = 'SELECT * FROM publicacoes WHERE tipo_publicacao == resumo';
      $resumos = $this->db->resultSet();
      return $resumos;
    }
    public function cadastrarPublicacao($dados) {
      $query = 'INSERT INTO publicacoes (`titulo`, `autores`, `conferencia`, `ano`, `url`, `tipo_publicacao`) VALUES (:titulo, :autores, :conferencia, :ano, :url, :tipo)';
      $this->db->bind(':titulo', $data['titulo']);
      $this->db->bind(':autores', $data['autores']);
      $this->db->bind(':conferencia', $data['conferencia']);
      $this->db->bind(':ano', $data['ano']);
      $this->db->bind(':url', $data['url']);
      $this->db->bind(':tipo', $data['tipo']);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }
?>