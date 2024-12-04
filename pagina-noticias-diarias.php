<?php include 'includes-poo/session.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notícias Diárias - MusicData</title>

  <link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <?php include('includes/component/navbar.php'); ?>
    <?php include('includes-poo/poo-sidebar.php'); ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Notícias Diárias</h1>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end align-items-center">
                        <a href="includes-poo/logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Notícia 1</h3>
                            </div>
                            <div class="card-body">
                                <img src="path/to/image1.jpg" alt="Imagem da Notícia 1" class="img-fluid mb-3">
                                <p>Conteúdo da notícia 1. Informações sobre eventos musicais diários, lançamentos e muito mais.</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Notícia 2</h3>
                            </div>
                            <div class="card-body">
                                <img src="path/to/image2.jpg" alt="Imagem da Notícia 2" class="img-fluid mb-3">
                                <p>Conteúdo da notícia 2. Destaques do dia no mundo da música e cultura.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Notícias em Destaque</h3>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Notícia em destaque 1</li>
                                    <li class="list-group-item">Notícia em destaque 2</li>
                                    <li class="list-group-item">Notícia em destaque 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include('includes/component/footer.php'); ?>
</div>

<script src="adminLTE/plugins/jquery/jquery.min.js"></script>
<script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminLTE/dist/js/adminlte.min.js"></script>

</body>
</html>
