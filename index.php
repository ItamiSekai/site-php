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
<div class="wrapper">

  <?php include('libraries/aula02.php') ?>
  <?php include('includes/component/navbar.php') ?>
  <?php include('includes/component/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php include('includes/component/breadcrumb.php') ?>

    <!-- Main content -->
    <section class="content">
    <?php include('includes/component/default-box.php') ?>
    </section>

    <section class="content"><?php include('includes/component/graphic.php')?></section>

    <section class="content"><?php include('includes/component/table.php')?></section>
  </div>


  <?php include('includes/component/footer.php') ?>
</div>



<script src="adminLTE/plugins/jquery/jquery.min.js"></script>
<script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminLTE/plugins/chart.js/Chart.min.js"></script>
<script src="adminLTE/plugins/flot/jquery.flot.js"></script>
<script src="adminLTE/plugins/flot/plugins/jquery.flot.resize.js"></script>
<script src="adminLTE/plugins/flot/plugins/jquery.flot.pie.js"></script>
<script src="adminLTE/dist/js/adminlte.min.js"></script>

<?php include('includes/component/bar-chart.php') ?>
</body>
</html>

