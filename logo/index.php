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
 <link href="https://fonts.googleapis.com/css?family=Sigmar+One" rel="stylesheet">
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
       <link rel="stylesheet" type="text/css" href="">
       <style type="text/css">

         
.image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url("logo/profile-5.jpg");background-repeat: no-repeat;background-size: cover;background-position: 80% 20%;color: #fff;
    padding-top: 110px;padding-bottom:110px;background-attachment: fixed;
 }
 
  .image-aboutus-sm-banner {
    background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url("logo/profile-5.jpg");
    background-repeat: no-repeat;background-size: cover;background-position: 80% 20%;color: #fff;
    padding-top: 30px;padding-bottom:30px;   
   }
.lg-text {
    font-size:52px;font-weight: 600;text-transform: none;color:#fff;
}
.image-aboutus-para {
    color:#fff;
}
.about{
  font-size:42px;font-weight: normal;text-transform: none;color:#000000;text-align: center;
    font-family: 'Roboto Condensed', sans-serif;letter-spacing: 3px;
}

.about-des{
  font-size:15px;font-weight: normal;text-transform: none;color:#777777;text-align: center;
    font-family: 'Roboto Condensed', sans-serif;letter-spacing: 1px;padding-right: 200px;padding-left: 200px;padding-top: 20px;

}

.video iframe{
  background-color: #fff;

}


@media only screen and (max-width:990px){
    .about-des{ padding:10px; }

    .video{ margin-top: 20px; }
    .video-h{padding-bottom: 0px;margin-bottom: -20px; }
    

.image-aboutus-banner {
    /*background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://images.pexels.com/photos/556962/pexels-photo-556962.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");*/
    background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url("logo/profile-5.jpg");
    background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;color: #fff;
    padding-top: 150px;padding-bottom:150px; background-attachment: fixed; height:340px;
 }

    /*.serviceBox .title{
      font-size: 5px;
      letter-spacing: 0px;
    }
    .serviceBox .date{
      font-size: 12px;
    }*/
}



.caption{
  background: #fff;padding: 20px;text-align: center;height:160px;
}

.caption .heading{
  font-size: 18px;color: #000000;letter-spacing: 2px;font-weight: bold;
}

.caption .sub-heading{
  font-size: 14px;color: #000000;letter-spacing: 2px;
}


