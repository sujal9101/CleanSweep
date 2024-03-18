<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Upload Image</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/broom.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
  <!--header section start -->
    <div class="header_section background_bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="logo"><a href="index.html"><img src="images/WhatsApp_Image_2023-04-14_at_2.31.59_AM-removebg-preview-removebg-preview.png"></a></div>
          </div>
          <div class="col-md-9">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                </div> 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="services.html">feedback</a>
                  <a href="about.html">About</a>
                  <a href="choose.html">Results</a>
                  <a href="team.html">Team</a>
                  <a href="contact.html">Contact Us</a>
                </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
              </ul>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <!-- header section end -->
    <!-- team section start -->
    <div class="team_section layout_padding">
      <div class="container">
    <form name="cmp" id="cmp" action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <div class="row">
        <div class="col-2">
        <label for="title">Title</label><br>
        <select class="formcontrol" name="title" id="title" required>
            <option value="Mr."> Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
        </select>
        </div>
        <div class="col-4">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
        </div>
        <div class="col-6">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
        </div>
  </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-6">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        </div>
        <div class="col-6">
            <label for="phone_no">Phone.No</label>
            <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Phone.No" required>
        </div>
  </div>
</div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3" required ></textarea>
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <textarea class="form-control" name="location" id="location" rows="2" required ></textarea>
  </div>
  <div class="form-group">
    <label for="upload_images">Upload Images</label>
    <input type="file" multiple="multiple" class="form-control-file" name="images[]" id="upload_images">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
         
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
     function openNav() {
     document.getElementById("myNav").style.width = "100%";
    }
     function closeNav() {
     document.getElementById("myNav").style.width = "0%";
    }
    </script>  
</body>
</html>