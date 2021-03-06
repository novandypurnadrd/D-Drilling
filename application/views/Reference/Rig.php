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
            <h2><strong>Input</strong> RIG</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Reference</a>
                </li>
                <li class="active">Rig</li>
              </ol>
            </div>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'Reference/Rig/InputRig' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>RIG</strong> <small>information</small></h3>
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

                      </div>

                         <div class="col-md-3">
                    <div class="form-group">
                          <label class="col-sm-4 control-label">Location</label>
                          <div class="col-sm-8">
                            <select class="form-control form-white" required id="location" name="location" >
                            <option value="">&nbsp;</option>
                            <?php foreach ($Location as $location): ?>
                            <option value="<?php echo $location->id ?>" class="<?php echo $location->siteRef ?>"><?php echo $location->name ?></option>
                            <?php endforeach; ?>
                                      
                                </select>
                          </div>
                        </div>

                      </div>
                          <div class="col-md-3">
                       <div class="form-group">
                          <label class="col-sm-4 control-label">Rig</label>
                          <div class="col-sm-8">
                            <input autocomplete="off"  class="form-control" id="name" name="name" required type="text" placeholder="">
                          </div>
                        </div>
                       
                      </div>
                      <div class="col-md-3">
                       <button type="submit" class="btn btn-embossed btn-primary m-r-20">Submit</button>
                        <button type="reset" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</button>
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
          
          </form>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>TABLE</strong> <small>Rig</small></h3>
                </div>
                <div class="panel-content bg-default">
                  <div class="row">
             <form class="form-horizontal" role="form" action ="<?php echo base_url('Reference/Rig/Delete_multiple'); ?>" method="post">
            <div class="col-lg-12 portlets">
              <div class="panel">
          
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

                        <th width="300px">Site</th>
                        <th width="300px">Location</th>
                        <th>Rig</th>
                  
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($Table as $table):?>
                      <tr>
                     
                          
                                  <td><center> <div class="checkbox checkbox-danger">
                                                <input type="checkbox" name="msg[]" value="<?php echo $table->id; ?>">
                                                <label></label></center> </td>

                                   <?php if ($this->session->userdata('roleDrilling') == "Admin" || $this->session->userdata('Drilling')): ?>
                                    <td class="center">
                                    <center>
                                  
                                                                             <a class="btn btn-xs btn-success" href="<?php echo base_url().'Reference/Rig/pageUpdate/'.$table->id ?>" >
                                                                            <span class="fa fa-pencil"></span>
                                       </a>
                                    </center>
                                  </td> 
                                  <?php endif; ?> 
                                  
                        <td><?php echo $table->site; ?></td>
                        <td><?php echo $table->location; ?></td>
                        <td><?php echo $table->name; ?></td>

                      </tr>
                     <div class="modal fade" id="<?php echo $table->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <h3>Are you sure? </h3>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a> <?php echo anchor('OtherSampling/AugerSample/DeleteAugerSample/'.$table->id,'<button type="button" class="btn btn-danger">Delete</button>') ?></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
              <div class="col-sm-6">
                                                 
                                                    <button type="sumbit" class="btn btn-danger btn-bordered"><i class=" mdi mdi-delete"></i>Delete</button>
                                                    
                                                </div>
            </form>
          </div>
               
        
                </div>
              </div>
            </div>
          </div>
          

     
          <?php $this->load->view('lib/footer') ?>
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

  <script type="text/javascript">
    $("#location").chained("#site");
  </script>

  
</html>