<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Formulario</title>
</head>
<body>
    <div class="container mt-5">
        <?php echo form_open('user/store'); ?>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" value="<?php echo isset($user['nome']) ? $user['nome'] : ''?>" name="nome" class="form-control" id="nome" placeholder="Nome">    
    </div>
    <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="<?php echo isset($user['email']) ? $user['email'] : ''?>" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" value="<?php echo isset($user['senha']) ? $user['senha'] : ''?>" name="senha" class="form-control" id="senha" placeholder="Senha">
    </div>
    <input type="submit" value="Salvar" class="btn btn-primary">
    <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : ''?>">
    <?php echo form_close(); ?>
    </div>
</body>
</html>