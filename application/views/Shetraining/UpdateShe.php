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
            <h2><strong>Input</strong> SHE</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">SHE & TRAINING</a>
                </li>
                <li class="active">Input SHE</li>
              </ol>
            </div>
          </div>
          <?php foreach ($Table as $table): ?>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputSHE/Update/'.$table->id ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>SHE</strong> <small>information</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Date</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" value="<?php echo $table->date ?>">
                              <i class="icon-calendar" ></i>
                            </div>
                          </div>
                        </div>
                     
                      </div>
                                <div class="col-md-4">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Site</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" required id="site" name="site">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"<?php if($site->id == $table->site){echo "selected=true";} ?>><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                       <div class="col-md-4">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Area</label>
                          <div class="col-sm-8">
                              <select class="form-control form-white" required id="area" name="area">
                             
                                  <option value="Office" <?php if($table->area == "Office"){echo "selected=true";} ?>>Office</option>
                                  <option value="Mess & Camp" <?php if($table->area == "Mess & Camp"){echo "selected=true";} ?>>Mess & Camp</option>
                                  <option value="Workshop" <?php if($table->area == "Workshop"){echo "selected=true";} ?>>Workshop</option>
                                  <option value="Storeroom" <?php if($table->area == "Storeroom"){echo "selected=true";} ?>>Store Room</option>
                                  <option value="Equipment" <?php if($table->area == "Equipment"){echo "selected=true";} ?>>Equipment</option>
                                  <option value="Road Access" <?php if($table->area == "Road Access"){echo "selected=true";} ?>>Road Access</option>
                                  <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->id ?>" <?php if($table->area == $rig->id){echo "selected=true";} ?>><?php echo $rig->name ?></option>
                            <?php endforeach; ?>
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>


                    </div>
                    <div class="row">
                      <div class="col-md-4">
                       
                     <div class="form-group">
                          <label class="col-sm-4 control-label">Type</label>
                          <div class="col-sm-8">
                              <select class="form-control form-white" required id="type" name="type">
                                 
                                  <option value="Fatality" <?php if($table->type == "Fatality"){echo "selected=true";} ?>>Fatality</option>
                                  <option value="Potential Fatality" <?php if($table->type == "Potential Fatality"){echo "selected=true";} ?>>Potential Fatality</option>
                                  <option value="Significant Incident" <?php if($table->type == "Significant Incident"){echo "selected=true";} ?>>Significant Incident</option>
                                  <option value="Lost Time Injury" <?php if($table->type == "Lost Time Injury"){echo "selected=true";} ?>>Lost Time Injury</option>
                                  <option value="Restricted Work Duty Injury" <?php if($table->type == "Restricted Work Duty Injury"){echo "selected=true";} ?>>Restricted Work Duty Injury</option>
                                  <option value="Medical Treatment Injury" <?php if($table->type == "Medical Treatment Injury"){echo "selected=true";} ?>>Medical Treatment Injury</option>
                                  <option value="First Aid Injury" <?php if($table->type == "First Aid Injury"){echo "selected=true";} ?>>First Aid Injury</option>
                                  <option value="Property Damage" <?php if($table->type == "Property Damage"){echo "selected=true";} ?>>Property Damage</option>
                                  <option value="Near Miss" <?php if($table->type == "Near Miss"){echo "selected=true";} ?>>Near Miss</option>    
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                     
                  
                      <div class="col-md-4">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">Involve Person</label>
                          <div class="col-sm-8">
                            <textarea rows="4" class="form-control form-white" id="involveperson" name="involveperson"> <?php echo $table->person ?></textarea>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Description</label>
                          <div class="col-sm-8">
                          <textarea rows="4" id="description" name="description" class="form-control form-white" ><?php echo $table->description ?></textarea>
                         
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

  <script type="text/javascript">
     function SetValueSHE() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("siteTable");
        var masterArea = document.getElementById("areaTable");
        var masterType = document.getElementById("typeTable");

        var sheDateStart = document.getElementById("dateSheStart");
        var sheDateEnd = document.getElementById("dateSheEnd");
        var sheSite = document.getElementById("siteShe");
        var sheArea = document.getElementById("areaShe");
        var sheType = document.getElementById("typeShe");

        sheDateStart.value = masterDateStart.value;
        sheDateEnd.value = masterDateEnd.value;
        sheSite.value = masterSite.value;
        sheArea.value = masterArea.value;
        sheType.value = masterType.value;
        
      }
  </script>

  
</html>