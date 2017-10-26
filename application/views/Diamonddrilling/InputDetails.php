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
            <h2><strong>Input</strong> Diamond Drilling</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Diamond Drilling</a>
                </li>
                <li class="active">Input</li>
              </ol>
            </div>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Diamonddrilling/InputDetails/InputDrillingDetails' ?>">

          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Date</strong> <small>information</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Date</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" onchange="SetValue()" value="<?php echo $dateInformation?>">
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                     
                      </div>
                       <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Shift</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="shift" name="shift">
                            <option value="">&nbsp;</option>
                            <option value="siang" <?php if($shiftInformation == "siang"){echo "selected='true'";} ?>>Siang</option>
                            <option value="malam" <?php if($shiftInformation == "malam"){echo "selected='true'";} ?>>Malam</option>
                            <option value="overshift" <?php if($shiftInformation == "overshift"){echo "selected='true'";} ?>>Over Shift</option>    
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>

           
              
                    </div>
                    <br>
                        <div class="row">
                 

                         <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Site</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="site" name="site" value="<?php echo $siteInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>" <?php if($site->id == $siteInformation){echo "selected='true'";} ?>><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                      <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Location</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="location" name="location" value="<?php echo $locationInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Location as $location): ?>
                            <option value="<?php echo $location->id ?>" class="<?php echo $location->site; ?>" <?php if($location->id == $locationInformation){echo "selected='true'";} ?>><?php echo $location->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                          <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Rig</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="rig" name="rig" value="<?php echo $rigInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->id ?>" class="<?php echo $rig->location; ?>" <?php if($rig->id == $rigInformation){echo "selected='true'";} ?>><?php echo $rig->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

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
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>DRILLING</strong> <small>DETAIL</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Hole</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="hole" name="hole" required type="text" placeholder="">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label class="col-sm-4 control-label">From</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="from" name="from" required type="text" placeholder="">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">To</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="to" name="to" required type="text" placeholder="">
                          </div>
                        </div>

                      </div>
                     <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Total</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control form-white" id="total" name="total" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                        <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Recovery</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control input-sm" id="recovery" name="recovery" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Hours</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99:99" class="form-control" placeholder="00:00:00" id="hoursfrom" name="hoursfrom">
                        </div>
                        
                      </div>
                  </div>

                        <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Hours To</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99:99" class="form-control" placeholder="00:00:00" id="hoursto" name="hoursto">
                        </div>
                        
                      </div>
                  </div>
                          <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Bit</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="bit" name="bit" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                          <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Series</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="series" name="series" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                          <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Size</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="size" name="size" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                         <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Angle</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="angle" name="angle" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                         <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="commnet" name="comment" class="form-control form-white"></textarea>
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
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </form>
          <?php $this->load->view('lib/Footer') ?>
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
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/global/js/jquery.chained.min.js"></script>
  <script type="text/javascript">
    
    $("#location").chained("#site");
    $("#rig").chained("#location");

  </script>

  </body>

  
</html>