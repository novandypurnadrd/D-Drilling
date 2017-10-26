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
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputSHE/Insert' ?>">
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
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd">
                              <i class="icon-calendar"></i>
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
                            <option value="<?php echo $site->id ?>"><?php echo $site->name ?></option>
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
                             
                                  <option value="Office">Office</option>
                                  <option value="Mess & Camp">Mess & Camp</option>
                                  <option value="Workshop">Workshop</option>
                                  <option value="Storeroom">Store Room</option>
                                  <option value="Equipment">Equipment</option>
                                  <option value="Road Access">Road Access</option>
                                  <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->id ?>"><?php echo $rig->name ?></option>
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
                                 
                                  <option value="Fatality">Fatality</option>
                                  <option value="Potential Fatality">Potential Fatality</option>
                                  <option value="Significant Incident">Significant Incident</option>
                                  <option value="Lost Time Injury">Lost Time Injury</option>
                                  <option value="Restricted Work Duty Injury">Restricted Work Duty Injury</option>
                                  <option value="Medical Treatment Injury">Medical Treatment Injury</option>
                                  <option value="First Aid Injury">First Aid Injury</option>
                                  <option value="Property Damage">Property Damage</option>
                                  <option value="Near Miss">Near Miss</option>    
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                     
                  
                      <div class="col-md-4">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">Involve Person</label>
                          <div class="col-sm-8">
                            <textarea rows="4" class="form-control form-white" id="involveperson" name="involveperson"></textarea>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Description</label>
                          <div class="col-sm-8">
                          <textarea rows="4" id="description" name="description" class="form-control form-white"></textarea>
                         
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
          <div class="header">
            <h2><strong>Table</strong> SHE</h2>
            
          </div>
           <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputSHE/ViewReport' ?>">
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
                            <option value="All">All</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"<?php if($site->id == $siteInformation){echo "selected='true'";} ?>><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>

                      <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Area</label>
                          <div class="col-sm-8">
                              <select class="form-control form-white" required id="areaTable" name="areaTable">
                                  <option value="All"<?php if($areaInformation=="All"){echo "selected='true'";}?>>All</option>
                                  <option value="Office"<?php if($areaInformation=="Office"){echo "selected='true'";}?>>Office</option>
                                  <option value="Mess & Camp"<?php if($areaInformation=="Mess & Camp"){echo "selected='true'";}?>>Mess & Camp</option>
                                  <option value="Workshop"<?php if($areaInformation=="Workshop"){echo "selected='true'";}?>>Workshop</option>
                                  <option value="Storeroom"<?php if($areaInformation=="Storeroom"){echo "selected='true'";}?>>Store Room</option>
                                  <option value="Equipment"<?php if($areaInformation=="Equipment"){echo "selected='true'";}?>>Equipment</option>
                                  <option value="Road Access"<?php if($areaInformation=="Road Access"){echo "selected='true'";}?>>Road Access</option>
                                  <?php foreach ($Rig as $rig): ?>
                            <option value="<?php echo $rig->name ?>"<?php if($areaInformation==$rig->name){echo "selected='true'";}?>><?php echo $rig->name ?></option>
                            <?php endforeach; ?>
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                      

                        <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Type</label>
                          <div class="col-sm-8">
                              <select class="form-control form-white" required id="typeTable" name="typeTable">
                                  <option value="All"<?php if($typeInformation=="All"){echo "selected='true'";}?>>All</option>
                                  <option value="Fatality"<?php if($typeInformation=="Fatality"){echo "selected='true'";}?>>Fatality</option>
                                  <option value="Potential Fatality"<?php if($typeInformation=="Potential Fatality"){echo "selected='true'";}?>>Potential Fatality</option>
                                  <option value="Significant Incident"<?php if($typeInformation=="Significant Incident"){echo "selected='true'";}?>>Significant Incident</option>
                                  <option value="Lost Time Injury"<?php if($typeInformation=="Lost Time Injury"){echo "selected='true'";}?>>Lost Time Injury</option>
                                  <option value="Restricted Work Duty Injury"<?php if($typeInformation=="Restricted Work Duty Injury"){echo "selected='true'";}?>>Restricted Work Duty Injury</option>
                                  <option value="Medical Treatment Injury"<?php if($typeInformation=="Medical Treatment Injury"){echo "selected='true'";}?>>Medical Treatment Injury</option>
                                  <option value="First Aid Injury"<?php if($typeInformation=="First Aid Injury"){echo "selected='true'";}?>>First Aid Injury</option>
                                  <option value="Property Damage"<?php if($typeInformation=="Property Damage"){echo "selected='true'";}?>>Property Damage</option>
                                  <option value="Near Miss"<?php if($typeInformation=="Near Miss"){echo "selected='true'";}?>>Near Miss</option>    
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
           
              
                    </div>
                    <br>
                     <div class="row">

                       <div class="col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20" onclick="SetValueSHE()">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
    
                </div>
              </div>
            </div>
          </div>
          </form>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputSHE/Delete_multiple_SHE' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>SHE </strong> table</h3>
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
                       
                        <th>Date</th>
                        <th>Site</th>
                        <th>Area</th>
                        <th>Type</th>
                        <th>Person</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($She as $she){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $she->id; ?>">
                                                <label></label><center> </td>
                                       <?php if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                      <!--<a>
                                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#<?php //echo $table->id; ?>"><span class="fa fa-trash"></span>
                                      </button>
                                      </a>-->
                                                                             <a class="btn btn-xs btn-success" href="<?php echo base_url().'Shetraining/InputSHE/pageUpdate/'.$she->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php endif; ?> 
                                         
                                            <td><?php echo $she->date; ?></td>
                                            <td><?php echo $she->site; ?></td>
                                            <td><?php echo $she->area; ?></td>
                                            <td><?php echo $she->type; ?></td>
                                            <td><?php echo $she->person; ?></td>
                                            <td><?php echo $she->description; ?></td>
                                           

                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered"><i class=" mdi mdi-delete" ></i>Delete SHE</button>
                                                    
                                                </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off"
                             class="form-control" type="hidden" id="dateSheStart" name="dateSheStart" type="text" value="<?php echo $dateInformationStart ?>" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateSheEnd" name="dateSheEnd" value="<?php echo $dateInformationEnd ?>" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteShe" name="siteShe" value="<?php echo $siteInformation ?>" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="areaShe" name="areaShe" value="<?php echo $areaInformation ?>" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="typeShe" name="typeShe" value="<?php echo $typeInformation ?>" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
          </form>
          
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