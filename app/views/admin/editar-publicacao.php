<?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
      <form action="<?php echo URLROOT.'/admin/editar_publicacao/'.$data['publicacao']->id_publicacao;?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" class="form-control" name="titulo" value="<?php echo $data['publicacao']->titulo;?>">
        </div>
        <div class="form-group">
          <label for="autores">Autores</label>
          <input type="text" name="autores" class="form-control" value="<?php echo $data['publicacao']->autores;?>">
        </div>
        <div class="form-group">
          <label for="conferencia">Conferencia</label>
          <input type="text" name="conferencia" class="form-control" value="<?php echo $data['publicacao']->conferencia;?>">
        </div>
        <div class="form-group">
          <label for="ano">Ano</label>
          <input type="text" name="ano" class="form-control" value="<?php echo $data['publicacao']->ano;?>">
        </div>
        <div class="form-group">
          <label for="url">URL</label>
          <input type="text" name="url" class="form-control" value="<?php echo $data['publicacao']->url;?>">
        </div>
        <div class="form-group">
          <label for="resumo">Resumo</label>
          <textarea name="resumo"cols="30" rows="10" class="form-control"><?php echo $data['publicacao']->resumo;?></textarea>
        </div>

       
        <input type="submit" value="Enviar" class="btn btn-pixgo btn-block">
        
      </form>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer_admin.php'; ?>

  