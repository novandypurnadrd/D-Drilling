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
            <h2><strong>Input</strong> RC Drilling</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Diamond Drilling</a>
                </li>
                <li class="active">Input</li>
              </ol>
            </div>
          </div>
         
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
                            <option value="<?php echo $site->id ?>"<?php if($site->id == $siteInformation){echo "selected='true'";} ?>><?php echo $site->name ?></option>
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
            <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Input/InputManpower' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>MANPOWER</strong> <small>information</small></h3>
                </div>
                <div class="panel-content bg-default">
                 
                    <div class="row">
                      <div class="col-md-3">
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Position</label>
                          <div class="col-sm-8">
                              <select class="form-control form-white" required id="position" name="position" onchange="SetValue()">
                                  <option value="driller">Driller</option>
                                  <option value="assdriller">Ass. Driller</option>
                                  <option value="offsider">Offsider</option>
                                      
                                </select>

                          </div>
                        </div>
                       
                        
                      </div>
                      <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Name</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="name" name="name" required type="text" onkeyup="SetValue()" placeholder="">
                          </div>
                        </div>
                       
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Hours From</label>
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

                     
                    </div>
                     <div class="row">
                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="comment" name="comment" class="form-control form-white"></textarea>
                          </div>
                        </div>
                       
                      </div>
                        <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateManpower" name="dateManpower" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="shiftManpower" name="shiftManpower" type="text" placeholder="">
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
                      
                    </div>
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
          <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Input/InputConsumable' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>CONSUMABLE</strong> <small>INFORMATION</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Consumable</label>
                          <div class="col-sm-8">
                              <select class="form-control form-white" required id="consumable" name="consumable" onchange="SetValueConsumable()">
                                  <option value="crp">CRP</option>
                                  <option value="trol">TROL</option>
                                  <option value="gel">GEL</option>
                                  <option value="polymer">POLYMER</option>
                                  <option value="fuel">FUEL</option>
                                  <option value="hydrolicoil">HYDROLIC OIL</option>
                                  <option value="rodgrease">ROD GREASE</option>     
                                </select>

                          </div>
                        </div>
                  
                      
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="commentconsumable" name="commentconsumable" class="form-control form-white"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Quantity</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="quantity" name="quantity" required type="text" placeholder="" onkeypress="SetValueConsumable()">
                          </div>
                        </div>
                       
                      </div>

                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateConsumable" name="dateConsumable" type="text" placeholder="">
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
                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="shiftConsumable" name="shiftConsumable" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                 
                    </div>
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

          <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Input/InputActivity' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>DETAIL</strong> <small>ACTIVITY</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-3">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">Activity</label>
                          <div class="col-sm-8">
                          <select class="form-control form-white" required id="activity" name="activity" onchange="SetValueDetalActivity()">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Activity as $activity): ?>
                            <option value="<?php echo $activity->id ?>"><?php echo $activity->activity ?></option>
                            <?php endforeach; ?>
                                      
                          </select>

                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="commentactivity" name="commentactivity" class="form-control form-white" ></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Sub Activity</label>
                          <div class="col-sm-8">
                          <select class="form-control form-white" required id="subactivity" name="subactivity" >
                            <option value="">&nbsp;</option>
                            <?php foreach ($Subactivity as $sub): ?>
                            <option value="<?php echo $sub->id ?>" class="<?php echo $sub->activity; ?>"><?php echo $sub->subactivity ?></option>
                            <?php endforeach; ?>
                                      
                          </select>

                          </div>
                        </div>
                        
                      </div>

                        <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Sub Sub Activity</label>
                          <div class="col-sm-8">
                          <select class="form-control form-white" required id="subsubactivity" name="subsubactivity">
                            <option value="">&nbsp;</option>
                            <?php foreach ($Subsubactivity as $subsub): ?>
                            <option value="<?php echo $subsub->id ?>" class="<?php echo $subsub->subactivity; ?>" ><?php echo $subsub->subsubactivity ?></option>
                            <?php endforeach; ?>
                                      
                          </select>

                          </div>
                        </div>
                        
                      </div>
                  <div class="col-md-3">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Hours</label>
                        <div class="col-sm-8">
                        <input type="text" data-mask="99:99:99" class="form-control" placeholder="00:00:00" id="hours" name="hours">
                        </div>
                        
                      </div>
                  </div>

                  <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateActivity" name="dateActivity" type="text" placeholder="">
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
                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="shiftActivity" name="shiftActivity" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                 
                    </div>
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

          <form class="form-horizontal" method="post" action="<?php echo base_url().'RCoperation/Input/InputDownhole' ?>">
            <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>DOWNHOLE</strong> <small>GEAR</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Description</label>
                          <div class="col-sm-8">
                                <select class="form-control form-white" required id="description" name="description" onchange="SetValueDownhole()">
                                  <option value="topsub">Top Sub</option>
                                  <option value="adaptortube">Adaptor Tube</option>
                                  <option value="airscreenbottomload">Air Screen Bottom Load</option>
                                  <option value="circlip">Circlip</option>
                                  <option value="plungerurethane">Plunger Urethane</option>
                                  <option value="spring">Spring</option>
                                  <option value="springseat">Spring Seat</option>
                                  <option value="maeupringsteel">Mae Up Ring Steel</option>
                                  <option value="vitonmakeupring">Viton Make Up Ring</option>
                                  <option value="distributor">Distributor</option>
                                  <option value="sampletube">Sample Tube</option>
                                  <option value="monthsampletube">Month Sample Tube</option>
                                  <option value="innercylinder">Inner Cylinder</option>
                                  <option value="piston">Piston</option>
                                  <option value="pistoncase">Piston Case</option>
                                  <option value="pistonretainingring">Piston Retaining Ring</option>
                                  <option value="bushdrivesub">Bush Drive Sub</option>
                                  <option value="bitretainingring">Bit Retaining Ring</option>
                                  <option value="shroudharderner">Shroud Harderner</option>
                                  <option value="driveshaft">Drive Shaft</option>

                                  <option value="rod">Rod</option>
                                  <option value="bit">Bit</option>
                                  <option value="other">Other</option>
                                  
                                      
                                </select>
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                            <textarea rows="3" id="commentdownhole" name="commentdownhole" class="form-control form-white" ></textarea>
                          </div>
                        </div>
                      </div>
                  
                 
                        <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Quantity</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="quantity" name="quantity" type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateDownhole" name="dateDownhole" type="text" placeholder="">
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
                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="shiftDownhole" name="shiftDownhole" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                 
                    </div>
                      <div class="row">

                       <div class="col-md-12" style="text-align:center;">
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20" onclick="SetValueDownhole()">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </form>

     <!--        <form class="form-horizontal" method="post" action="<?php //echo base_url().'RCoperation/Input/InputSurvey' ?>">
            <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Survey</strong> <small>DATA</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                     
                
                     <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Hole</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" required id="hole" name="hole" type="text" placeholder="" onkeypress="SetValueSurvey()">
                          </div>
                        </div>
                       
                      </div>
                        <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Depth</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control" id="depth" name="depth" type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                         <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Dip</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control" id="dip" name="dip" type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                         <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Azimuth</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control" id="azimuth" name="azimuth" type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateSurvey" name="dateSurvey" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                    
                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="siteSurvey" name="siteSurvey" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                         <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="locationSurvey" name="locationSurvey" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="rigSurvey" name="rigSurvey" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                       <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="shiftSurvey" name="shiftSurvey" type="text" placeholder="">
                          </div>
                        </div> 
                      </div>
                 
                    </div>
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
          </form> -->
          
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

   

    function SetValue() {
        var masterDate = document.getElementById("date");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");
        var masterShift = document.getElementById("shift")

        var manpowerDate = document.getElementById("dateManpower");
        var manpowerSite = document.getElementById("siteManpower");
        var manpowerLocation = document.getElementById("locationManpower");
        var manpowerRig = document.getElementById("rigManpower");
        var manpowerShift = document.getElementById("shiftManpower");

        manpowerDate.value = masterDate.value;
        manpowerSite.value = masterSite.value;
        manpowerLocation.value = masterLocation.value;
        manpowerRig.value = masterRig.value;
        manpowerShift.value = masterShift.value;
        
      }

      function SetValueConsumable() {
        var masterDate = document.getElementById("date");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");
        var masterShift = document.getElementById("shift")

        var consumableDate = document.getElementById("dateConsumable");
        var consumableSite = document.getElementById("siteConsumable");
        var consumableLocation = document.getElementById("locationConsumable");
        var consumableRig = document.getElementById("rigConsumable");
        var consumableShift = document.getElementById("shiftConsumable");

        consumableDate.value = masterDate.value;
        consumableSite.value = masterSite.value;
        consumableLocation.value = masterLocation.value;
        consumableRig.value = masterRig.value;
        consumableShift.value = masterShift.value;
      }

       function SetValueDownhole() {
        var masterDate = document.getElementById("date");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");
        var masterShift = document.getElementById("shift")

        var downholeDate = document.getElementById("dateDownhole");
        var downholeSite = document.getElementById("siteDownhole");
        var downholeLocation = document.getElementById("locationDownhole");
        var downholeRig = document.getElementById("rigDownhole");
        var downholeShift = document.getElementById("shiftDownhole");

        downholeDate.value = masterDate.value;
        downholeSite.value = masterSite.value;
        downholeLocation.value = masterLocation.value;
        downholeRig.value = masterRig.value;
        downholeShift.value = masterShift.value;
      }

      function SetValueDetalActivity() {
        var masterDate = document.getElementById("date");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");
        var masterShift = document.getElementById("shift")

        var activityDate = document.getElementById("dateActivity");
        var activitySite = document.getElementById("siteActivity");
        var activityLocation = document.getElementById("locationActivity");
        var activityRig = document.getElementById("rigActivity");
        var activityShift = document.getElementById("shiftActivity");

        activityDate.value = masterDate.value;
        activitySite.value = masterSite.value;
        activityLocation.value = masterLocation.value;
        activityRig.value = masterRig.value;
        activityShift.value = masterShift.value;
      }

      function SetValueSurvey() {
        var masterDate = document.getElementById("date");
        var masterSite = document.getElementById("site");
        var masterLocation = document.getElementById("location");
        var masterRig = document.getElementById("rig");
        var masterShift = document.getElementById("shift")

        var surveyDate = document.getElementById("dateSurvey");
        var surveySite = document.getElementById("siteSurvey");
        var surveyLocation = document.getElementById("locationSurvey");
        var surveyRig = document.getElementById("rigSurvey");
        var surveyShift = document.getElementById("shiftSurvey");

        surveyDate.value = masterDate.value;
        surveySite.value = masterSite.value;
        surveyLocation.value = masterLocation.value;
        surveyRig.value = masterRig.value;
        surveyShift.value = masterShift.value;
      }

  </script>
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/global/js/jquery.chained.min.js"></script>
  <script type="text/javascript">
    
    $("#location").chained("#site");
    $("#rig").chained("#location");

    $("#subactivity").chained("#activity");
    $("#subsubactivity").chained("#subactivity");

  </script>
  </body>
  
</html>