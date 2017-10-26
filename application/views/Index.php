<!DOCTYPE html>
<html>
    <head>
      <?php $this->load->view('lib/headlib') ?>
    </head>
    <body class="sidebar-top account2" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <i class="user-img icons-faces-users-03"></i>
            <div class="account-info">
                <h1>Database Drilling.</h1>
              
            </div>
            <div class="account-form">
                <form class="form-signin" role="form" action="<?php echo base_url().'Login' ?>" accept-charset="utf-8" method="post">
                    <h3><strong>Sign in</strSSong> to your account</h3>
                    <div class="append-icon">
                        <input type="text" name="username" id="username" class="form-control form-white username" placeholder="Username" required>
                        <i class="icon-user"></i>
                    </div>
                    <div class="append-icon m-b-20">
                        <input type="password" name="password" class="form-control form-white password" placeholder="Password" required>
                        <i class="icon-lock"></i>
                    </div>
                     <div class="social-or-login center" style="color:red;">
                                                    <span class="bigger-60" style="color:red;"><?php
                                                        echo "".$message;
                                                    ?>
                                                        
                                                    </span>
                                                </div>
                    <button type="submit" id="submit-form" class="btn btn-lg btn-dark btn-rounded ladda-button" data-style="expand-left">Sign In</button>
                  
                    
                </form>
               
            </div>
            
        </div>
        <!-- END LOCKSCREEN BOX -->
        <?php $this->load->view('lib/footer') ?>
        <?php $this->load->view('lib/footlib') ?>
    </body>
</html>