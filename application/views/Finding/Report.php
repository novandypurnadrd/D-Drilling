<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('lib/headlib') ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([

      
           
            ['Status', 'Count'],
            ['<?php echo "Open"?>', <?php echo $Open ?>],
            ['<?php echo "Close"?>', <?php echo $Close ?>],
         
        ]);

        var options = {
          title: '',
         
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart2);
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([

      
           
            ['Class', 'Count'],
            ['<?php echo "Substandard Behaviour"?>', <?php echo $Behaviour ?>],
            ['<?php echo "Substandard Condition"?>', <?php echo $Condition ?>],
         
        ]);

        var options = {
          title: '',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart3);
      function drawChart3() {

        var data = google.visualization.arrayToDataTable([

      
           
            ['Risk Rank', 'Count'],
            ['<?php echo "High"?>', <?php echo $High ?>],
            ['<?php echo "Significant"?>', <?php echo $Significant ?>],
            ['<?php echo "Moderate"?>', <?php echo $Moderate ?>],
            ['<?php echo "Low"?>', <?php echo $Low ?>],
         
        ]);

        var options = {
          title: '',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart4);
      function drawChart4() {

        var data = google.visualization.arrayToDataTable([

      
           
            ['Lokasi Bahaya', 'Total'],
            
            <?php foreach ($LokasiBahayaDistinct as $lokasi): ?>
              <?php $totcount = 0; ?>
              <?php foreach ($LokasiBahaya as $lokasia): ?>
                <?php if($lokasi->location == $lokasia->location): ?>
                  <?php $totcount = $totcount+1; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            ['<?php echo $lokasi->location ?>', <?php echo $totcount ?>],
            <?php endforeach ?>
        ]);
         var view = new google.visualization.DataView(data);

     

        var options = {
          title: '',
          hAxis: {title: 'Lokasi Bahaya', titleTextStyle: {color: 'blue'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("bar-chart"));

        chart.draw(view, options);
      }

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart5);
      function drawChart5() {

        var data = google.visualization.arrayToDataTable([

      
           
            ['Jenis Bahaya', 'Total'],
            
            <?php foreach ($JenisBahayaDistinct as $type): ?>
              <?php $totcount = 0; ?>
              <?php foreach ($JenisBahaya as $typea): ?>
                <?php if($type->type == $typea->type): ?>
                  <?php $totcount = $totcount+1; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            ['<?php echo $type->type ?>', <?php echo $totcount ?>],
            <?php endforeach ?>
        ]);
         var view = new google.visualization.DataView(data);

     

        var options = {
          title: '',
          hAxis: {title: 'Jenis Bahaya', titleTextStyle: {color: 'blue'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("bar-chart1"));

        chart.draw(view, options);
      }

    </script>
  </head>
 
  <body class="sidebar-top fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
       <?php $this->load->view('lib/navigation') ?>
      <!-- END SIDEBAR -->
      <div class="main-content">
       <!-- BEGIN PAGE STYLE -->
    <link href="<?php echo base_url();?>assets/global/plugins/datatables/dataTables.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
        <!-- BEGIN TOPBAR -->
        <?php $this->load->view('lib/header') ?>
        <!-- END TOPBAR -->
    <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          
        
          <div class="header">
            <h2><strong>Finding</strong></h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Finding</a>
                </li>
                <li class="active">Report</li>
              </ol>
            </div>
          </div>
           <form class="form-horizontal" method="post" action="<?php echo base_url().'Finding/Report/Filter' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Date</strong> <small>information</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                    <div class="col-md-3 col-sm-3 col-lg-3">
                    </div>
                      <div class="col-md-3">
                       <div class="form-group">
                        <label class="form-label">Range Selection</label>
                        <div class="input-daterange b-datepicker input-group" id="datepicker">
                            <input type="text" class="input-sm form-control" name="start" id="start" required value="<?php echo $dateInformationStart?>" placeholder="Beginning..."/>
                            <span class="input-group-addon">to</span>
                            <input type="text" class="input-sm form-control" name="end" id="end" required value="<?php echo $dateInformationEnd?>" placeholder="Ending..."/>
                        </div>
                      </div> 
                     
                      </div>
                      <br>
                         <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Site</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="site" name="site" value="<?php echo $siteInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"<?php if($site->id == $siteInformation){echo "selected='true'";} ?>><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>

                     
           
              
                    </div>
                    <br>
                     <div class="row">

                       <div class="col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
    
                </div>
              </div>
            </div>
          </div>
          </form>

          <div class="row">
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title">Pie Chart Finding By Status</h4>

                        <div class="widget-toolbar">
                          <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                          </a>
                        </div>
                      </div>

                      <div class="widget-body">
                        <div class="widget-main" style="">
                          <div id="piechart" style="width: 400px; height: 250px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title">Pie Chart Finding By Class</h4>

                        <div class="widget-toolbar">
                          <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                          </a>
                        </div>
                      </div>

                      <div class="widget-body">
                        <div class="widget-main" style="">
                          <div id="piechart2" style="width: 400px; height: 250px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title">Pie Chart Finding By Risk Rank</h4>

                        <div class="widget-toolbar">
                          <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                          </a>
                        </div>
                      </div>

                      <div class="widget-body">
                        <div class="widget-main" style="">
                          <div id="piechart3" style="width: 400px; height: 250px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

       
                  <div class="row">
           
             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title">Coloumn Chart Finding By Lokasi Bahaya</h4>

                        <div class="widget-toolbar">
                          <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                          </a>
                        </div>
                      </div>

                      <div class="widget-body">
                        <div class="widget-main" style="">
                          <div id="bar-chart" style="width: 700px; height: 250px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>

             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title">Coloumn Chart Finding By Jenis Bahaya</h4>

                        <div class="widget-toolbar">
                          <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                          </a>
                        </div>
                      </div>

                      <div class="widget-body">
                        <div class="widget-main" style="">
                          <div id="bar-chart1" style="width: 700px; height: 250px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
   
          </div>
              
          
        </div>
        <!-- END PAGE CONTENT -->
        
      </div>
      <!-- END MAIN CONTENT -->
     
    </section>
   
    
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
    <?php $this->load->view('lib/footlib') ?>
  </body>

  <script type="text/javascript">
     function SetValueMaintenance() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("siteTable");

        var maintenanceDateStart = document.getElementById("dateSheStart");
        var maintenanceDateEnd = document.getElementById("dateSheEnd");
        var maintenanceSite = document.getElementById("siteShe");

        maintenaceDateStart.value = masterDateStart.value;
        maintenanceDateEnd.value = masterDateEnd.value;
        maintenanceSite.value = masterSite.value;
        
      }
  </script>

  
</html>