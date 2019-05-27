  <?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="<?php echo URLROOT.'/admin/cadastrar_membro/'?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" required><br>
          </div>
          <div class="form-group">
            <label for="area">Área de Pesquisa</label>
            <input type="text" class="form-control" name="area_pesquisa" required><br>
          </div>
          <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" name="facebook" required><br>
          </div>
          <div class="form-group">
            <label for="linkedin">Linkedin</label>
            <input type="text" class="form-control" name="linkedin" required><br>
          </div>
          <div class="form-group">
            <label for="github">Github</label>
            <input type="text" class="form-control" name="github" required><br>
          </div>
          <div class="form-group">
            <label for="foto">Avatar</label>
            <input type="file" class="form-control-file" name="foto"  required><br>
          </div>
          <input type="submit" value="Enviar" class="btn btn-pixgo btn-block">
        </form>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer_admin.php'; ?>
