
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MusicData</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

  <?php include('includes/component/navbar.php') ?>
  <?php include('includes/component/sidebar.php') ?>
  
  <div class="wrapper">
    <div class="content-wrapper">

      <section class="content"> <?php include('includes-poo/login-user.php') ?></section>

      <section class="content"> <?php include('includes-poo/red-cadastro.php') ?></section>

    </div>
  </div>

<!-- Ok, entao serao mais duas paginas, uma levando para a atualizacao de cadastro (Preciso mexer no codigo edicao.php) que tera um botao mandando para la. E mais abaixo as noticas da pessoa de acordo com a sua assinatura -->


<script src="adminLTE/plugins/jquery/jquery.min.js"></script>
<script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminLTE/plugins/chart.js/Chart.min.js"></script>
<script src="adminLTE/dist/js/adminlte.min.js"></script>


</body>
</html>

