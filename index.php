<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MusicData</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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

<script>
$(function () {
   /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10093], [2,8456], [3,4678], [4,13129], [5,17725], [6,9278]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'Janeiro'], [2,'Fevereiro'], [3,'Março'], [4,'Abril'], [5,'Maio'], [6,'Junho']]
      }
    })
    /* END BAR CHART */
  })
</script>
</body>
</html>

