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
       <link rel="stylesheet" type="text/css" href="">
        <style type="text/css">

        .body{
          background-color:#fff;
        }
 .carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
    overflow:hidden;
}
.item.active img {
    transition: transform 5000ms linear 0s;
    /* This should be based on your carousel setting. For bs, it should be 5second*/
    transform: scale(1.05, 1.05);
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}


@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}

.carousel .carousel-indicators li {
    display: inline-block;
    width: 15px;
    height: 15px;
    margin:20px 0px 0px 10px;
    text-indent: 0;
    cursor: pointer;
    border: 1px solid #83868C;
    border-radius: 50%;
    background-color: #83868C;
    
      
}
.carousel .carousel-indicators .active {
    width: 15px;
    height: 15px;
    margin: 20px 0px 0px 10px;
    background-color: #fff;
     border: 1px solid #fff;
    
}


.carousel .item .carousel-caption{
  position:absolute;
  left:-50%;
  bottom:25%;
}  

.carousel .item .carousel-caption .heading{
 font-size: 20px;
 background-color: #2780BC;
 color:white;
 padding-top: 5px;
 padding-bottom: 5px;
 padding-left: 15px;
 padding-right: 15px;
text-decoration: none;
 letter-spacing: 2px;
  font-family: 'Roboto Condensed', sans-serif;

}  

.carousel .item .carousel-caption .sub-heading{
  position: absolute;
  top:50px;
  left:100px;
 font-size: 26px;
 
 color:white;
 padding-top: 5px;
 padding-bottom: 5px;
 width:100%;

 letter-spacing: 1px;
  font-family: 'Roboto Condensed', sans-serif;

}   
.carousel .item .carousel-caption .Description{
  position: absolute;
  top:100px;
  left:-3px;
 font-size: 16px;
 
 color:white;
 padding-top: 5px;
 padding-bottom: 5px;
 width:100%;

 letter-spacing: 1px;
  font-family: 'Roboto Condensed', sans-serif;

}  



