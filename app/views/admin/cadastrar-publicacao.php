<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo URLROOT.'/admin/cadastrar_publicacao/'?>" method="post" enctype="multipart/form-data">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo"><br>
    <label for="autores">Autores</label>
    <input type="text" name="autores"><br>
    <label for="conferencia">conferencia</label>
    <input type="text" name="conferencia"><br>
    <label for="ano">ano</label>
    <input type="text" name="ano"><br>
    <label for="url">url</label>
    <input type="text" name="url"><br>
    <select name="tipo">
      <option value="artigo">Artigo</option>
      <option value="resumo">Resumo</option>
    </select><br>
    <input type="submit" value="cadastrar">
    
  </form>
</body>
</html>