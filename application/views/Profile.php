<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('lib/headlib') ?>
     <link href="<?php echo base_url();?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/global/plugins/input-text/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
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
        <!-- BEGIN TOPBAR -->
        <?php $this->load->view('lib/Header') ?>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="header">
            <h2><strong>User</strong> Profile</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Update</a>
                </li>
                <li class="active">Profile</li>
              </ol>
            </div>
          </div>
          <form class="form-horizontal"  method="post" action="<?php echo base_url().'Drilling/UpdateProfile' ?>">
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Change</strong> <small>Password</small></h3>
                </div>
                <div class="panel-content bg-default">
                    <div class="row">
                      <div class="col-md-4">
                        <img src="<?php echo base_url();?>assets/global/images/avatars/avatar1_big.png" class="img-responsive" alt="">
                      </div>
                      <div class="col-md-6">
                        <br>
                        <br>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Username</label>
                          <div class="col-sm-8">
                            <input class="form-control" readonly required autocomplete="off" id="username" name="username" value="<?php echo $this->session->userdata('usernameDrilling') ?>" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Display Name</label>
                          <div class="col-sm-8">
                            <input class="form-control form-white" required autocomplete="off" id="name" name="name" value="<?php echo $this->session->userdata('nameDrilling') ?>" />
                          </div>
                        </div>
                           <div class="form-group">
                          <label class="col-sm-4 control-label">Current Password</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="password" required="" class="form-control form-white" id="current" name="current" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">New Password</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="password" required="" class="form-control form-white" id="new" name="new" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Re-type Password</label>
                          <div class="col-sm-8">
                            <input autocomplete="off" type="password" required="" class="form-control form-white" id="confirm" name="confirm" placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr />
                    <div class="row">
                      <div class="col-md-12" style="text-align:center;">
                        <button type="submit" id="update" class="btn btn-embossed btn-primary m-r-20">Update</button>
                        <a href="<?php echo base_url().'Dashboard' ?>" class="cancel btn btn-embossed btn-default m-b-10 m-r-0">Cancel</a>
                      </div>
                   <?php echo $this->session->flashdata('message');?>
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
    
   <script src="<?php echo base_url();?>assets/global/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
 
  <script type="text/javascript">

       function myFunction() {
            var button = document.getElementById("submit");
            var x = document.getElementById("password");

            if (x.value == "<?php echo $this->session->userdata('passwordDrilling') ?>") {
              submit.disabled = false;
            }
            else {
              submit.disabled = true;
            }
          }

          function checker() {
            var update = document.getElementById("update");
            var newpass = document.getElementById("new");
            var confirm = document.getElementById("confirm");

            if (newpass.value == confirm.value) {
              update.disabled = false;
            }
            else {
              update.disabled = true;
            }
          }

  </script>

  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/global/js/jquery.chained.min.js"></script>


  </body>
</html>