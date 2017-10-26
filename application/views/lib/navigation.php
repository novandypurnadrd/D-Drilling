<!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            <img src="<?php echo base_url();?>assets/global/images/KBKLogo.gif"  height="35" width="130" alt="logo" class="logo-default">
          </h1>
        </div>
        <div class="sidebar-inner">
          <ul class="nav nav-sidebar">
           <!-- DASHBOARD -->
          <?php if ($main == "Dashboard") { ?>
          <li class=" nav-active active">
          <?php }else { ?>
          <li class=" nav">
          <?php } ?>
          <a href="<?php echo base_url();?>Drilling"><i class="icon-home"></i><span>Dashboard</span></a>
        </li>
      <!-- END DASHBOARD -->

      <?php if ($main == "InputShetraining") { ?>
          <li class="nav-parent nav-active active">
        <?php }else { ?>
          <li class="nav-parent">
        <?php } ?>
         <a href="#"><i class="icon-screen-desktop"></i><span>SHE & TRAINING</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url().'Shetraining/InputSHE'?>"> SHE</a></li>
                <li><a href="<?php echo base_url().'Shetraining/InputTRAINING'?>"> TRAINING</a></li>
                <li><a href="page-builder/index.html"> Report</a></li>
              </ul>
          </li>

          <?php if ($main == "Finding") { ?>
          <li class="nav-parent nav-active active">
        <?php }else { ?>
          <li class="nav-parent">
        <?php } ?>
         <a href="#"><i class="icon-screen-desktop"></i><span>FINDING</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url().'Finding/Input'?>"> Input</a></li>
                <li><a href="<?php echo base_url().'Finding/Table'?>"> Table</a></li>
                <li><a href="<?php echo base_url().'Finding/Report'?>"> Report</a></li>
              </ul>
          </li>

          <?php if ($main == "InputDiamonddrilling") { ?>
          <li class="nav-parent nav-active active">
        <?php }else { ?>
          <li class="nav-parent">
        <?php } ?>
         <a href="#"><i class="icon-bar-chart"></i><span>DIAMOND DRILLING OPERATION</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url().'Diamonddrilling/Input'?>"> Diamond Drilling</a></li>
                <li><a href="<?php echo base_url().'Diamonddrilling/InputDetails'?>"> Drilling Details</a></li>
                <li><a href="<?php echo base_url().'Diamonddrilling/Report'?>"> Report</a></li>
              </ul>

         <?php if ($main == "InputRCoperation") { ?>
          <li class="nav-parent nav-active active">
        <?php }else { ?>
          <li class="nav-parent">
        <?php } ?>
         <a href=""><i class="icon-note"></i><span>RC OPERATION</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url().'RCoperation/Input'?>"> RC Operation</a></li>
                <li><a href="<?php echo base_url().'RCoperation/InputDetails'?>"> RC Details</a></li>
                <li><a href="<?php echo base_url().'RCoperation/Report'?>"> Report</a></li>
              
              </ul>

              <?php if ($main == "Maintenance") { ?>
          <li class="nav-parent nav-active active">
        <?php }else { ?>
          <li class="nav-parent">
        <?php } ?>
             <a href="#"><i class="icon-rounded-options-settings"></i><span>MAINTENANCE</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url().'Maintenance/Input'?>"> Input Data</a></li>
                <li><a href="<?php echo base_url().'Maintenance/Table'?>"> Table</a></li>
          
              </ul>

            <?php if ($main == "Reference") { ?>
          <li class="nav-parent nav-active active">
        <?php }else { ?>
          <li class="nav-parent">
        <?php } ?>
            <a href="#"><i class="icon-puzzle"></i><span>REFERENCE</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="<?php echo base_url().'Reference/Site'?>"> Site</a></li>
                <li><a href="<?php echo base_url().'Reference/Location'?>"> Location</a></li>
                <li><a href="<?php echo base_url().'Reference/Rig'?>"> Rig</a></li>
              </ul>
                <li class="nav-parent">
              <a href="#"><i class="icon-layers"></i><span>ANNUAL REPORT</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
              
              </ul>
            </li>
           
          
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->