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
            <h2><strong>Report</strong> RC Operation</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">RC Operation</a>
                </li>
                <li class="active">Report</li>
              </ol>
            </div>
          </div>
         <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Report/ViewReport' ?>">
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
                            <input type="text" class="input-sm form-control" name="start" id="start" value="<?php echo $dateInformationStart?>" placeholder="Beginning..."/>
                            <span class="input-group-addon">to</span>
                            <input type="text" class="input-sm form-control" name="end" id="end" value="<?php echo $dateInformationEnd?>" placeholder="Ending..."/>
                        </div>
                      </div> 
                     
                      </div>
                      <br>
                         <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Site</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="site" name="site" value="<?php echo $siteInformation?>">
                            <option value="all">All</option>
                            <?php foreach ($Site as $site): ?>
                            <option value="<?php echo $site->id ?>"<?php if($site->id == $siteInformation){echo "selected='true'";} ?>><?php echo $site->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>

                      <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Location</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="location" name="location" value="<?php echo $locationInformation?>">
                            <option value="all">All</option>
                            <?php foreach ($Location as $location): ?>
                            <option value="<?php echo $location->id ?>"<?php if($location->id == $locationInformation){echo "selected='true'";} ?>><?php echo $location->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                      

                          <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Rig</label>
                          <div class="col-sm-8">
                               <select class="form-control form-white" required id="rig" name="rig" onchange="SetValueDownhole()"> value="<?php echo $rigInformation?>">
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
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
    
                </div>
              </div>
            </div>
          </div>
          </form>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Report/Delete_multiple_Manpower' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>Manpower </strong> table</h3>
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
                                            <!-- <th width="10px">Action</th> -->
                                            <?php endif; ?>
                       
                        <th>Date</th>
                        <th>Shift</th>
                        <th>Position</th>
                        <th>Name</th>
                        <th>Hours From</th>
                        <th>Hours To</th>
                        <th>Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Manpower as $manpower){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $manpower->id; ?>">
                                                <label></label><center> </td>
                                      <!--  <?php //if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                     
                                                                             <a class="btn btn-xs btn-success" href="<?php //echo base_url().'Assay/Update/pageUpdate/'.$manpower->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php //endif; ?>  -->
                                         
                                            <td><?php echo $manpower->date; ?></td>
                                            <td><?php echo $manpower->shift; ?></td>
                                            <td><?php echo $manpower->position; ?></td>
                                            <td><?php echo $manpower->name; ?></td>
                                            <td><?php echo $manpower->hoursfrom; ?></td>
                                            <td><?php echo $manpower->hoursto; ?></td>
                                            <td><?php echo $manpower->comment; ?></td>
                                          
                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered" onclick="SetValueManpower()"><i class=" mdi mdi-delete"></i>Delete Manpower</button>
                                                    
                                                </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateManpowerStart" name="dateManpowerStart" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateManpowerEnd" name="dateManpowerEnd" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteManpower" name="siteManpower" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="locationManpower" name="locationManpower" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="rigManpower" name="rigManpower" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
          </form>

           <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Report/Delete_multiple_Consumable' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong> Consumable</strong> table</h3>
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
                                            <!-- <th width="10px">Action</th> -->
                                            <?php endif; ?>
                       
                        <th>Date</th>
                        <th>Consumable</th>
                        <th>Quantity</th>
                        <th>Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Consumable as $consumable){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $consumable->id; ?>">
                                                <label></label><center> </td>
                                     <!--   <?php //if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                     
                                                                             <a class="btn btn-xs btn-success" href="<?php //echo base_url().'Assay/Update/pageUpdate/'.$consumable->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php //endif; ?>  -->
                                         
                                            <td><?php echo $consumable->date; ?></td>
                                            <td><?php echo $consumable->consumable; ?></td>
                                            <td><?php echo $consumable->quantity; ?></td>
                                            <td><?php echo $consumable->comment; ?></td>
                                          
                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered" onclick="SetValueConsumable()"><i class=" mdi mdi-delete"></i>Delete Consumable</button>
                                                    
                                                </div>
               <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateConsumableStart" name="dateConsumableStart" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateConsumableEnd" name="dateConsumableEnd" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteConsumable" name="siteConsumable" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="locationConsumable" name="locationConsumable" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="rigConsumable" name="rigConsumable" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
          </form>

          <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Report/Delete_multiple_Activity' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong> Activity</strong> table</h3>
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
                                           <!--  <th width="10px">Action</th> -->
                                            <?php endif; ?>
                       
                        <th>Date</th>
                        <th>Activity</th>
                        <th>Sub Activity</th>
                        <th>Sub Sub Activity</th>
                        <th>Comment</th>
                        <th>Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Activity as $activity){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $activity->id; ?>">
                                                <label></label><center> </td>
                                      <!--  <?php //if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                   
                                                                             <a class="btn btn-xs btn-success" href="<?php //echo base_url().'Assay/Update/pageUpdate/'.$activity->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php //endif; ?> 
                                          -->
                                            <td><?php echo $activity->date; ?></td>
                                            <td><?php echo $activity->activity; ?></td>
                                            <td><?php echo $activity->subactivity; ?></td>
                                            <td><?php echo $activity->subsubactivity; ?></td>
                                            <td><?php echo $activity->comment; ?></td>
                                            <td><?php echo $activity->hours; ?></td>
                                          
                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered" onclick="SetValueActivity()"><i class=" mdi mdi-delete"></i>Delete Activity</button>
                                                    
                                                </div>
               <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateActivityStart" name="dateActivityStart" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateActivityEnd" name="dateActivityEnd" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteActivity" name="siteActivity" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="locationActivity" name="locationActivity" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="rigActivity" name="rigActivity" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
          </form>

           <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Report/Delete_multiple_Downhole' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong> Downhole</strong> table</h3>
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
                                           <!--  <th width="10px">Action</th> -->
                                            <?php endif; ?>
                       
                        <th>Date</th>
                        <th>Desciption</th>
                        <th>Type</th>
                        <th>Series</th>
                        <th>Quantity</th>
                        <th>Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Downhole as $downhole){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $downhole->id; ?>">
                                                <label></label><center> </td>
                                  <!--      <?php //if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                     
                                                                             <a class="btn btn-xs btn-success" href="<?php //echo base_url().'Assay/Update/pageUpdate/'.$downhole->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php //endif; ?> 
                                          -->
                                            <td><?php echo $downhole->date; ?></td>
                                            <td><?php echo $downhole->description; ?></td>
                                            <td><?php echo $downhole->type; ?></td>
                                            <td><?php echo $downhole->series; ?></td>
                                            <td><?php echo $downhole->quantity; ?></td>
                                            <td><?php echo $downhole->comment; ?></td>
                                          
                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered" onclick="SetValueDownhole()"><i class=" mdi mdi-delete"></i>Delete Downhole</button>
                                                    
                                                </div>
               <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateDownholeStart" name="dateDownholeStart" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateDownholeEnd" name="dateDownholeEnd" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteDownhole" name="siteDownhole" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="locationDownhole" name="locationDownhole" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="rigDownhole" name="rigDownhole" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
          </form>


          

           <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Report/Delete_multiple_Details' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong> Drilling Details</strong> table</h3>
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
                                           <!--  <th width="10px">Action</th> -->
                                            <?php endif; ?>
                       
                       <th>Date</th>
                        <th>Shift</th>
                        <th>Hole</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Total</th>
                        <th>Hours From</th>
                        <th>Hours To</th>
                        
                        <th>Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Drilling as $drilling){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $drilling->id; ?>">
                                                <label></label><center> </td>
                                   <!--     <?php //if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                  
                                                                             <a class="btn btn-xs btn-success" href="<?php //echo base_url().'Assay/Update/pageUpdate/'.$drilling->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php //endif; ?>  -->
                                         
                                            <td><?php echo $drilling->date; ?></td>
                                            <td><?php echo $drilling->shift; ?></td>
                                            <td><?php echo $drilling->hole; ?></td>
                                            <td><?php echo $drilling->from; ?></td>
                                            <td><?php echo $drilling->to; ?></td>
                                            <td><?php echo $drilling->total; ?></td>
                                            <td><?php echo $drilling->hours; ?></td>
                                            <td><?php echo $drilling->hoursto; ?></td>
                                        
                                            <td><?php echo $drilling->comment; ?></td>
                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered" onclick="SetValueDetails()"><i class=" mdi mdi-delete"></i>Delete Details</button>
                                                    
                                                </div>
               <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateDetailsStart" name="dateDetailsStart" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateDetailsEnd" name="dateDetailsEnd" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteDetails" name="siteDetails" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="locationDetails" name="locationDetails" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="rigDetails" name="rigDetails" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
          </form>
     

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
   

  <script type="text/javascript">

 

    function SetValueManpower() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");

        var manpowerDateStart = document.getElementById("dateManpowerStart");
        var manpowerDateEnd = document.getElementById("dateManpowerEnd");
        var manpowerSite = document.getElementById("siteManpower");
        var manpowerLocation = document.getElementById("locationManpower");
        var manpowerRig = document.getElementById("rigManpower");
        manpowerDateStart.value = masterDateStart.value;
        manpowerDateEnd.value = masterDateEnd.value;
        manpowerSite.value = masterSite.value;
        manpowerLocation.value = masterLocation.value;
        manpowerRig.value = masterRig.value;
        
      }

      function SetValueConsumable() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");

        var consumableDateStart = document.getElementById("dateConsumableStart");
        var consumableDateEnd = document.getElementById("dateConsumableEnd");
        var consumableSite = document.getElementById("siteConsumable");
        var consumableLocation = document.getElementById("locationConsumable");
        var consumableRig = document.getElementById("rigConsumable");
        consumableDateStart.value = masterDateStart.value;
        consumableDateEnd.value = masterDateEnd.value;
        consumableSite.value = masterSite.value;
        consumableLocation.value = masterLocation.value;
        consumableRig.value = masterRig.value;
        
      }

       function SetValueActivity() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");

        var activityDateStart = document.getElementById("dateActivityStart");
        var activityDateEnd = document.getElementById("dateActivityEnd");
        var activitySite = document.getElementById("siteActivity");
        var activityLocation = document.getElementById("locationActivity");
        var activityRig = document.getElementById("rigActivity");
        activityDateStart.value = masterDateStart.value;
        activityDateEnd.value = masterDateEnd.value;
        activitySite.value = masterSite.value;
        activityLocation.value = masterLocation.value;
        activityRig.value = masterRig.value;
        
      }

       function SetValueDownhole() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");

        var downholeDateStart = document.getElementById("dateDownholeStart");
        var downholeDateEnd = document.getElementById("dateDownholeEnd");
        var downholeSite = document.getElementById("siteDownhole");
        var downholeLocation = document.getElementById("locationDownhole");
        var downholeRig = document.getElementById("rigDownhole");
        downholeDateStart.value = masterDateStart.value;
        downholeDateEnd.value = masterDateEnd.value;
        downholeSite.value = masterSite.value;
        downholeLocation.value = masterLocation.value;
        downholeRig.value = masterRig.value;
        
      }

      function SetValueSurvey() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");

        var surveyDateStart = document.getElementById("dateSurveyStart");
        var surveyDateEnd = document.getElementById("dateSurveyEnd");
        var surveySite = document.getElementById("siteSurvey");
        var surveyLocation = document.getElementById("locationSurvey");
        var surveyRig = document.getElementById("rigSurvey");

        surveyDateStart.value = masterDateStart.value;
        surveyDateEnd.value = masterDateEnd.value;
        surveySite.value = masterSite.value;
        surveyLocation.value = masterLocation.value;
        surveyRig.value = masterRig.value;
        
      }

      function SetValueDetails() {
        var masterDateStart = document.getElementById("start");
        var masterDateEnd = document.getElementById("end");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");

        var detailsDateStart = document.getElementById("dateDetailsStart");
        var detailsDateEnd = document.getElementById("dateDetailsEnd");
        var detailsSite = document.getElementById("siteDetails");
        var detailsLocation = document.getElementById("locationDetails");
        var detailsRig = document.getElementById("rigDetails");

        detailsDateStart.value = masterDateStart.value;
        detailsDateEnd.value = masterDateEnd.value;
        detailsSite.value = masterSite.value;
        detailsLocation.value = masterLocation.value;
        detailsRig.value = masterRig.value;
        
      }

     

  </script>


  </body>

  
</html>