<?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
      <form action="<?php echo URLROOT.'/admin/cadastrar_publicacao/'?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titulo">Titulo</label>
          <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
          <label for="autores">Autores</label>
          <input type="text" name="autores" class="form-control">
        </div>
        <div class="form-group">
          <label for="conferencia">Conferencia</label>
          <input type="text" name="conferencia" class="form-control">
        </div>
        <div class="form-group">
          <label for="ano">Ano</label>
          <input type="text" name="ano" class="form-control">
        </div>
        <div class="form-group">
          <label for="url">URL</label>
          <input type="text" name="url" class="form-control">
        </div>
        <div class="form-group">
          <select name="tipo" class="form-control">
            <option value="artigo">Artigo</option>
            <option value="resumo">Resumo</option>
          </select>
        </div>
       
        <input type="submit" value="Enviar" class="btn btn-pixgo btn-block">
        
      </form>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer_admin.php'; ?>

  