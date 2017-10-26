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
            <h2><strong>Maintenance</strong></h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">MAINTENANCE</a>
                </li>
                <li class="active">Table</li>
              </ol>
            </div>
          </div>
           <form class="form-horizontal" method="post" action="<?php echo base_url().'Maintenance/Table/View' ?>">
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
                               <select class="form-control form-white" required id="siteTable" name="siteTable" value="<?php echo $siteInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"<?php if($site->id == $siteInformation){echo "selected='true'";} ?>><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>

                       <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Rig</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="rigTable" name="rigTable" value="<?php echo $rigInformation?>">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->id ?>"<?php if($rig->id == $rigInformation){echo "selected='true'";} ?>><?php echo $rig->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
           
              
                    </div>
                    <br>
                     <div class="row">

                       <div class="col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20" onclick="SetValueMaintenance()">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
    
                </div>
              </div>
            </div>
          </div>
          </form>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Maintenance/Table/Delete_multiple_Maintenance' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>Maintenance </strong> table</h3>
                </div>
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <thead>
                      <tr>
                       <th width="10px"><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="checkAll" >
                                                <label></label>
                                            </div></center></th>
                                             <?php if ($this->session->userdata('roleDrilling') == "Admin") : ?>
                                            <th width="10px">Action</th>
                                            <?php endif; ?>
                       
                        <th>Plant Item</th>
                        <th>HM/SMU Start</th>
                        <th>HM/SMU Finish</th>
                        <th>Location</th>
                        <th>Comp Codes</th>
                        <th>Work Order</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th>Date Breakdown Start</th>
                        <th>Start Down Time</th>
                        <th>Finish Down Time</th>
                        <th>Total Dowm Tme</th>
                        <th>Work Codes</th>
                        <th>Delay Codes</th>
                        <th>Delay Hours</th>
                        <th>Remarks</th>
                        <th>Date Breakdown Finish</th>
                        <th>On Progress</th>
                        <th>Waiting Parts</th>
                        <th>Manpower</th>
                        <th>Outsite Repair</th>
                        <th>Waiting Tools</th>
                        <th>Waiting Decision</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Maintenance as $m){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $m->id; ?>">
                                                <label></label><center> </td>
                                       <?php if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                      <!--<a>
                                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#<?php //echo $table->id; ?>"><span class="fa fa-trash"></span>
                                      </button>
                                      </a>-->
                                                                             <a class="btn btn-xs btn-success" href="<?php echo base_url().'Assay/Update/pageUpdate/'.$m->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php endif; ?> 
                                         
                                            <td><?php echo $m->plantitem; ?></td>
                                            <td><?php echo $m->hmsustart; ?></td>
                                            <td><?php echo $m->hmsuend; ?></td>
                                            <td><?php echo $m->location; ?></td>
                                            <td><?php echo $m->compcodes; ?></td>
                                            <td><?php echo $m->workorder; ?></td>
                                            <td><?php echo $m->description; ?></td>
                                            <td><?php echo $m->action; ?></td>
                                            <td><?php echo $m->datebreakdown; ?></td>
                                            <td><?php echo $m->downtimestart; ?></td>
                                            <td><?php echo $m->downtimeend; ?></td>
                                            <td><?php echo $m->totaldowntime; ?></td>
                                            <td><?php echo $m->workcodes; ?></td>
                                            <td><?php echo $m->delaycodes; ?></td>
                                            <td><?php echo $m->delayhours; ?></td>
                                            <td><?php echo $m->remarks; ?></td>
                                            <td><?php echo $m->finishbreakdown; ?></td>
                                            <td><?php echo $m->onprogress; ?></td>
                                            <td><?php echo $m->waitingparts; ?></td>
                                            <td><?php echo $m->manpower; ?></td>
                                            <td><?php echo $m->outsiterepair; ?></td>
                                            <td><?php echo $m->waitingtools; ?></td>
                                            <td><?php echo $m->waitingdecision; ?></td>
                                       </tr>

                                       
                      <?php }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
           <div class="col-sm-6">
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered"><i class=" mdi mdi-delete" ></i>Delete</button>
                                                    
                                                </div>
                    <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off"
                             class="form-control" type="hidden" id="dateMaintenanceStart" name="dateMaintenanceStart" type="text" value="<?php echo $dateInformationStart ?>" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateMaintenanceEnd" name="dateMaintenanceEnd" value="<?php echo $dateInformationEnd ?>" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteMaintenance" name="siteMaintenance" value="<?php echo $siteInformation ?>" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
              
          
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