<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('lib/headlib') ?>
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
        <!-- BEGIN TOPBAR -->
        <?php $this->load->view('lib/header') ?>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
          <div class="row">
          
            
           
          </div>
      <!--     <div class="row">
            <div class="col-xlg-4">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-graph"></i> <strong>Financial</strong> Stock</h3>
                </div>
                <div class="panel-content widget-full widget-stock stock1">
                  <div class="tabs tabs-linetriangle">
                    <ul class="nav nav-tabs nav-4">
                      <li class="lines-3">
                        <a href="#microsoft-tab" id="microsoft" data-toggle="tab">
                        <span class="title">Microsoft</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-green">+6.214%</span>
                        </a>
                      </li>
                      <li class="active lines-3">
                        <a href="#sony-tab" id="sony" data-toggle="tab">
                        <span class="title">Sony</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-red">-8.425%</span>
                        </a>
                      </li>
                      <li class="lines-3">
                        <a href="#samsung-tab"  id="samsung" data-toggle="tab">
                        <span class="title">Samsung</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-green">+2.035%</span>
                        </a>
                      </li>
                      <li class="lines-3">
                        <a href="#apple-tab"  id="apple" data-toggle="tab">
                        <span class="title">Apple</span>
                        <span class="c-gray"><strong>23.32</strong></span>
                        <span class="c-green">+1.245%</span>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane" id="microsoft-tab">
                        <div id="stock-microsoft"></div>
                      </div>
                      <div class="tab-pane active" id="sony-tab">
                        <div id="stock-sony"></div>
                      </div>
                      <div class="tab-pane" id="samsung-tab">
                        <div id="stock-samsung"></div>
                      </div>
                      <div class="tab-pane" id="apple-tab">
                        <div id="stock-apple"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
           
          </div> -->
          <div class="row">

          </div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2017 </span>
                <span>IT KBK</span>.
                <span>All rights reserved. </span>
              </p>
             
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
</html>