.demo{ background: #fff; }
.serviceBox{
    padding: 20px 15px 15px 15px;background: #fff;border: 1px solid #eee;border-bottom-color: #428ef8;
    border-top-color: #428ef8;text-align: center;position: relative;transition: all 0.5s ease 0s;     
}
.serviceBox:hover{ border: 1px solid #428ef8; }
.serviceBox:before,
.serviceBox:after{
    content: "";width: 70%;height: 5px;background: #428ef8;opacity: 0;position: absolute; top: -3px;left: 35%;transform: translateX(-50%);transition: all 0.5s ease 0s;
}
.serviceBox:hover:before,
.serviceBox:hover:after{
    opacity: 1;
    left: 50%;
}
.serviceBox:after{
    top: auto;
    bottom: -3px;
}

.serviceBox .title{ 
 
  color: black;
  font-weight: normal;
  font-size: 15px;
  font-family: 'Roboto', sans-serif; 
  letter-spacing: 2PX;
 float: left; padding-left: 10px;


 /*  margin: 0;
  float:left;
  padding: 0px;*/
 

}
.serviceBox .description{
    font-size: 13px;
    color: #7a7a7a;
    line-height: 25px;
    margin: 0;
    transition: all 0.5s ease 0s;
    float: left;
    text-align: justify;
    padding-left: 10px;
}
 
 .serviceBox .date{
  font-size: 12px;
  color: #7a7a7a;
  float:right;
 }



@media only screen and (max-width:990px){
    .serviceBox{ margin-bottom: 30px; }
}



hr {
       display: block;
       position: relative;
       padding: 0;
       margin: 8px auto;
       height: 0;
       width: 90%;
       max-height: 0;
       font-size: 1px;
       line-height: 0;
       clear: both;
       border: none;
       border-top: 1px solid #aaaaaa;
       border-bottom: 1px solid #ffffff;
    }
    .services-title-border {
    background: #dadada none repeat scroll 0 0;
    display: inline-block;
    height: 1px;
    margin-left: 25px;
    position: relative;
    width: 120px;
    margin-bottom: 30PX;
}
.services-title-border::before {
    background: #fdb801 none repeat scroll 0 0;
    content: "";
    height: 1px;
    left: -25px;
    position: absolute;
    top: 0;
    width: 20px;
}

.services-title-border-heading {
    background: #dadada none repeat scroll 0 0;
    display: inline-block;
    height: 3px;
    margin-left: 25px;
    position: relative;
    width: 140px;
    margin-bottom: 10PX;
    border-radius: 20px;
}
.services-title-border-heading::before {
    background: #d73151 none repeat scroll 0 0;
    content: "";
    height: 3px;
    left: -45px;
    position: absolute;
    top: 0;
    width: 40px;
    border-radius: 20px;
}
.serviceBox .fa-twitter{
    width: 65px;
    height: 65px;
    line-height: 65px;
    border-radius: 50%;
    background: #26A0D3;
    margin: 0 auto 20px;
    font-size: 36px;
    color: #fff;
}

.serviceBox .fa-facebook{
    width: 65px;
    height: 65px;
    line-height: 65px;
    border-radius: 50%;
    background: #4359AC;
    margin: 0 auto 20px;
    font-size: 36px;
    color: #fff;
}
.serviceBox .fa-google-plus{
    width: 65px;
    height: 65px;
    line-height: 65px;
    border-radius: 50%;
    background: #C23A2A;
    margin: 0 auto 20px;
    font-size: 36px;
    color: #fff;
}




/* promo box*/
.promoBox {
  display: inline-block;
  position: relative;
  margin: 5px;
  padding: 10px 5px 10px 5px;
  width: 300px;
   border: 5px solid #D03B3F;
  
    overflow: hidden;

  background: #ffffff;
  background: -moz-linear-gradient(-45deg, #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6));
  background: -webkit-linear-gradient(-45deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
  background: -o-linear-gradient(-45deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
  background: -ms-linear-gradient(-45deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
  background: linear-gradient(165deg, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=1 );

  -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
      box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
}

.promoBox h4 { 
  font-size: 25px; 
  margin: 0; 
  padding: 0 35% 10px 0; 
  line-height: 25px; 
  border-bottom: 1px solid #ddd;

}
.promoBox p { font-size: 12px; }

.promoBox.success-box {
  background: #9dd53a;
  background: -moz-linear-gradient(-45deg, #9dd53a 0%, #a1d54f 50%, #80c217 51%, #7cbc0a 100%);
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#9dd53a), color-stop(50%,#a1d54f), color-stop(51%,#80c217), color-stop(100%,#7cbc0a));
  background: -webkit-linear-gradient(-45deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
  background: -o-linear-gradient(-45deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
  background: -ms-linear-gradient(-45deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
  background: linear-gradient(165deg, #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=1 );
  border-color: #9dd53a;
  color: #fff;

}
.promoBox.success-box h4 { color: #4d690b; border-color: #ccfc5a; }
.donate{
  font-family: 'Roboto', sans-serif;
  color: #D03B3F;
  font-size: 22px;
  letter-spacing: 4px
  font-weight:bolder;
}
.sub-donate{
  font-family: 'Roboto', sans-serif;
  color: #D03B3F;
  font-size: 14px;
  letter-spacing: 2px
  font-weight:bolder;

}

.testimonial{
    margin: 10px 15px;
    padding: 0 0 20px 20px;
    position: relative;
}
.pic{
    position: absolute;
    bottom: 0;
    left: 0;
    background: #fff;
    width: 80px;
    height: 80px;
    padding: 2px;
    z-index: 2;
    border: 5px solid #6c6c6c;
}
.pic img{
    margin: 0 auto;
    text-align: center;
    height:66px; width:90px; position:center center;

}
.testimonial-review{
    border: 5px solid #6c6c6c;
    font-size: 17.5px;
    margin: 0 0 20px;
    padding: 10px 20px;
}
.testimonial-review p{
    font-style: italic;
    font-weight: normal;
    line-height: 24px;
    padding: 9px 0 0 49px;
    color: #7c7c7c;
    font-size: 15px;
    position: relative;
}
.testimonial-review p:before{
    content: "\f10d";
    font-family: 'FontAwesome';
    position: absolute;
    left:0;
    top:10px;
    font-size: 30px;
}
.testimonial-title{
    padding: 0 0 0 48px;
    font-size: 15px;
    color:#7c7c7c;
}
.testimonial-title a{
    color:#dc005a;
    font-size: 15px;
}
.owl-theme .owl-controls{
    margin-top: 30px;
}
.owl-theme .owl-controls .owl-page span{
    background: #3e3e3e;
    display: block;
    height: 8px;
    margin: 5px 2.5px;
    width: 30px;
    border-radius: 0;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #dc005a;
}

.link{
    display: inline-block;
    padding: 7px 10px;
    font-size: 20px;
    color: #0a393d;
    text-transform: uppercase;
    position: relative;
    transition: all 0.3s ease 0s;
}
.link:hover{ color: #0a393d; }
.link:before,
.link:after{
    content: "";
    width: 0;
    height: 2px;
    background: #2b9eb3;
    position: absolute;
    top: 0;
    left: 50%;
    transition: all 0.3s ease 0s;
}
.link:after{
    top: auto;
    bottom: 0;
}
.link:hover:before,
.link:hover:after{
    width: 100%;
    left: 0;
}
@media only screen and (max-width: 767px){
    .link{ margin-bottom: 20px; }
}






       </style>
     </head>
     <body>
       <?php include("inc/header.php");?>
        <?php include("inc/scroll.php");?>
        <?php include("inc/config.php");?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

       
<div class="image-aboutus-banner"style="margin-top:75px; ">
   <div class="container">
    <div class="row">
        <div class="col-md-12 parallax">
         <h1 class="lg-text">About Us</h1>
         <p class="image-aboutus-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       </div>
    </div>
</div>
</div>

<div class="container" style="padding-bottom: 20px;" >
    <div class="row">
        <div class="col-md-12 col-xs-12 ">
         <p class="about"><b style="font-family: 'Sigmar One', cursive;">About</b> <br>Ashwini Kumar Choubey</p>
         <center><span class="services-title-border-heading"></span></center>

         <p class="about-des">Ashwini Kumar Choubey is <b>Minister of State for Health and Family Welfar and a member of the 16th Lok Sabha (2014-2019)</b>. He is an Indian politician belonging to the Bharatiya Janata Party. He is a member of the 16th Lok Sabha representing Buxar (Lok Sabha constituency)[1] and a former health minister of Bihar. He had represented the Bihar legislative assembly from Bhagalpur (Vidhan Sabha constituency) before contesting for the 16th Lok Sabha election. On 3 September 2017, he took in charge of office as Minister of State for Health in Modi Government.<br><br> <sub style="font-size: 25px;">"</sub>But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<sub style="font-size: 25px;">"</sub> <br><br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
       </div>
    </div>
  </div>



<div class="container-fluid " style="background: #e6e6e6; padding: 20px; width:100%;" >
  <div class="row" >
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video-h">
      <CENTER style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 40PX;">LATEST ACTIVITY</CENTER>
    </div>
    <div class="col-md-3 col-xs-12 video">
     <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/10" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="overflow: hidden;"></iframe>
      <div class="caption">
        <p class=heading>Lorem ipsum dolor </p>
        <p class=sub-heading>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="col-md-3 col-xs-12 video">
     <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="overflow: hidden;"></iframe>
      <div class="caption">
        <p class=heading>Lorem ipsum dolor </p>
        <p class=sub-heading>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="col-md-3 col-xs-12 video">
     <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/7" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="overflow: hidden;"></iframe>
      <div class="caption">
        <p class=heading>Lorem ipsum dolor </p>
        <p class=sub-heading>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="col-md-3 col-xs-12 video">
     <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="overflow: hidden;"></iframe>
      <div class="caption">
        <p class=heading>Lorem ipsum dolor </p>
        <p class=sub-heading>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div> 
</div>









  <div class="container" style="margin-top: 20px; padding-bottom: 30px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <CENTER style="color: black; font-weight: bold; font-size: 23px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 20PX;">QOUTES</CENTER>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">

               <?php
           $result=mysqli_query($conn, "select * from qoutes_en");
           $rowcount=mysqli_num_rows($result);//total records check  
           if($rowcount>0){
           $i=0;
           while(  $row = mysqli_fetch_assoc($result)){
             ?>
                <div class="testimonial">
                    <div class="pic">
                        <img src="uploads/qoutes/<?=$row['image_url']?>" alt="" class="img-responsive" style="">
                    </div>
                    <div class="testimonial-review">
                        <p><?=$row['descrpition']?></p>
 
                        <h3 class="testimonial-title">
                             -
                            <a href="#"><?=$row['heading']?></a>
                        </h3>
                    </div>
                </div>
                <?php $i++; } } ?>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background: #e6e6e6; padding-bottom: 30px;">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <CENTER style="color: black; font-weight: bold; font-size: 23px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 20PX;padding-top: 40px">ACHIEVEMENTS</CENTER>
    </div>

  <div class="col-md-6 text-center">
    <a href="donate.php" class="link">
    <div class="promoBox success-ribbon">
  <p class="donate" style="font-family: 'Roboto', sans-serif;color: #D03B3F;font-size: 22px;letter-spacing:4px;font-weight:bolder;">Achievements</p>
  <p class="sub-donate" style="font-family: 'Roboto', sans-serif;color: #D03B3F;font-size: 14px;letter-spacing: 2px;font-weight:bolder;">As BJP Leader</p>
</div>
</a>
  </div>
  <div class="col-md-6 text-center">
    <a href="" class="link">
    <div class="promoBox success-ribbon">
  <p class="donate"  style="font-family: 'Roboto', sans-serif;color: #D03B3F;font-size: 22px;letter-spacing:4px;font-weight:bolder;">Achievements</p>
  <p class="sub-donate" style="font-family: 'Roboto', sans-serif;color: #D03B3F;font-size: 14px;letter-spacing: 2px;font-weight:bolder;">As for New Idea</p>
</div>
</a>
  </div>

  </div>








<div class="demo" style="padding-bottom: 30px;">
    <div class="container-fluid" style="margin-bottom: 20px; overflow: hidden;" >
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <CENTER style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 40PX; padding-top: 40px;">PEOPLE'S REVIEW</CENTER>
    </div>


           <div class="col-md-1"></div>
            <div class=" col-md-5 col-sm-6">
              <div class="serviceBox">
                <i class="service-icon fa fa-twitter"></i>
              <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <CENTER style="color: black; font-weight: bold; font-size: 16px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 10PX; padding-top: 0px;">
                  TWITTER</CENTER>
                <span class="services-title-border"></span>
             </div>
               
                 <a class="twitter-timeline" data-width="500" data-height="500" data-link-color="#E95F28" href="https://twitter.com/AshwiniKChoubey?ref_src=twsrc%5Etfw">Tweets by AshwiniKChoubey</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
               </div>
              </div>
            </div>

            
            <div class=" col-md-5 col-sm-6">
              <div class="serviceBox">
                <i class="service-icon fa fa-facebook"></i>
              <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <CENTER style="color: black; font-weight: bold; font-size: 16px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 10PX; padding-top: 0px;">
                  FACEBOOK</CENTER>
                <span class="services-title-border"></span>
             </div>
               
                  <div class="fb-page" data-href="https://www.facebook.com/AshwiniKChoubey/" data-tabs="timeline" data-width="500" data-height="505" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AshwiniKChoubey/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AshwiniKChoubey/">Ashwini Choubey</a></blockquote></div>

               </div>
              </div>
            </div>
            <div class="col-md-1"></div>
     



            
        </div>
    </div>
</div>






 <?php include("inc/footer.php");?>
     
     </body>
     </html>


     <script type="text/javascript">
       $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[550,1],
        pagination: true,
        autoPlay:true
    });
});
     </script>

 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

