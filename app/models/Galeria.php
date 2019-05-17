<?php 
  class Galeria {
    
    public function getGalerias() {
      $this->db->query("SELECT * FROM galeira");
      $galeria = $this->db->resultSet();
      return $galeria;
    }

    public function getGaleriaById($id_galeria) {
      $this->db->query("SELECT * FROM galeira WHERE id_galeria = :id_galeria");
      $this->db->bind('id_galeria', $id_galeria);
      $galeria = $this->db->single();
      return $galeria;
    }

    public function getFotosGaleria($id_galeria) {
      $this->db->query("SELECT * foto WHERE id_galeria = :id_galeria");
      $this->db->bind(':id_galeria', $id_galeria);
      $fotos = $this->db->resultSet();
      return $fotos;
    }

    public function cadastrarGaleria($data) {
      $this->db->query("INSERT INTO galeria (`id_galeria`, `descricao`) VALUES (null, :id_galeria)");
      $this->db->bind(':descricao', $descricao);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function adcionarFoto($data) {
      $this->db->query("INSERT INTO foto (`id_foto`, `nome_foto`, `id_galeria`) VALUES (null, :nome_foto, :id_galeria)");
      $this->db->bind('nome_foto', $data['nome_foto']);
      $this->db->bind('id_galeria', $data['id_galeria']);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function removerFoto($id_foto) {
      $this->db->query("DELETE FROM foto WHERE id_foto = :id_foto;");
      $this->db->bind('id_foto', $id_foto);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }
?>