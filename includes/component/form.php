

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <div class="row">
                <h1 class="mx-auto">Faça já o cadastro no nosso site</h1>
            </div>

            <div class="row">
                <div class="col-md-6 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastro de Usuário</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="pages/cadastro.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="pessoa[nome]" placeholder="Digite seu nome">
                        </div>

                        <div class="form-group">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="pessoa[sobrenome]" placeholder="Digite seu sobrenome">
                        </div>

                        <div class="form-group">
                            <label for="nascimento">Nascimento</label>
                            <input type="date" class="form-control" id="nascimento" name="pessoa[nascimento]" placeholder="Digite sua data de nascimento">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="pessoa[email]" placeholder="Digite seu e-mail">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                </form>
                </div>
            </div>


        </div>

<style>

    h1{
        margin-top: 50px;
        margin-bottom: 25px;
        color: rgb(12, 25, 80);
    }

    .card-footer {
        text-align: center;
    }

    .card-footer .btn {
        display: inline-block;
        margin: 0 auto;
    }


</style>