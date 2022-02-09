<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--JQuery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>

  <!--ddtf js-->
  <script src="js/vendor//ddtf.js"></script>

  <!--apexcharts js-->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script src="js/customSelect.js"></script>

  <script src="js/dashboard.js"></script>

  <script>
      $(document).ready(function(){
        $('table').ddTableFilter();
      });

      var options = {
        series: [{
            name: 'analytics',
            data: [1100, 2300, 800, 3700]
        }],

        chart: {
            type: 'area',
            foreColor: '#9a9797',
            height: 300,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },

        markers: {
            size: 0,
            colors: ["#f3ab02"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 6,
            }
        },

        dataLabels: {
            enabled: false
        },

        stroke: {
            show: true,
            width: 2,
            curve: 'smooth'
        },

        fill: {
            type: 'solid'
        },
        colors: ["#f3ab02"],

        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May'],
            axisTicks: {
                show: false
            },
        },

        yaxis: {
            labels: {
                formatter: value => value>0 ? value : '0000'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector(".analyticsGraph"), options);
    chart.render();

  </script>
</body>

</html>
