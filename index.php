<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php
  if(isset($_GET['content'])){
    $content = $_GET['content'];
    switch($content){
      case 'home.php':
          $tabtitle = "HOME";
      break;
      case 'service_provider.php':
          $tabtitle = "SERVICE PROVIDER";
      break;
      case 'testimonials.php':
          $tabtitle = "TESTIMONIALS";
      break;
      case 'sales.php':
          $tabtitle = "SALES";
      break;
      case 'subscription_setting.php':
          $tabtitle = "SUBSCRIPTION SETTINGS";
      break;
      case 'services.php':
          $tabtitle = "SERVICES";
      break;
    }
  }else{ $content = 'home.php'; $tabtitle = "HOME";}
?>
<head>
  <?php include('header.php'); ?>
</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">
      <?php include('menu.php'); ?>
    </header>
    <!-- End Header -->

    <!-- Start Content -->      
    <?php include('content/'.$content);?>
    <!-- End Content -->


    <!-- Start Footer -->
    <footer>
      <?php include('footer.php'); ?>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher" id = "login-icon" data-toggle = "popover" data-placement = "right" title = "Welcome Admin! "><span class="glyphicon glyphicon-user"></span ></a>
    <h4>Profile</h4>

      
      <div class = "row">
        <img src="images/member-02.jpg" alt="..." class="img-circle" style = "width:80px; height:80px">
         
      </div>
        <span style = "text-align:center !important">Hello Ariana</span>
         <!-- Divider -->
        <div class="hr1 margin-60"></div>
        <div class = "row" style = "width: 221px; text-align:right">
          <button class="btn btn-primary btn-xs" id = "btn-update-profile" data-toggle="tooltip" data-placement="top" title="Update Profile" >
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          </button>
          <button class="btn btn-primary btn-xs" id = "btn-changepwd" data-toggle="tooltip" data-placement="top" title="Change Password" >
            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
          </button>
        </div>
      <!-- Divider -->
        <div class="hr1 margin-60"></div>
  </div>
  <!-- modal enter security password -->
    <div class="modal fade" id = "modal_profile" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Update Profile</h4>
          </div>
          <div class="modal-body">
            <div class = "row">
              <div class = "col-xs-9">
                <form>  
                    <div class = "form-group">
                      <label for = "f_name">First Name :</label>
                      <input type = "text" class = "form-control" id = "f_name" name = "f_name" placeholder="First Name"/>
                    </div>
                    <div class = "form-group">
                      <label for = "l_name">Last Name :</label>
                      <input type = "text" class = "form-control" id = "l_name" name = "l_name" placeholder="Last Name"/>
                    </div>
                    <div class = "form-group">
                      <label for = "bday">Birthday :</label>
                      <input type = "text" class = "form-control" id = "bday" name = "bday" placeholder="Birthday"/>
                    </div>
                    <div class = "form-group">
                      <label for = "contact">Contact # :</label>
                      <input type = "text" class = "form-control" id = "contact" name = "contact" placeholder="Contact Number"/>
                    </div>
                </form>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save Changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal -->
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>

</html>