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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="logo/fvcn.png" type="image/x-icon"> 
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="">
       <style type="text/css">
         .main-timeline{
    overflow: hidden;
    position: relative;
}
.main-timeline .timeline{
    width: 49%;
    float: left;
    z-index: 1;
    position: relative;
}
.main-timeline .timeline:before,
.main-timeline .timeline:after{
    content: "";
    display: block;
    clear: both;
}
.main-timeline .timeline:before{
    content: "";
    width: 3px;
    height: 90%;
    background:#008b8b;
    position: absolute;
    top: 10%;
    right: 17px;


}
.main-timeline .timeline:last-child:before{ height: 0; }
.main-timeline .timeline-icon{
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background:#008b8b;
    overflow: hidden;
    text-align: center;
    position: absolute;
    top: 0;
    right: -40px;
    z-index: 3;
}
.main-timeline .timeline-icon:before{
    content: "";
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid#008b8b;
    box-shadow: 0 0 0 4px #50B4B3;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
.main-timeline .timeline-icon i{
    font-size: 35px;
    color: #303a3b;
    line-height: 80px;
    z-index: 1;
    position: relative;
}
.main-timeline .year{
    display: block;
    padding: 0 60px 0 30px;
    font-size: 30px;
    color: #303a3b;
    text-align: right;
    border-bottom: 2px solid #303a3b;
    z-index: 2;
    position: relative;
}
.main-timeline .year:before{
    content: "";
    display: block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background:#008b8b;
    border: 5px solid #fff;
    box-shadow: 0 0 0 4px#008b8b;
    margin: auto;
    position: absolute;
    bottom: -15px;
    left: 4px;
}
.main-timeline .year:after{
    content: "";
    border-left: 10px solid #303a3b;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    position: absolute;
    bottom: -11px;
    left: 50px;
}
.main-timeline .timeline-content{
    padding: 18px 60px 18px 40px;
    text-align: right;
    position: relative;
    z-index: 1;
}
.main-timeline .timeline-content:before,
.main-timeline .timeline-content:after{
    content: "";
    width: 80px;
    height: 0px;
    border-radius: 50%;
    background: #fff;
    position: absolute;
    top: -7%;
    right: 15px;
    z-index: -1;
}
.main-timeline .timeline-content:after{
    left: auto;
    right: -95px;
}
.main-timeline .timeline:last-child .timeline-content:before,
.main-timeline .timeline:last-child .timeline-content:after{
    width: 0;
    height: 0;
}

.timeline-content img{
  height:250px; width:400px;margin-left: auto;margin-right: auto;display: block;border: 5px solid #fff; -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
-moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
margin-top: 30px;
}

.main-timeline .timeline .timeline-content .title{
    font-size: 20px;
    font-weight: bold;
    color:#000000;
    margin-top: 45px;
    font-family: 'Roboto Condensed', sans-serif;
    letter-spacing: 1px;

}
.main-timeline .description{
    font-size: 15px;
    color: #7f8386;
    line-height: 25px;
    text-align: justify;
    text-decoration: none

}
.main-timeline .timeline:nth-child(2){ margin-top: 140px; }
.main-timeline .timeline:nth-child(even){ margin-bottom: 80px; }
.main-timeline .timeline:nth-child(odd){ margin: -140px 0 0 0; }
.main-timeline .timeline:first-child,
.main-timeline .timeline:last-child:nth-child(even){
    margin: 0 !important;
}
.main-timeline .timeline:nth-child(2n):before,
.main-timeline .timeline:nth-child(2n) .timeline-icon{
    right: auto;
    left: -20px;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon{ left: -40px }
.main-timeline .timeline:nth-child(2n) .year{
    padding: 0 30px 0 60px;
    text-align: left;
}
.main-timeline .timeline:nth-child(2n) .year:before{
    left: auto;
    right: 3px;
}
.main-timeline .timeline:nth-child(2n) .year:after{
    border-left: none;
    border-right: 10px solid #303a3b;
    right: 50px;
}
.main-timeline .timeline:nth-child(2n) .timeline-content{
    padding: 18px 40px 18px 60px;
    text-align: left;
}
.main-timeline .timeline:nth-child(2n) .timeline-content:before{ left: -95px; }
.main-timeline .timeline:nth-child(2n) .timeline-content:after{ left: 15px; }
.main-timeline .timeline:nth-child(2n):before,
.main-timeline .timeline:nth-child(2n) .timeline-icon{ background: #008b8b;  }
.main-timeline .timeline:nth-child(2n) .timeline-icon:before{
    border-color: #008b8b;
    box-shadow: 0 0 0 4px #50b5b4;
}
.main-timeline .timeline:nth-child(2n) .year:before{
    background: #008b8b;
    box-shadow: 0 0 0 4px #008b8b;
}
.main-timeline .timeline:nth-child(2n) .title{ color: #000000;}
.main-timeline .timeline:nth-child(3n):before,
.main-timeline .timeline:nth-child(3n) .timeline-icon{ background: #008b8b; }
.main-timeline .timeline:nth-child(3n) .timeline-icon:before{
    border-color: #008b8b;
    box-shadow: 0 0 0 4px #50b5b4;
}
.main-timeline .timeline:nth-child(3n) .year:before{
    background: #008b8b;
    box-shadow: 0 0 0 4px #008b8b;
}
.main-timeline .timeline:nth-child(3n) .title{ color: #000000; }


@media only screen and (max-width: 990px){
    .main-timeline .timeline{ width: 100%; }
    .main-timeline .timeline:nth-child(even),
    .main-timeline .timeline:nth-child(odd){
        margin: 0;
    }

.main-timeline .timeline:before,
    .main-timeline .timeline:nth-child(2n):before{
        width: 3px;
        height: 100%;
        left: 35px;
    }
    .main-timeline .timeline-icon,
    .main-timeline .timeline:nth-child(2n) .timeline-icon{
        left: 0;
    }
    .main-timeline .year,
    .main-timeline .timeline:nth-child(2n) .year{
        text-align: left;
        padding: 0 30px 0 100px;
    }
    .main-timeline .year:before,
    .main-timeline .timeline:nth-child(2n) .year:before{
        left: auto;
        right: 4px;
    }
    .main-timeline .year:after{
        left: auto;
        right: 50px;
        border-right: 10px solid #303a3b;
        border-left: none;
    }
    .main-timeline .timeline-content,
    .main-timeline .timeline:nth-child(2n) .timeline-content{
        text-align: left;
        padding: 18px 20px 18px 70px;
    }
    .main-timeline .timeline-content:before,
    .main-timeline .timeline-content:after{
        width: 0;
        height: 0;
    }
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
       </style>
     </head>
     <body>
       <?php include("inc/header.php");?>
        <?php include("inc/scroll.php");?>

       <div class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-md-12 ">
      <CENTER style="color: black; font-weight: bold; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 40PX;">यात्रा</CENTER>
    </div>
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                    <span class="year">1953</span>
                    <div class="timeline-content">
                         <img src="logo/profile-20.jpg" style="" class="img-responsive text-center">
                        <h5 class="title text-left">बिहार के भागलपुर में 2 जनवरी 1 9 53 को पैदा हुआ</h5>
                        <hr class="fancy-line">
                        <p class="description">
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.

                            
                        </p>

                        <UL class="description">
                            <li> छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.</li>
                            <li>छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.</li>
                            <li>छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.</li>
                            <li>छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है.</li>
                        </UL>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                    <span class="year">2016</span>
                    <div class="timeline-content">
                      <img src="logo/profile-16.jpg" class="img-responsive text-center">
                        <h5 class="title text-left">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</h5>
                        <hr class="fancy-line">
                        <p class="description">
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                    <span class="year">2015</span>
                    <div class="timeline-content">
                      <img src="logo/profile-18.jpg" style="" class="img-responsive text-center">
                        <h5 class="title text-left">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</h5>
                        <hr class="fancy-line">
                        <p class="description">
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                    <span class="year">2015</span>
                    <div class="timeline-content">
                      <img src="logo/profile-16.jpg" style="" class="img-responsive text-center">
                        <h5 class="title text-left">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</h5>
                        <hr class="fancy-line">
                        <p class="description">
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                    <span class="year">2015</span>
                    <div class="timeline-content">
                      <img src="logo/profile-18.jpg" style="" class="img-responsive text-center">
                        <h5 class="title text-left">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</h5>
                        <hr class="fancy-line">
                        <p class="description">
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                    <span class="year">2015</span>
                    <div class="timeline-content">
                      <img src="logo/profile-18.jpg" style="" class="img-responsive text-center">
                        <h5 class="title text-left">अखिल भारतीय विद्यार्थी परिषद के कार्यकर्ता बन गए</h5>
                        <hr class="fancy-line">
                      
                        <p class="description">
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                            छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <?php include("inc/footer.php");?>
     </body>
     </html>