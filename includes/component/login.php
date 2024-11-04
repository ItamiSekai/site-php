
        <div class="wrapper">


            <div class="row">
                <div class="col-md-6 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastro de Usuário</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="pages-cruds/cadastro.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="usuario[nome]" placeholder="Digite seu nome">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="usuario[email]" placeholder="Digite seu e-mail">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="text" class="form-control" id="email" name="usuario[senha]" placeholder="Digite sua senha">
                        </div>

                        <div class="form-group">
                            <label for="tipo_assinatura">Tipo de Assinatura</label>
                            <input type="text" class="form-control" id="tipo_assinatura" name="assinatura[tipo_assinatura]" placeholder="Digite sua assinatura">
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

    .h1-form{
        font-size: 20px;
        color: rgb(12, 25, 80);
    }

    .card-footer {
        text-align: center;
    }


    
</style>

</html>