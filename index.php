<?php
// Write initial Info
if (!file_exists("me.txt")) {
    exec("cat /proc/cpuinfo > me.txt");
}
if (isset($_REQUEST['s-remoteurl'])) {
    file_put_contents("remoteurl.txt", $_REQUEST['s-remoteurl']);
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Raspberry | Ruvenss</title>
    <meta name="author" content="Ruvenss">
    <meta name="keywords" content="raspberry, pi, minimal, elegant, clear, debian, linux, dark, circle, terminal, personal, orange, htop">
    <meta name="description" content="Raspberry PI Console Menu">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <meta http-equiv="X-UA-Compatible" content="edge"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="styles/basic.css" />
	  <link rel="stylesheet" type="text/css" media="only screen and (max-width: 1024px)" href="styles/mobile.css" />
    <!--JavaScript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43489798-1', 'LOCALHOST');
        ga('send', 'pageview');
    </script>
    <style>
       #overlay{
           position: fixed;
           z-index: 1000;
           left: 0;
           top: 100px;
           width: 25px;
           height: 20px;
           border-radius: 0 20px 20px 0;
           padding: 5px;
           background: rgba(242, 101, 34, 0.8);
           overflow: hidden;

           -webkit-transition: all 0.5s ease;
           -moz-transition: all 0.5s ease;
           -ms-transition: all 0.5s ease;
           -o-transition: all 0.5s ease;
           transition: all 0.5s ease;
       }
       #overlay:hover{
           width: 200px;
       }
       #overlay a{
           text-shadow: none;
           margin-left: 5px;
           font-size: 14px;
           width: 100%;
           float: left;
           color: #fff;
       }
    </style>
</head>
<body>
  <div id="background"></div>
  <div id="texture"></div>
  <div class="fullcontent">
      <div class="menuwrapper">
        <div class="mainmenu">
  			  <div class="menucenter">
  				  <div class="logo-container">
<!-- ==========  Logo ========== -->
  					  <img class="logo" alt="logotype" src="img/logo.png">
<!-- ==========  User's photo ========== -->
  					  <img class="photo" alt="photo" src="img/photo.jpg">
  				  </div>
                    <h3 class="mobile bcolor">
                        <a href="">Raspberry PI</a>
                    </h3>
                    <div class="mobile">Console</div>
  			  </div>
			  <div class="menu-items">
<!-- ========  Copy this block for add new menu item: ======== -->
                  <!--Start block-->
          <a href="pages/raspberry.php" class="menuitem">
					  <i class="icon-list-alt"></i>
					  <div class="menu-title">About</div>
				  </a>
                  <!--end-->

				  <a href="pages/login.php" class="menuitem">
					  <i class="icon-user"></i>
					  <div class="menu-title">Login</div>
				  </a>

          <a href="pages/raspberry_data.php" class="menuitem">
					  <i class="icon-tasks"></i>
					  <div class="menu-title">System</div>
				  </a>
          <a href="pages/remote.php" class="menuitem">
            <i class="icon-download-alt"></i>
            <div class="menu-title">Remote Access</div>
          </a>
          <a href="pages/tools.php" class="menuitem">
					  <i class="icon-briefcase"></i>
					  <div class="menu-title">Tools</div>
				  </a>
          <a href="pages/poweroff.php" class="menuitem">
            <i class="icon-power-off"></i>
            <div class="menu-title">Power OFF</div>
          </a>
          <a href="pages/reboot.php" class="menuitem">
            <i class="icon-refresh"></i>
            <div class="menu-title">Reboot</div>
          </a>
			  </div>


              <div id="linecontainer" class="select-about">
                  <div class="linewrapper">
                      <div class="overwrapper">
                          <div class="colorlines large">
                              <div class="colorlines small"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

        <div class="page">

<!-- ======== AJAX Loader message ======== -->
            <div class="loader">
                <div class="label glcolor">
                    <div class="spin"></div>
                    Loading, please wait...
                </div>
            </div>

            <div class="wrapper">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
<!-- ======== Dynamic AJAX content placed here ======== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</body>
</html>