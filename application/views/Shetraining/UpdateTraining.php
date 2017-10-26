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
       <!-- BEGIN PAGE STYLE -->
    <link href="<?php echo base_url();?>assets/global/plugins/datatables/dataTables.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
        <!-- BEGIN TOPBAR -->
        <?php $this->load->view('lib/header') ?>
        <!-- END TOPBAR -->
    <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="header">
            <h2><strong>Input</strong>TRAINING</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">SHE & TRAINING</a>
                </li>
                <li class="active">Input TRAINING</li>
              </ol>
            </div>
          </div>
          <?php foreach ($Table as $table): ?>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputTRAINING/Update/'.$table->id ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>TRAINING</strong> <small>INFORMATION</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Date</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" onchange="SetValue()" value="<?php echo $table->date ?>" >
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                         
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Venue</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="venue" name="venue"  type="text" placeholder="" value="<?php echo $table->venue ?>" >
                          </div>
                        </div>
                     
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Training Title</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="trainingtitle" name="trainingtitle" required type="text" placeholder="" value="<?php echo $table->trainingtitle ?>">
                          </div>
                        </div>
                      <div class="form-group">
                          <label class="col-sm-4 control-label">Trainee</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="trainee" name="trainee"  type="text" placeholder="" value="<?php echo $table->trainee ?>">
                          </div>
                        </div>
                      
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Instructor</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="instructor" name="instructor" required type="text" placeholder="" value="<?php echo $table->instructor ?>">
                          </div>
                        </div>
                       
                      </div>

                      <div class="col-md-4">
                       
                          
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                           <textarea rows="4" id="comment" name="comment" class="form-control form-white"><?php echo $table->comment ?></textarea>
                          </div>
                        </div>
                      </div>
                 
                    </div>
                </div>
              </div>
            </div>
          </div>
 
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20">Update</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </form>
        <?php endforeach; ?>
          
        </div>
        <!-- END PAGE CONTENT -->
         <?php $this->load->view('lib/Footer') ?>
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