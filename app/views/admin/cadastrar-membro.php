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