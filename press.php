<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
     <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
         <meta name="keywords" content="HTML,CSS,BOOTSTRAP,PHP">
          <meta name="author" content="">
           <title>Ashwini Choubey Official Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="icon" href="logo/fvcn.png" type="image/x-icon"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
       <link rel="stylesheet" type="text/css" href="">
        <style type="text/css">
          .bg-overlay {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("logo/press-1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    
    height: 400px;
    padding-top: 200px;
    padding-right: 250px;
    padding-left: 250px;
    margin-top: 80PX;
}

.bg-overlay .heading{
  font-size:30px;
  font-weight: bold;
  letter-spacing: 2px;
  color:#9b0e0e;
  font-family: 'Roboto Condensed', sans-serif;
    
  
}
.bg-overlay .sub-heading{
  font-size:16px;
  font-weight: normal;

  letter-spacing: 2px;
  color:#fff;
  padding-right: 150px;
  padding-left:150px;
  font-family: 'Roboto Condensed', sans-serif;  
  
}


  .border-heading-left {
    background: #dadada none repeat scroll 0 0;
    display: inline-block;
    height: 3px;
    margin-left: -130px;
    position: relative;
    width: 120px;
    margin-bottom: 10PX;
    border-radius: 50%;
   
}
.border-heading-left::before {
    background: #fdb801 none repeat scroll 0 0;
    content: "";
    height: 3px;
    left: -25px;
    position: absolute;
    top: 0;
    width: 20px;
    border-radius: 50%;
   
}

.border-heading-right {
    background: #dadada none repeat scroll 0 0;
    display: inline-block;
    height: 3px;
    margin-left: 170px;
    position: relative;
    width: 120px;
    margin-bottom: 10PX;
    border-radius: 50%;
   
}
.border-heading-right::before {
    background: #fdb801 none repeat scroll 0 0;
    content: "";
    height: 3px;
    left: -25px;
    position: absolute;
    top: 0;
    width: 20px;
    border-radius: 50%;
   
}

.line-title {
  margin-bottom: 1.3em;
  font-size: 1.5em;
  text-align: center;
  display: block;
  position: relative;
  overflow: hidden;
}
.line-title:before, .line-title:after {
  content: '';
  display: inline-block;
  height: 1px;
  background: #6F7C80;
  width: 50%;
  position: relative;
  vertical-align: middle;
}
.line-title:before {
  left: -0.5em;
  margin-left: -50%;
}
.line-title:after {
  right: -0.5em;
  margin-right: -50%;
}

.jasgrid{padding:0;
margin-top: 20px;
}
.box-item {
    float: left;
    opacity: 1;
    overflow: hidden;
    position: relative;
}

.box-item img {
    width: 100%;
    height:350px;
}
.box-item a,.metat{color:#FFF;}

.box-item .box-post span.meta {
    font-family:  sans-serif;
    font-size: 12px;
    color: #fff;
    margin-top: 15px;
    display: block;
}

.box-item .box-post span.meta span {
    margin-right: 15px;
}

.box-item .box-post {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 100%);
    padding: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.box-item .box-post h2..post-title {
   font-size:8pt;
}

hr.fancy-line { 
    border: 0; 
    height: 1px; 
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
    background-image: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
    background-image: -ms-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
    background-image: -o-linear-gradient(left, rgba(0,0,0,0), rgba(215,215,215,0.75), rgba(0,0,0,0)); 
    box-shadow: 0px -2px 4px rgba(136,136,136,0.75);
}

.side-main{
  padding-top: 10px;

}

.side-main .side-one{
  height:70px;
  width:100%;
}

.side-main .side-two{
font-weight: bold;
font-family: 'Roboto', sans-serif;
font-size: 15px;
}

.article-main{
  background-color: #F2F2F2;
  padding: 20px 40px 20px 40px;
  margin-top: 20px;
}

.article-main .article{
  font-size:20px;
  font-weight: normal;
  font-family: 'Roboto', sans-serif;
  letter-spacing: 1px;
  padding-top: 20px;
 margin-left: 20px;
}

.article-main .article-des{
  font-size:13px;
  font-weight: normal;
  font-family: 'Roboto', sans-serif;
  letter-spacing: 1px;
   margin-left: 20px;
 
  color:#494949;
}

.btn{
   margin-left: 20px;
    background: #fff;
    font-weight: bold;
    border-radius: 0;
    z-index: 1;
    position: relative;
    transition: all 0.3s ease 0s;

}
.btn:before,
.btn:after{
    content: "";
    width: 10%;
    height: 2px;
    position: absolute;
    top: 50%;
    z-index: -1;
    transition: all 0.3s ease 0s;

}
.btn:before{ left: -10%; }
.btn:hover:before{ left: 0; }
.btn:after{ right: -10%; }
.btn:hover:after{ right: 0; }
.btn.red{
    border: 2px solid #fe6d6d;
    color: #fe6d6d;
}

.btn.orange{
    border: 2px solid #ee955b;
    color: #000000;
}
.btn.orange:hover,
.btn.orange:before,
.btn.orange:after{
    background: #ee955b;
}

.btn:hover{ color: #fff; }
@media only screen and (max-width: 767px){
    .btn{ margin-bottom: 20px; }
}


   .text sub{
    color:red;
    font-size: 30px;
         }
   .focus-t span {
    bottom: 36px !important;;
    color: #d74141;
    font-size: 15px;
    transition: all 0.3s ease 0s;
    z-index:1;
}
.focus-t input:focus{
  border-color: #d74141;  
}
.mar-15 .form-group .text-effect input {
    border:none;
    border-bottom:2px solid #073951 !important;
    border-radius: 0;
    position:absolute;
  bottom:0;
    border-style: none none solid;
    border-width: 0 0 2px;
    box-shadow: none;
  z-index:2;
  background-color:transparent;
  font-family: 'Roboto', sans-serif;
}
.mar-15 .form-group .text-effect .form-control:focus {
    border-bottom:2px solid #073951 !important;
    box-shadow: none;
    outline: 0 none;
  transition:0.6s;
  font-family: 'Roboto', sans-serif;
}
.mar-15 .form-group .text-effect {
    position: relative;
  height:70px;
}
.mar-15 .form-group .text-effect span {
    bottom: 3px;
    position: absolute;
  z-index:1;
}

.form-group sub{
  font-size: 30px;
  color: red;
}

.form-group .submit{
  background: #d73151;
  color: #fff;
  border: 1px solid #d73151;
  font-size:17px;
  height: 50px;
  width:100%;
  text-align: center;
  letter-spacing: 3px;
  font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  margin-top: 20px;
}

.form-group .submit:hover{
  background: #fff;
  color: #d73151;
  border: 2px solid #d73151;
  transition: 0.7s;
  font-weight: bold;

}


        </style>

     </head>
     <body>
       <?php include("inc/header.php");?>
       <?php include("inc/scroll.php");?>


       <div class="container bg-overlay">
  <div class="row text-center">
    <span class="border-heading-left"></span>
   <p class="heading">HOT OF THE PRESSES</p>
   <span class="border-heading-right"></span>
   <P class="sub-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</P>
  </div>
</div>


<div class="container">

    <div class="row">
       
      <div class="col-md-8" style="padding-bottom: 30px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <P  class="line-title" style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 0PX; margin-top: 30PX; padding-left: 20PX;">PRESS COVERAGE</P>

    </div>
        <div class="col-md-6 jasgrid">
            <div class="box-item">
                <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Featured</a>
                    </span>
                    <h2 class="post-title">
                        <a href="#">
                            Mumbai: Bridge at Grant Road station develops cracks
                        </a>
                    </h2>
                    <span class="meta">
                        <span class="metat"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                </div>
                <img src="logo/news-1.jpg" 
                class="img-responsive" atl="news">        
            </div>
          </div>
            <div class="col-md-6 jasgrid">
            <div class="box-item">
                <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Featured</a>
                    </span>
                    <h2 class="post-title">
                        <a href="#">
                            5 killed, 3 injured in landslide on Amarnath Yatra route
                        </a>
                    </h2>
                    <span class="meta">
                        <span class="metat"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                </div>
                <img src="logo/news-4.jpg" 
                class="img-responsive" atl="news">        
            </div>
          </div>
            <div class="col-md-6 jasgrid">
            <div class="box-item">
                <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Featured</a>
                    </span>
                    <h2 class="post-title">
                        <a href="#">
                           Former Malaysian PM Najib Razak charged with corruption, pleads not guilty
                        </a>
                    </h2>
                    <span class="meta">
                        <span class="metat"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                </div>
                <img src="logo/news-3.jpg" 
                class="img-responsive" atl="news">        
            </div>
          </div>
            <div class="col-md-6 jasgrid">
            <div class="box-item">
                <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Featured</a>
                    </span>
                    <h2 class="post-title">
                        <a href="#">
                           4-year-old rape survivor from Satna admitted to Delhi AIIMS
                        </a>
                    </h2>
                    <span class="meta">
                        <span class="metat"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                </div>
                <img src="logo/news-5.jpg" 
                class="img-responsive" atl="news">        
            </div>
          </div>
            <div class="col-md-6 jasgrid">
            <div class="box-item">
                <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Featured</a>
                    </span>
                    <h2 class="post-title">
                        <a href="#">
                           India paid 'very high cost' for democracy, says NITI Aayog
                        </a>
                    </h2>
                    <span class="meta">
                        <span class="metat"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                </div>
                <img src="logo/news-6.jpg" 
                class="img-responsive" atl="news">        
            </div>
          </div>
        <div class="col-md-6 jasgrid">
            <div class="box-item">
                <div class="box-post">
                    <span class="label label-success">
                        <a href="#" rel="tag">Featured</a>
                    </span>
                    <h2 class="post-title">
                        <a href="#">
                           Who is the boss of Delhi? Supreme Court to decide today
                        </a>
                    </h2>
                    <span class="meta">
                        <span class="metat"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span>
                    </span>
                </div>
                <img src="logo/news-2.jpg" 
                class="img-responsive" atl="news">        
            </div>
          </div>
            
           


          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <P  class="line-title" style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 0PX; margin-top: 30PX; padding-left: 20PX;">RECENT ARTICLES</P>

    </div>
           <!--  -------------                      ---------------
                          ARTICLE SECTION START
            -------------                      --------------- -->
    <div class="col-md-12 article-main">
      
     <span  class="" style="color: black;font-family: 'Roboto', sans-serif; margin-left: 20px;"><i class="glyphicon glyphicon-time"></i> Press Release / Sep 15, 2015</span> 
                   
      <p class="article">  Who is the boss of Delhi? Supreme Court to decide today</p>
      <p class="article-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      <a href="" class="btn btn-sm orange">see more</a>
    </div>

    <div class="col-md-12 article-main">
      
     <span  class="" style="color: black;font-family: 'Roboto', sans-serif; margin-left: 20px;"><i class="glyphicon glyphicon-time"></i> Press Release / Sep 15, 2015</span> 
                   
      <p class="article">  Who is the boss of Delhi? Supreme Court to decide today</p>
      <p class="article-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      <a href="" class="btn btn-sm orange">see more</a>
    </div>

    <div class="col-md-12 article-main">
      
     <span  class="" style="color: black;font-family: 'Roboto', sans-serif; margin-left: 20px;"><i class="glyphicon glyphicon-time"></i> Press Release / Sep 15, 2015</span> 
                   
      <p class="article">  Who is the boss of Delhi? Supreme Court to decide today</p>
      <p class="article-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      <a href="" class="btn btn-sm orange">see more</a>
    </div>

    <div class="col-md-12 article-main">
      
     <span  class="" style="color: black;font-family: 'Roboto', sans-serif; margin-left: 20px;"><i class="glyphicon glyphicon-time"></i> Press Release / Sep 15, 2015</span> 
                   
      <p class="article">  Who is the boss of Delhi? Supreme Court to decide today</p>
      <p class="article-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      <a href="" class="btn btn-sm orange">see more</a>
    </div>

    <div class="col-md-12 article-main">
      
     <span  class="" style="color: black;font-family: 'Roboto', sans-serif; margin-left: 20px;"><i class="glyphicon glyphicon-time"></i> Press Release / Sep 15, 2015</span> 
                   
      <p class="article">  Who is the boss of Delhi? Supreme Court to decide today</p>
      <p class="article-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      <a href="" class="btn btn-sm orange">see more</a>
    </div>



     <!--  -------------                      ---------------
                          ARTICLE SECTION END
            -------------                      --------------- -->
            
        
    </div>

    <div class="col-md-4">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <P  class="line-title" style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 0PX; margin-top: 30PX; padding-left: 20PX;">Enquiry For Press</P>
    </div>

     <div class="col-md-12">
      <form class="mar-15">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span >First Name</span>
                                <input type="text" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Last Name</span>
                                <input type="text" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Email</span>
                                <input type="email" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Organization</span>
                                <input type="email" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Phone no</span>
                                <input type="text" class="form-control focus-text"  maxlength="10" onkeypress="return isNumberKey(event)" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>City</span>
                                <input type="email" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>State</span>
                                <input type="text" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Postal Code</span>
                                <input type="text" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>What Would You Like To Say ?</span>
                                <input type="email" class="form-control focus-text" />
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12">
                      <div class="form-group">
                          <input type="submit" name="" class="submit">
                        </div>
                    </div>
                    
                </div>
            </form>

    </div>




       

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <P  class="line-title" style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 0PX; margin-top: 30PX; padding-left: 20PX;">Latest Insights</P>
    </div>
    <div class="col-md-12 side-main">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-6.jpg">
    </div>
    <div class="col-md-8">
      <p class="side-two">Can lawyers argue while sitting in court?</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
  </div>
  
    <div class="col-md-12 side-main">
      <hr class="fancy-line">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-5.jpg">
    </div>
    <div class="col-md-8">
      <p class="side-two">Mumbai: Bridge at Grant Road station develops cracks</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
</div>
 
    <div class="col-md-12 side-main">

      <hr class="fancy-line">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-4.jpg">
    </div>

    <div class="col-md-8">
      <p class="side-two">5 killed, 3 injured in landslide on Amarnath Yatra route</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
     </div>
      
    <div class="col-md-12 side-main">
      <hr class="fancy-line">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-3.jpg">
    </div>
    <div class="col-md-8">
      <p class="side-two">4-year-old rape survivor from Satna admitted to Delhi AIIMS</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
      </div>
       
    <div class="col-md-12 side-main">
      <hr class="fancy-line">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-2.jpg">
    </div>
    <div class="col-md-8">
      <p class="side-two"> India paid 'very high cost' for democracy, says NITI Aayog</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
      </div>
      
    <div class="col-md-12 side-main">
       <hr class="fancy-line">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-1.jpg">
    </div>
    <div class="col-md-8">
      <p class="side-two">Can lawyers argue while sitting in court?</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
     </div>
      
    <div class="col-md-12 side-main">
      <hr class="fancy-line">
    <div class="col-md-4">
      <img class="img-responsive side-one" alt="comu" src="logo/news-6.jpg">
    </div>
    <div class="col-md-8">
      <p class="side-two">Can lawyers argue while sitting in court?</p>
     
          <span  class=" side-three" style="color: black;font-family: 'Roboto', sans-serif;"><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> 
    </div>
    </div>

   

    </div>



</div> <!-- /container -->
  </div>

       
       <?php include("inc/footer.php");?>
     </body>
     </html>

      <script type="text/javascript">
       $('.focus-text').focus(function(){
       $(this).closest('div').addClass('focus-t');
       });
       $('.focus-text').blur(function(){
      if($('.focus-text').length > 0 && $('.focus-text').val() != ''){
      $(this).closest('div').addClass('focus-t');    
      }
      else{
      $(this).closest('div').removeClass('focus-t');  
      }
      });

       function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
        return true;
      }  

     </script>