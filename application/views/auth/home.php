
  <!-- Script Graph -->

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Contract', 'BID', 'OFFER'],
        ['Cash', 1687, 1650],
        ['3', 1726, 1750],
        ['D1', 1809, 1850],
        ['D2', 1880, 1840]
      ]);

      var options = {
        title: 'Prices Graph (US$ Per Tonne)',
        curveType: 'function',
        legend: {
          position: 'bottom'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
  </script>

  <!-- Chart 2 -->

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Date', 'Price'],
        ['22 Juli', 1651],
        ['23 Juli', 1661],
        ['24 Juli', 1654],
        ['27 Juli', 1661],
        ['28 Juli', 1671],
        ['29 Juli', 1687],
        ['30 Juli', 1685]
      ]);

      var options = {
        title: 'Price (US$ Per Tonne)',
        hAxis: {
          title: 'Date',
          titleTextStyle: {
            color: '#333'
          }
        },
        vAxis: {
          minValue: 0
        }
      };

      var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>

  <title>Predict</title>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('auth')?>">
        <span>P</span>
        Predict
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
           <!--  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a> -->
            <a class="nav-item btn btn-light text-dark tombol" href="<?= base_url('auth/login')?>">Sign In</a>
          </div>
        </div> 
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4">Predict <span >Forecasting System</></h1>
          <p class="lead">An easy way to predict the price of aluminum </p>
        </div>
        <div class="col">
          <img src="aset/img/undraw_growth_analytics_8btt.svg" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Content -->

  <div class="container">
    <div class="content">
      <div class="content-1">
        <h2>TRADING SUMMARY</h2>
        <div class="row">
          <div class="col">
            <h3>LME Alumunium Official Prices, US$ Per Tonne</h3>
            <!-- table -->
            <table class="table table-bordered mt-4">
              <thead class="thead-dark text-center">
                <tr>
                  <th scope="col">CONTRACT</th>
                  <th scope="col">BID (US$/TONNE)</th>
                  <th scope="col">OFFER (US$/TONNE)</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <th scope="row" class="bg-danger text-light text-left">Cash</th>
                  <td>1687.00</td>
                  <td>1687.00</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-danger text-light text-left">3-months</th>
                  <td>1726.00</td>
                  <td>1726.00</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-danger text-light text-left">Dec 21</th>
                  <td>1809.00</td>
                  <td>1726.00</td>
                </tr>
                <tr>
                  <th scope="row" class="bg-danger text-light text-left">Dec 22</th>
                  <td>1880.00</td>
                  <td>1726.00</td>
                </tr>
              </tbody>
            </table>
            <!-- akhir table -->
          </div>
          <div class="col">
            <h3>LME Alumunium Official Prices Graph</h3>
            <div id="curve_chart" style="width: 600px; height: 300px; margin:auto;"></div>
          </div>
        </div>
      </div>
  <!-- Akhir Content -->

     <!-- Footer -->
   <footer class="sticky-footer">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 Predict. all rights reserved </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
