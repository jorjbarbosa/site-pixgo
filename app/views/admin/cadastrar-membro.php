<<<<<<< HEAD
  <?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <form action="<?php echo URLROOT.'/admin/cadastrar_membro/'?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome"><br>
    </div>
    <div class="form-group">
      <label for="area">Área de Pesquisa</label>
      <input type="text" class="form-control" name="area_pesquisa"><br>
    </div>
    <div class="form-group">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" name="facebook"><br>
    </div>
    <div class="form-group">
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" name="linkedin"><br>
    </div>
    <div class="form-group">
      <label for="github">github</label>
      <input type="text" class="form-control" name="github"><br>
    </div>
    <div class="form-group">
      <label for="foto">foto</label>
      <input type="file" class="form-control" name="foto" ><br>
    </div>
    <input type="submit" value="enviar">
  </form>
  <?php require APPROOT . '/views/inc/footer_admin.php'; ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo URLROOT.'/admin/cadastrar_membro/'?>" method="post" enctype="multipart/form-data">
    <label for="nome">Nome</label>
    <input type="text" name="nome"><br>
    <label for="area">Área de Pesquisa</label>
    <input type="text" name="area_pesquisa"><br>
    <label for="facebook">Facebook</label>
    <input type="text" name="facebook"><br>
    <label for="linkedin">Linkedin</label>
    <input type="text" name="linkedin"><br>
    <label for="github">github</label>
    <input type="text" name="github"><br>
    <label for="foto">foto</label>
    <input type="file" name="foto"><br>
    <input type="submit" value="enviar">
  </form>
</body>
</html>
>>>>>>> 0b1025f7d493ffa492fe8633c32a4cb8a4aa52f5
