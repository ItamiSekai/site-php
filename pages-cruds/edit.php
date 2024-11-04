
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
    </head>

    <?php include 'edit_helper.php' ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="row">
                <h1 class="mx-auto text-gray">Edicao de dados</h1>
            </div>

            <div class="row">
                <div class="col-md-6 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edicao de Cadastro</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="  edicao.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" value = "<?= isset($usuario['nome']) ? $usuario['nome'] : '' ?>" id="nome" name="usuario[nome]" placeholder="Digite seu nome">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" value = "<?= isset($usuario['email']) ? $usuario['email'] : '' ?>" id="email" name="usuario[email]" placeholder="Digite seu e-mail">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="text" class="form-control" value = "<?= isset($usuario['senha']) ? $usuario['senha'] : '' ?>" id="senha" name="usuario[senha]" placeholder="Digite sua senha">
                        </div>
                        
                        <div class="form-group">
                            <label for="tipo_assinatura">Tipo de Assinatura</label>
                            <input type="text" class="form-control" value = "<?= isset($usuario['tipo_assinatura']) ? $usuario['tipo_assinatura'] : '' ?>" id="tipo_assinatura" name="assinatura[tipo_assinatura]" placeholder="Digite seu tipo de assinatura (semanal ou diaria)">
                        </div>
                    </div>
                    
                    <input type="hidden" name="usuario[usuario_id]" value = "<?= $id ?? '' ?>">

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
                </div>
            </div>


        </div>

        <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../adminlte/dist/js/adminlte.min.js"></script>
    </body>
</html>
