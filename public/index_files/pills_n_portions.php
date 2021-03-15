<!-- 
    * temp
    * hum
    * temp/hum 
 -->
      
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">today</h5>
                <h4 class="card-title">temp, hum vs time</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">push to cloud</a>
                    <a class="dropdown-item" href="#">download</a>
                    <a class="dropdown-item" href="#">share</a>
                    <a class="dropdown-item" href="#">make triggers</a>
                    <!-- <a class="dropdown-item text-danger" href="#">Remove Data</a> -->
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <!-- <canvas id="lineChartExample"></canvas> -->
                  <?php include "index_files/GoogleAPIs/line/temp_hum_time_chart.php"; ?>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">recent</h5>
                <h4 class="card-title">Humidity</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Push to cloud</a>
                    <a class="dropdown-item" href="#">download</a>
                    <a class="dropdown-item" href="#">share</a>
                    <a class="dropdown-item" href="#">make triggers</a>
                    <!-- <a class="dropdown-item text-danger" href="#">Remove Data</a> -->
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <!-- <canvas id="lineChartExampleWithNumbersAndGrid"></canvas> -->
                  <?php include "index_files/GoogleAPIs/gauge/hum_gauge_live.php"; ?>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">recent</h5>
                <h4 class="card-title">Temperature</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Push to cloud</a>
                    <a class="dropdown-item" href="#">download</a>
                    <a class="dropdown-item" href="#">share</a>
                    <a class="dropdown-item" href="#">make triggers</a>
                    <!-- <a class="dropdown-item text-danger" href="#">Remove Data</a> -->
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <!-- <canvas id="lineChartExampleWithNumbersAndGrid"></canvas> -->
                  <?php include "index_files/GoogleAPIs/gauge/temp_gauge_live.php"; ?>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          
        </div>        
      </div>