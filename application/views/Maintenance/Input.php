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
            <h2><strong>Input</strong> Maintenance</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Maintenance</a>
                </li>
                <li class="active">Input</li>
              </ol>
            </div>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Maintenance/Input/Insert' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Maintenance</strong> <small>information</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Site</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" required id="site" name="site">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-sm-4 control-label">Work Order</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" id="workorder" name="workorder">
                            <option value=""></option>
                           
                                      
                                </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Action</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="action" name="action" class="form-control form-white"></textarea>
                          </div>
                        </div>
                           
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Plant Item</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" required id="plantitem" name="plantitem">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->id ?>"><?php echo $rig->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                            </div>
                          </div>
 
                    <div class="form-group">
                        <label class="col-sm-4 control-label">HM/SMU Start</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="hmsustart" name="hmsustart">
                        </div>
                        
                      </div>
                           
                      </div>

                     <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Location</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" required id="location" name="location">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                           <div class="form-group">
                        <label class="col-sm-4 control-label">HM/SMU End</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="hmsuend" name="hmsuend">
                        </div>
                        
                      </div>
                         

                      </div>
                            <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Comp. Codes</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" id="compcodes" name="compcodes">
                            <option value=""></option>
                           
                                      
                                </select>
                          </div>
                        </div>
                       
                           <div class="form-group">
                          <label class="col-sm-4 control-label">Description</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="description" name="description" class="form-control form-white"></textarea>
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
                  <h3><i class="icon-check"></i> <strong>BREAKDOWN</strong> <small>information</small></h3>
                </div>
                <div class="panel-content bg-default">
                 
                    <div class="row">
                      <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Date Breakdown</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="datebreakdown" name="datebreakdown" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd">
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                       
                        
                      </div>
                    
                      <div class="col-md-3">
                   <div class="form-group">
                        <label class="col-sm-4 control-label">Start Downtime</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="downtimestart" name="downtimestart">
                        </div>
                        
                      </div>
                      </div>
                       <div class="col-md-3">
                   <div class="form-group">
                        <label class="col-sm-4 control-label">End Downtime</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" onkeyup="totalDowntime()" placeholder="00:00" id="downtimeend" name="downtimeend">
                        </div>
                        
                      </div>
                      </div>
                        <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Total Downtime</label>
                          <div class="col-sm-5">
                            <input autocomplete="off"  class="form-control" readonly id="totaldowntime" name="totaldowntime" type="text" placeholder="">
                          </div>
                          
                          <span>hours</span>
                         
                        </div>
                       
                      </div>
                     
                    </div>
                     <div class="row">
                     
                      <div class="col-md-3">
                           <div class="form-group">
                          <label class="col-sm-4 control-label">Work Codes</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" id="workcodes" name="workcodes">
                            <option value=""></option>
                            <option value="pl">PLANNED MAINT</option>
                            <option value="bd">BREAKDOWN MAINT</option>
                                      
                                </select>
                          </div>
                        </div>
                       
                      </div>

                       <div class="col-md-3">
                           <div class="form-group">
                          <label class="col-sm-4 control-label">Delay Codes</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" id="delaycodes" name="delaycodes">
                            <option value=""></option>
                                      
                                </select>
                          </div>
                        </div>
                       
                      </div>
                     <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Delay Hours</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="delayhours" name="delayhours">
                        </div>
                        
                      </div>
                  </div>

                       <div class="col-md-3">
                           <div class="form-group">
                          <label class="col-sm-4 control-label">Remarks</label>
                          <div class="col-sm-8">
                             <select class="form-control form-white" id="remarks" name="remarks">
                            <option value=""></option>
                            <option value="continue">Continue</option>
                            <option value="done">Done</option>          
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
                  <h3><i class="icon-check"></i> <strong>BREAKDOWN</strong> <small>FINISH</small></h3>
                </div>
                <div class="panel-content bg-default">
                 
                    <div class="row">
                      <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Finish Breakdown</label>
                         <div class="col-sm-8">
                            <div class="prepend-icon">
                              <input autocomplete="off" type="text" id="datefinishbreakdown" name="datefinishbreakdown" required class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd">
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                       
                        
                      </div>
                    </div>
                <div class="row">
                  <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">On Progress</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="onprogress" name="onprogress">
                        </div>
                        
                      </div>
                  </div>

                 <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Waiting Parts</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="waitingparts" name="waitingparts">
                        </div>
                        
                      </div>
                  </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Man Power</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="manpower" name="manpower">
                        </div>
                        
                      </div>
                  </div>
                  </div>
                     
                   
                     <div class="row">
                     
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Outsite Repair</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="outsiterepair" name="outsiterepair">
                        </div>
                        
                      </div>
                  </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Waiting Tools</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="waitingtools" name="waitingtools">
                        </div>
                        
                      </div>
                  </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Waiting Decision</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99" class="form-control" placeholder="00:00" id="waitingdecision" name="waitingdecision">
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
        
        </div>
        <!-- END PAGE CONTENT -->
         
      </div>
      <!-- END MAIN CONTENT -->
  
    </section>
    <?php $this->load->view('lib/footlib') ?>
    
   
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
    
  </body>
     <script src="<?php echo base_url();?>assets/global/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
     <script type="text/javascript">
       
       function totalDowntime(){
        var start = document.getElementById('downtimestart').value;
        var end = document.getElementById('downtimeend').value;
        var total = document.getElementById('totaldowntime');

        var hours = end.split(':')[0] - start.split(':')[0];
        var minutes = end.split(':')[1] - start.split(':')[1];

        minutes = minutes.toString().lenght<2?'0'+minutes:minutes;
        if(minutes<0){
          hours--;
          minutes = 60 + minutes;
        }
        hours = hours.toString().lenght<2?'0'+hours:hours; 

        total.value = (hours+':'+minutes);

       }

     </script>

  
</html>