<?php

$method = $_SERVER['REQUEST_METHOD'];

if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    
}
if(isset($_POST['idade'])){
    $idade = $_POST['idade'];

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
    <?php
        if($method == 'GET'):
    ?>
        <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite a sua idade">
        </div>
         <div>
            <input type="checkbox" name="opcionais[]" value="Preto"> Pardo
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Branco"> Branco
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
     else: ?>
    <h1>
        O seu nome é <?= $nome ?> e você tem <?= $idade ?> anos.
        <?php if($idade < 18): ?>
            Você é menó
        <?php endif; ?>
    </h1>
<?php endif; ?> 
</body>
</html>