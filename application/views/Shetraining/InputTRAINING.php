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
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputTRAINING/Insert' ?>">
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
                              <input autocomplete="off" type="text" id="date" name="date" class="b-datepicker form-control form-white" required data-date-format="yyyy-mm-dd" onchange="SetValue()" >
                              <i class="icon-calendar"></i>
                            </div>
                          </div>
                        </div>
                         
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Venue</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="venue" name="venue"  type="text" placeholder="">
                          </div>
                        </div>
                     
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Training Title</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="trainingtitle" name="trainingtitle" required type="text" placeholder="">
                          </div>
                        </div>
                      <div class="form-group">
                          <label class="col-sm-4 control-label">Trainee</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="trainee" name="trainee"  type="text" placeholder="">
                          </div>
                        </div>
                      
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Instructor</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" class="form-control form-white" id="instructor" name="instructor" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>

                      <div class="col-md-4">
                       
                          
                         <div class="form-group">
                          <label class="col-sm-4 control-label">Comment</label>
                          <div class="col-sm-8">
                           <textarea rows="4" id="comment" name="comment" class="form-control form-white"></textarea>
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
           <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputTRAINING/ViewReport' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>TRAINING</strong> <small>Table</small></h3>
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

              
                    </div>
                    <br>
                     <div class="row">

                       <div class="col-md-3" style="text-align:center;">
                        <button type="submit" class="btn btn-embossed btn-primary m-r-20" onclick="SetValueSHE()">Filter</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
    
                </div>
              </div>
            </div>
          </div>
          </form>
           <form class="form-horizontal" method="post" action="<?php echo base_url().'Shetraining/InputTRAINING/Delete_multiple_Training' ?>">
           <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>Training </strong> table</h3>
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
                        <th>Training Title</th>
                        <th>Instructor</th>
                        <th>Venue</th>
                        <th>Trainee</th>
                        <th>Comment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Training as $training){?> 
                                       
                                       <tr>
                                         <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkAll" name="msg[]" value="<?php echo $training->id; ?>">
                                                <label></label><center> </td>
                                       <?php if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                      <!--<a>
                                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#<?php //echo $table->id; ?>"><span class="fa fa-trash"></span>
                                      </button>
                                      </a>-->
                                                                             <a class="btn btn-xs btn-success" href="<?php echo base_url().'Shetraining/InputTRAINING/pageUpdate/'.$training->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                                                     <?php endif; ?> 
                                         
                                            <td><?php echo $training->date; ?></td>
                                            <td><?php echo $training->trainingtitle; ?></td>
                                            <td><?php echo $training->instructor; ?></td>
                                            <td><?php echo $training->venue; ?></td>
                                            <td><?php echo $training->trainee; ?></td>
                                            <td><?php echo $training->comment; ?></td>
                                           

                                            
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
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered"><i class=" mdi mdi-delete" ></i>Delete Training</button>
                                                    
                                                </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off"
                             class="form-control" type="hidden" id="dateTrainingStart" name="dateTrainingStart" type="text" value="<?php echo $dateInformationStart ?>" placeholder="">
                          </div>
                        </div> 
                      </div>
                      <div class="col-md-1">
                       <div class="form-group">
                          <label class="col-sm-4 control-label"></label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="hidden" class="form-control" id="dateTrainingEnd" name="dateTrainingEnd" value="<?php echo $dateInformationEnd ?>" type="text" placeholder="">
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

  
</html>