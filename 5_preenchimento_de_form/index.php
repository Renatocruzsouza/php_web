<?php

$usuario = [
    'nome' => "Renato",
    'idade' => 19,
    'profissao' => 'Programador'
];

if($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
      <form action="">
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome?>">
    </form>
  </div>
  <div>
      <form action="">
        <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade?>">
    </form>
  <div>
      <form action="">
        <input type="text" name="profissao" placeholder="Digite sua profissao" value="<?= $profissao?>">
    </form>
  </div>
  <div>
    <input type="submit" value="Enviar">
  </div>
</body>
</html>