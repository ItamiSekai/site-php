<script>
$(function () {
   /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,1003], [2,845], [3,678], [4,1129], [5,1725], [6,928]],
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