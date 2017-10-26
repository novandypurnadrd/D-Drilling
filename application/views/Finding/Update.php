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
          <?php foreach ($Table as $table): ?>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Finding/Table/Update/'.$id ?>">

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
                            <?php $date = $table->date; ?>
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" onchange="SetValue()" value="<?php echo $date ?>" >
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
                            <option value="<?php echo $site->id ?>" <?php if($site->id == $table->site){echo "selected=true";} ?>><?php echo $site->name ?></option>
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
                            <option value="Hazard Report" <?php if($table->findingfrom == "Hazard Report"){echo "selected=true";} ?>>Hazard Report</option>
                            <option value="OSI" <?php if($table->findingfrom == "OSI"){echo "selected=true";} ?>>OSI</option>
                            <option value="Monthly Inspection" <?php if($table->findingfrom == "Monthly Inspection"){echo "selected=true";} ?>>Monthly Inspection</option>
                            <option value="Commite Inspection" <?php if($table->findingfrom == "Commite Inspection"){echo "selected=true";} ?>>Commite Inspection</option>
                            <option value="Audit" <?php if($table->findingfrom == "Audit"){echo "selected=true";} ?>>Audit</option>
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
                            <textarea rows="4" id="observer" name="observer" class="form-control form-white" ><?php echo $table->observer; ?></textarea>
                          </div>
                        </div>
                       
                        
                      </div>
                      <div class="col-md-4">
                       
                          <div class="form-group">
                          <label class="col-sm-2 control-label">Finding Details</label> 
                          <div class="col-sm-8">
                            <textarea rows="4" id="findingdetalis" name="findingdetalis" class="form-control form-white"><?php echo $table->findingdetails; ?></textarea>
                          </div>
                        </div>
                       
                        
                      </div>

                      <div class="col-md-3">
                       
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Procedures Preferences</label>
                          <div class="col-sm-8">
                            <textarea rows="4" id="procedurespreferences" name="procedurespreferences" class="form-control form-white"><?php echo $table->procedurespreferences; ?></textarea>
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
                            <textarea rows="3" id="personinvolved" name="personinvolved" class="form-control form-white" ><?php echo $table->personinvolved; ?></textarea>
                          </div>
                        </div>
                       
                        
                      </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label class="col-sm-4 control-label">Accountability</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="accountability" name="accountability" type="text" placeholder="" value="<?php echo $table->accountability; ?>">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">By Who</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="bywho" name="bywho" type="text" placeholder="" value="<?php echo $table->bywho; ?>">
                          </div>
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">By When</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">

                            <?php $bywhen = $table->bywhen;
                           
                              ?>
                              <input autocomplete="off" type="text" id="bywhen" name="bywhen" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" value="<?php echo $bywhen; ?>">
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
                            <textarea rows="4" id="recommendationaction" name="recommendationaction" class="form-control form-white" ><?php echo $table->bywho; ?></textarea>
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
                             <?php $completedate = $table->completedate; ?>
                              <input autocomplete="off" type="text" id="completedate" name="completedate" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" value="<?php echo $completedate; ?>">
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
                            <option value="Open" <?php if($table->status == "Open"){echo "selected=true";} ?>>Open</option>
                            <option value="Close" <?php if($table->status == "Close"){echo "selected=true";} ?>>Close</option>
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
                            <option value="Other" <?php if($table->location == "Other"){echo "selected=true";} ?>> Other</option>
                            <option value="Workshop" <?php if($table->location == "Workshop"){echo "selected=true";} ?>> Workshop</option>
                            <option value="Driling Office" <?php if($table->location == "Drilling Office"){echo "selected=true";} ?>> Drilling Office</option>
                            <option value="Store Room" <?php if($table->location == "Store Room"){echo "selected=true";} ?>> Store Room</option>
                            <option value="Road Access" <?php if($table->location == "Road Access"){echo "selected=true";} ?>> Road Access</option>
                            <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->name ?>" <?php if($table->rig == $rig->id){echo "selected=true";} ?>><?php echo $rig->name ?></option>
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
                            <option value="Design & Layout" <?php if($table->type == "Design & Layout"){echo "selected=true";} ?>>Design & Layout</option>
                            <option value="Housekeeping" <?php if($table->type == "Housekeeping"){echo "selected=true";} ?>>Housekeeping</option>
                            <option value="Work Method" <?php if($table->type == "Work Method"){echo "selected=true";} ?>>Work Method</option>
                            <option value="Traffic" <?php if($table->type == "Traffic"){echo "selected=true";} ?>>Traffic</option>
                            <option value="Fall Protection" <?php if($table->type == "Fall Protection"){echo "selected=true";} ?>>Fall Protection</option>
                            <option value="Insecure Object" <?php if($table->type == "Insecure Object"){echo "selected=true";} ?>>Insecure Object</option>
                            <option value="Tool & Equipment" <?php if($table->type == "Tool & Equipment"){echo "selected=true";} ?>>Tool & Equipment</option>
                            <option value="Unstable Ground" <?php if($table->type == "Housekeeping"){echo "selected=true";} ?>>Unstable Ground</option>
                            <option value="Fire" <?php if($table->type == "Fire"){echo "selected=true";} ?>>Fire</option>
                            <option value="Electrical" <?php if($table->type == "Electrical"){echo "selected=true";} ?>>Electrical</option>
                            <option value="Chemical Handling" <?php if($table->type == "Chemical Handling"){echo "selected=true";} ?>>Chemical Handling</option>
                            <option value="Healtd & Hygiene" <?php if($table->type == "Health & Hygiene"){echo "selected=true";} ?>>Health & Hygiene</option>
                            <option value="PPE" <?php if($table->type == "PPE"){echo "selected=true";} ?>>PPE</option>
                            <option value="Environmental" <?php if($table->type == "Environmental"){echo "selected=true";} ?>>Environmental</option>
                            <option value="Others" <?php if($table->type == "Others"){echo "selected=true";} ?>>Others</option>
                                </select>

                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                     <div class="form-group">
                          <label class="col-sm-3 control-label">Class</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="class" name="class">
                            <option value="Substandard Behavior" <?php if($table->class == "Substandard Behavior"){echo "selected=true";} ?>>Substandard Behavior</option>
                            <option value="Substandard Condition" <?php if($table->class == "Substandard Condition"){echo "selected=true";} ?>>Substandard Condition</option>
                            
                                </select>

                          </div>
                        </div>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Risk Rank</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="riskrank" name="riskrank">
                            <option value="High" <?php if($table->riskrank == "High"){echo "selected=true";} ?>>High</option>
                            <option value="Significant" <?php if($table->riskrank == "Significant"){echo "selected=true";} ?>>Significant</option>
                            <option value="Moderate" <?php if($table->riskrank == "Moderate"){echo "selected=true";} ?>>Moderate</option>
                            <option value="Low" <?php if($table->riskrank == "Low"){echo "selected=true";} ?>>Low</option>
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