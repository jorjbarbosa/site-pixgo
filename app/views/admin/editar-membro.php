<?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="<?php echo URLROOT.'/admin/editar_membro/'.$data['membro']->id_membro?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome"  value="<?php echo $data['membro']->nome;?>"><br>
          </div>
          <div class="form-group">
            <label for="area">Área de Pesquisa</label>
            <input type="text" class="form-control" name="area_pesquisa" value="<?php echo $data['membro']->area_pesquisa;?>">
          </div>
          <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" name="facebook" value="<?php echo $data['membro']->facebook;?>">
          </div>
          <div class="form-group">
            <label for="linkedin">Linkedin</label>
            <input type="text" class="form-control" name="linkedin" value="<?php echo $data['membro']->linkedin;?>">
          </div>
          <div class="form-group">
            <label for="github">Github</label>
            <input type="text" class="form-control" name="github" value="<?php echo $data['membro']->github;?>">
          </div>
          <!-- <div class="form-group">
            <label for="foto">Avatar</label>
            <input type="file" class="form-control-file" name="foto">
          </div> -->
          <input type="submit" value="Enviar" class="btn btn-pixgo btn-block">
        </form>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer_admin.php'; ?>
