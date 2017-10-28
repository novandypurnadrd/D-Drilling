  <div class="topbar">
          <div class="header-left">
            <div class="account-info">
                <h2><b>&nbsp; KBK D-Drilling.</b></h2>
              
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">

              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img src="<?php echo base_url();?>assets/global/images/avatars/avatar1.png" alt="user image">
                <span class="username"><?php echo $this->session->userdata('nameDrilling'); ?></span>
                </a>
                <ul class="dropdown-menu">
                
                  <li>
                    <a href="<?php echo base_url().'Drilling/Profile' ;?>"><i class="icon-settings"></i><span>Change Password</span></a>
                  </li>
                  <li>
                    <a href="<?php echo base_url().'Drilling/Logout' ;?>"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
              
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->