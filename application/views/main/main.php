<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('main');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-product-hunt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Predict</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('main');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

         <!-- Divider -->
         <hr class="sidebar-divider my">
         
      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('main/charts');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('main/tables');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $tb_karyawan['name']?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('aset/img/profile/') . $tb_karyawan['profile_image'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?=base_url('main/profile')?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
 
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
     <!-- <div class="content-2 text-center">
        <h2>LME Alumunium Price Graph</h2>
        <div id="chart_div" style="width: 100%; height: 500px; "></div>
      </div>
    </div> -->
  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 Predict. all rights reserved </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>