 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Gruppo|Swanky+and+Moo+Moo" rel="stylesheet">
  <style type="text/css">
    

/* Navigation */
.navbar-default {
  background-color: #fff;
  border-color: #fff;
  padding: 10px 0px 10px 0;
  letter-spacing:1px;
  font-weight:bold;
  font-family: 'Roboto Condensed', sans-serif;
  text-transform: uppercase;
      webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    -ms-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    -o-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
}
.navbar-default {
  background-color: #fff;
  border-color: #fff;
}
.navbar-default .navbar-brand {
  color:#DDBE42; font-size:22px; letter-spacing: 2px; font-family: 'Swanky and Moo Moo', cursive; padding-top: 20px;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #DDBE42;
}
.navbar-default .navbar-text {
  color: #011034;
}
.navbar-default .navbar-nav > li > a {
  color: #011034;
  letter-spacing: 2PX;
 font-size: 16px;

}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #b40028;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #fff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #011034;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #b40028;
  background-color: #fff;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
  background-color: #fff;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #b40028;
  background-color: #fff;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #b40028;
  background-color: #fff;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #b40028;
  background-color: #fff;
}
.navbar-default .navbar-header .navbar-toggle {
  border-color: #fff;
}
.navbar-default .navbar-header .navbar-toggle:hover,
.navbar-default .navbar-header .navbar-toggle:focus {
  background-color: #fff;
}
.navbar-default .navbar-header .navbar-toggle .icon-bar {
  background-color: #011034;
}
.navbar-default .navbar-header .navbar-collapse,
.navbar-default .navbar-header .navbar-form {
  border-color: #011034;
}
.navbar-default .navbar-link {
  color: #011034;
}
.navbar-default .navbar-link:hover {
  color: #b40028;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #011034;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #b40028;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #b40028;
    background-color: #fff;
  }
}




@media only screen and (max-width:990px){
  .navbar-default .navbar-brand{ font-size:18px; letter-spacing: 1px; }
}


.dropbtn {
    background-color: #DDBE42;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #9B0E0E; color:white;text-decoration: none;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #9B0E0E;}


.navbar .collapse .navbar-nav .active a {
  margin: auto;
  color:#b40028;
  background-color: #F8F8F8;

}

.navbar .collapse .navbar-nav .active a:hover {
  margin: 0px;
  color:#9B0E0E;
  background-color: #F8F8F8;
}

<?php
$url=$_SERVER['REQUEST_URI'];
$a = array();
$a = explode('/', $url);
?>

  </style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
 <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color:#DDBE42;">अश्विनी कुमार चौबे का कार्यालय</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li id="home" class="active" ><a href="home">व्यक्तित्व</a></li>
        <li id="timeline"><a href="timeline">जीवन यात्रा</a></li>
        <li id="activity"><a href="activity">गतिविधि</a></li>
        <li id="press"><a href="press">प्रेस</a></li>
        <li id="gallery"><a href="gallery">छायांकन</a></li>
        <li id="contact"><a href="contact">संपर्क करें</a></li>
        <li>
        <div class="dropdown">
          <button class="dropbtn">भाषा</button>
            <div class="dropdown-content">
               <a href="../home">अंग्रेज़ी</a>
                <a href="home">हिंदी</a>
            </div>
        </div></li>
       
        
       
        
        
      </ul>
    </div><!-- /.navbar-collapse -->

     </div><!-- /.container-collapse -->
  </nav>


   <?php
    if($a[2] == 'home'){
        ?>
        <script type="text/javascript">
            $('#home').addClass('active');
            $('#timeline').removeClass('active');
            $('#activity').removeClass('active');
            $('#press').removeClass('active');
            $('#gallery').removeClass('active');
            $('#contact').removeClass('active');
        </script>
        <?php
    }

    if($a[2] == 'timeline'){
        ?>
        <script type="text/javascript">
            $('#home').removeClass('active');
            $('#timeline').addClass('active');
             $('#activity').removeClass('active');
            $('#press').removeClass('active');
            $('#gallery').removeClass('active');
            $('#contact').removeClass('active');
        </script>
        <?php
 }
if($a[2] == 'activity'){
        ?>
        <script type="text/javascript">
            $('#home').removeClass('active');
            $('#timeline').removeClass('active');
             $('#activity').addClass('active');
            $('#press').removeClass('active');
            $('#gallery').removeClass('active');
            $('#contact').removeClass('active');
        </script>
        <?php
 }
if($a[2] == 'press'){
        ?>
        <script type="text/javascript">
            $('#home').removeClass('active');
            $('#timeline').removeClass('active');
             $('#activity').removeClass('active');
            $('#press').addClass('active');
            $('#gallery').removeClass('active');
            $('#contact').removeClass('active');
        </script>
        <?php
 }
if($a[2] == 'gallery'){
        ?>
        <script type="text/javascript">
            $('#home').removeClass('active');
            $('#timeline').removeClass('active');
             $('#activity').removeClass('active');
            $('#press').removeClass('active');
            $('#gallery').addClass('active');
            $('#contact').removeClass('active');
           </script>
        <?php
 }
if($a[2] == 'contact'){
        ?>
        <script type="text/javascript">
            $('#home').removeClass('active');
            $('#timeline').removeClass('active');
             $('#activity').removeClass('active');
            $('#press').removeClass('active');
            $('#gallery').removeClass('active');
            $('#contact').addClass('active');
            </script>
        <?php
 }
?>