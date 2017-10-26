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
            <h2><strong>Input</strong> Finding</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Finding</a>
                </li>
                <li class="active">Input</li>
              </ol>
            </div>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Finding/Input/InputFinding' ?>">

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
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" onchange="SetValue()" >
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                     
                      </div>
                       <div class="col-md-4">
                       
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Site</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="site" name="site" value="<?php echo $siteInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>

                      </div>
                      <div class="col-md-3">
                      </div>

                      <div class="col-md-3">
                             <div class="form-group">
                          <label class="col-sm-4 control-label">Finding From</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="findingfrom" name="findingfrom">
                            <option value="Hazard Report">Hazard Report</option>
                            <option value="OSI">OSI</option>
                            <option value="Hazard Report">Monthly Inspection</option>
                            <option value="Commite Report">Commite Inspection</option>
                            <option value="Audit">Audit</option>
                                </select>

                          </div>
                        </div>
                      </div>

           
              
                    </div>
                    <br>
                        <div class="row">
                 

                         <div class="col-md-3">
                       
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Observer</label>
                          <div class="col-sm-8">
                            <textarea rows="4" id="observer" name="observer" class="form-control form-white"></textarea>
                          </div>
                        </div>
                       
                        
                      </div>
                      <div class="col-md-4">
                       
                          <div class="form-group">
                          <label class="col-sm-2 control-label">Finding Details</label> 
                          <div class="col-sm-8">
                            <textarea rows="4" id="findingdetalis" name="findingdetalis" class="form-control form-white"></textarea>
                          </div>
                        </div>
                       
                        
                      </div>

                      <div class="col-md-3">
                       
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Procedures Preferences</label>
                          <div class="col-sm-8">
                            <textarea rows="4" id="procedurespreferences" name="procedurespreferences" class="form-control form-white"></textarea>
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
                          <label class="col-sm-4 control-label">Person Involved</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="personinvolved" name="personinvolved" class="form-control form-white"></textarea>
                          </div>
                        </div>
                       
                        
                      </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label class="col-sm-4 control-label">Accountability</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="accountability" name="accountability" type="text" placeholder="">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">By Who</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="bywho" name="bywho" type="text" placeholder="">
                          </div>
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">By When</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="bywhen" name="bywhen" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd">
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                     
                      </div>


                        
                    </div>

                    <div class="row">
                       <div class="col-md-6">
                       
                         <div class="form-group">
                          <label class="col-sm-2 control-label">Recommendation Action</label>
                          <div class="col-sm-10">
                            <textarea rows="4" id="recommendationaction" name="recommendationaction" class="form-control form-white"></textarea>
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
                  <h3><i class="icon-check"></i> <strong>Finding</strong> <small>DETAIL</small></h3>
                </div>
                <div class="panel-content bg-default">
                <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Complete Date</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="completedate" name="completedate" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd">
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                     
                      </div>

                         <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="status" name="status">
                            <option value="Open">Open</option>
                            <option value="Close">Close</option>
                                </select>

                          </div>
                        </div>
                    </div>

                </div>
                    <div class="row">
                         <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Location</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="location" name="location">
                            <option value="">&nbsp;</option>
                            <option value="Other"> Other</option>
                            <option value="Workshop"> Workshop</option>
                            <option value="Driling Office"> Drilling Office</option>
                            <option value="Store Room"> Store Room</option>
                            <option value="Road Access"> Road Access</option>
                            <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->name ?>"><?php echo $rig->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                    <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-3 control-label">Type</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="type" name="type">
                            <option value="Design & Layout">Design & Layout</option>
                            <option value="Housekeeping">Housekeeping</option>
                            <option value="Work Method">Work Method</option>
                            <option value="Traffic">Traffic</option>
                            <option value="Fall Protection">Fall Protection</option>
                            <option value="Insecure Object">Insecure Object</option>
                            <option value="Fall Protection">Tool & Equipment</option>
                            <option value="Unstable Ground">Unstable Ground</option>
                            <option value="Fire">Fire</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Chemical Handling">Chemical Handling</option>
                            <option value="Healtd & Hygiene">Health & Hygiene</option>
                            <option value="PPE">PPE</option>
                            <option value="Environmental">Environmental</option>
                            <option value="Others">Others</option>
                                </select>

                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                     <div class="form-group">
                          <label class="col-sm-3 control-label">Class</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="class" name="class">
                            <option value="Substandard Behavior">Substandard Behavior</option>
                            <option value="Substandard Condition">Substandard Condition</option>
                            
                                </select>

                          </div>
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Risk Rank</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="riskrank" name="riskrank">
                            <option value="High">High</option>
                            <option value="Significant">Significant</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Low">Low</option>
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
  </body>

  
</html>