#blog-section{margin-top:40px;margin-bottom:80px;}
.content-title{padding:5px;background-color:#fff;}
.content-title h4 a{color:#34495E;text-decoration:none; transition: 0.5s; padding: 10px;}
.content-title p {color:#34495E;text-decoration:none; transition: 0.5s; padding: 0px 10px 10px 10px;}
.content-title h4 a:hover{color:#F39C12; }
.content-footer{background-color:#16A085;padding:10px;position: relative;}
.content-footer span a {
    color: #fff;
    display: inline-block;
    padding: 6px 5px;
    text-decoration: none;
    transition: 0.5s;
}
.content-footer span a:hover{     
    color:#F39C12;   
}
aside{
    margin-top: 30px;
    -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
-moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);}
aside .content-footer>img {
    width: 33px;
    height: 33px;
    border-radius: 100%;
    margin-right: 10px;
    border: 2px solid #fff;
}

.user-ditels {
    width: 300px;
    top: -100px;
    height: 100px;
    padding-bottom: 99px;
    position: absolute;
    border: solid 2px #fff;
    background-color: #34495E;
    right: 25px;
    display: none;
    z-index: 1;
}

@media (max-width:768px){
    .user-ditels {   
    right: 5px;   
}
    
}
.user-small-img{cursor: pointer;}

.content-footer:hover .user-ditels  {
    display: block;
}


.content-footer .user-ditels .user-img{width: 100px;height:100px;float: left;}
.user-full-ditels h4 {
    color: #fff;
    display: block;
    margin: 0px;
    padding-top: 10px;
    padding-right: 28px;
    text-align: right;
}
.user-full-ditels p{    
    color: #fff;
    display: block;
    margin: 0px;
     padding-right: 20px;
    padding-top: 5px;
   text-align: right;}



/*recent-post-col////////////////////*/
.widget-sidebar {
    background-color: #fff;
    padding: 20px;
    margin-top: -20px;
}

.title-widget-sidebar {
    font-size: 14pt;
    border-bottom: 2px solid #e5ebef;
    margin-bottom: 15px;
    padding-bottom: 10px;    
    margin-top: 0px;
}

.title-widget-sidebar:after {
    border-bottom: 2px solid #d73151;
    width: 150px;
    display: block;
    position: absolute;
    content: '';
    padding-bottom: 10px;
}

.recent-post{width: 100%;height: 250px; list-style-type: none;}
.post-img img {
    width: 100px;
    height: 70px;
    float: left;
    margin-right: 15px;
    border: 5px solid #16A085;
    transition: 0.5s;
}

.recent-post a {text-decoration: none;color:#34495E;transition: 0.5s;}
.post-img, .recent-post a:hover{color:#F39C12;}
.post-img img:hover{border: 5px solid #F39C12;}

/*===============ARCHIVES////////////////////////////*/



button.accordion {
    background-color: #16A085;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #F39C12;color: #fff;
}

button.accordion:after {
    content: '\002B';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}


/*categories//////////////////////*/

.categories-btn{
    background-color: #F39C12;
    margin-top:30px;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    
}
.categories-btn:after {
    content: '\25BA';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
.categories-btn:hover {
    background-color: #16A085;color: #fff;
}

.form-control{border-radius: 0px;}

.btn-warning {
    border-radius: 0px;
    background-color: #F39C12;
    margin-top: 15px;
}
.input-group-addon{border-radius: 0px;} 

        </style>
    
    
         </head>
              <body class="body" >
                <?php include("inc/header.php");?>
                 <?php include("inc/scroll.php");?>

<?php require("inc/config.php");?>
       <?php 
         $result=mysqli_query($conn, "select * from slider_content_hi");//change type
         $rowcount=mysqli_num_rows($result);//total records check
        ?>

<div class="container" style="margin-top: 80px;">
  <div class="row">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php if($rowcount>0){
                $i=0;
                while(  $row = mysqli_fetch_assoc($result)){ ?>
                <li data-target="#carousel" data-slide-to="<?=$i;?>" class="<?php if($i==0){echo 'active';} ?>"></li>
              <?php $i++; } } ?>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner carousel-zoom">

      <?php
           $result=mysqli_query($conn, "select * from slider_content_hi");
           $rowcount=mysqli_num_rows($result);//total records check  
           if($rowcount>0){
           $i=0;
           while(  $row = mysqli_fetch_assoc($result)){
         ?>
        <div class="<?php if($i==0){echo 'active';} ?> item"> <iframe width="100%" height="550" src="<?=$row['link']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <div class="carousel-caption">
            <a href="javascript:void(0);" class="heading">Update</a>
            <p class="sub-heading "> <?=$row['heading']?> </p>
            <p class="Description"><?=$row['descrpition']?></p>
          </div>
        </div>
        <?php $i++; } } ?>
        
       </div>
    </div>
</div>
</div>


    <section id="blog-section" >
     <div class="container">
       <div class="row">

         <div class="col-lg-8">

           <div class="row">
            <h2 class="title-widget-sidebar">// अधिक वीडियो <img src="logo/logorp.png" style="height:18px; width:150px;background-image: center center;"> चैनल से</h2>
              <div class="col-lg-6 col-md-6">
             <aside>
                <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/10" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="content-title">
        <div class="text-left">
        <h4><a href="#">अखिल भारतीय विद्यार्थी परिषद</a></h4>
        <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
        </div>
        </div>
        
             </aside>
            </div>
               
               <div class="col-lg-6 col-md-6">
             <aside>
                <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/9" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="content-title">
        <div class="text-left">
        <h4><a href="#">अखिल भारतीय विद्यार्थी परिषद</a></h4>
        <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
        </div>
        </div>
        
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <div class="content-title">
                <div class="text-left">
                 <h4><a href="#">अखिल भारतीय विद्यार्थ है. </a></h4>
                   <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
                </div>
              </div>
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                 <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/7" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <div class="content-title">
                       <div class="text-left">
                        <h4><a href="#">अखिल भारतीय विद्यार्थी परिषद</a></h4>
                       <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
                   </div>
                  </div>
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                 <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="content-title">
        <div class="text-left">
        <h4><a href="#">अखिल भारतीय विद्यार्थ है. </a></h4>
        <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
        </div>
        </div>
        
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                 <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/5" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="content-title">
         <div class="text-left">
             <h4><a href="#">अखिल भारतीय विद्यार्थ है. </a></h4>
             <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
         </div>
        </div>
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                 <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="content-title">
        <div class="text-left">
        <h4><a href="#">अखिल भारतीय विद्यार्थी परिषद</a></h4>
        <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
        </div>
        </div>
        
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                 <iframe width="100%" height="270" src="http://raidpipe.com/embed/index.php/4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="content-title">
        <div class="text-left">
        <h4><a href="#">अखिल भारतीय विद्यार्थी परिषद</a></h4>
        <p class="des">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</p>
        </div>
        </div>
        
             </aside>
            </div>  
           </div>
          </div>
           
<!--           // RECENT POST===========-->
         <div class="col-lg-4">           
               <div class="widget-sidebar">
                 <h2 class="title-widget-sidebar">// हाल की पोस्ट</h2>
                   <div class="content-widget-sidebar">
                    <ul>
                     <li class="recent-post">
                        <div class="post-img">
                        <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/2" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                         </div>
                         <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                         </div>
                         <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                         </div>
                         <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/5" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                         </div>
                         <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                        
                        
                    </ul>
                   </div>
                 </div>
             
             <div class="widget-sidebar">
              <h2 class="title-widget-sidebar">//अभिलेखागार</h2>
                <div class="last-post">
                  <button class="accordion">21/4/2016</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                       <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                       <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.</p>
                 </div>
                </div>                 
                 <hr>
                 <div class="last-post">
                  <button class="accordion">5/7/2016</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                       <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/7" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                       <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.</p>
                 </div>
                </div>
                 <hr>
                 <div class="last-post">
                  <button class="accordion">15/9/2016</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                      <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                       <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.</p>
                 </div>
                </div>
                 <hr>
                 <div class="last-post">
                  <button class="accordion">2/3/2017</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                       <iframe width="100%" height="170" src="http://raidpipe.com/embed/index.php/9" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                       <a href="#"><h5>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी </h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>अखिल भारतीय विद्यार्थी परिषद विद्यार्थी छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.</p>
                 </div>
                </div>
             </div>
             
        
             
              <!--=====================
                    NEWSLATTER
             ======================-->
<div class="widget-sidebar">
 <h2 class="title-widget-sidebar">// संवादपत्र</h2>
  <p>अखिल भारतीय विद्यार्थ है. अखिल भारतीय विद्यार्थ है.विद्यार्थ  अखिल भारतीय विद्यार्थ है.</p>  
<div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-warning">Warning</button>
             </div>  
                 
                 
             </div>
           </div>
         </div>
     
    </section>
    





            
           

           
 <?php include ('inc/footer.php'); ?>
              </body>
          </html>

          <script>
         $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
         });
                  
         var acc = document.getElementsByClassName("accordion");
         var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
        panel.style.maxHeight = null;
             } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          }
        }
      </script>


















