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
          <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
         <link rel="icon" href="logo/fvcn.png" type="image/x-icon"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  
       <link rel="stylesheet" type="text/css" href="">
       <style type="text/css">
         .gallery
{
    display: inline-block;
    margin-top: 20px;
}

.gallery .fancybox img{
  height:300px;
  
}

.gallery .fancybox p, .text-muted{
  font-weight: normal;
  text-decoration: none;
  font-size: 18px;
  font-family: 'Roboto Condensed', sans-serif;  

}



/*Main style*/
.list-quotes {
    cursor: pointer;
    height: auto;
    margin-bottom: 30px;
    overflow: hidden;
    position: relative;
    display: block;
    border-bottom: 1px solid blue;
}
.list-quotes img,
.list-quotes h1 {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
}
.list-quotes img {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
.list-quotes h1{
    background: rgba(20,31,44,0.8);
    bottom: 30px;
    float: right;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    padding: 15px;
    position: absolute;
    margin: 0;
}

.list-quotes p {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    margin: 0;
    padding: 10px;
    opacity: 0;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0,50px,0);
    transform: translate3d(0,50px,0);
    font-size: 15px;
    font-weight: normal;
    background: rgba(51,153,153,0.8);
    width: 100%;
    color: #fff;
}
.list-quotes:hover img {
    -webkit-transform: translate3d(0,-80px,0);
    transform: scale(1.2);
    transition: all 250ms ease;
}
.list-quotes:hover{
    box-shadow: 0 0 5px 2px rgba(51,153,153, 0.5);
}
.list-quotes:hover h1 {
    -webkit-transform: translate3d(0,-100px,0);
    transform: translate3d(0,-100px,0);
    text-shadow: 0px 0 15px #fff;
    transition: all 250ms ease;
}
.list-quotes:hover p {
    opacity: 1;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.quotes span{
    color:#222;
    font-weight: bold;
    text-transform: capitalize;
    color: #fff;
}

       </style>
     </head>
     <body>
       <?php include("inc/header.php");?>
       <?php include("inc/scroll.php");?>
    

       <div class="container" style="margin-top: 80px;">
  <div class="row">
    <div class='list-group gallery'>
            <div class='col-md-4 '>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-1.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-1.jpg" />
                    <div class='text-center quotes'>
                        <p class='text-muted' >Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4 '>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-2.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-2.jpg" />
                    <div class='text-center quotes'  >
                        <p class='text-muted' >  India paid 'very high cost' for democracy, says NITI Aayog India paid 'very high cost' for democracy, says NITI Aayog India paid 'very high cost' for democracy, says NITI Aayog India paid 'very high cost' for democracy, says NITI Aayog</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4'>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-3.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-3.jpg" />
                    <div class='text-center quotes' >
                        <p class='text-muted'>Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4'>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-4.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-4.jpg" />
                    <div class='text-center quotes'>
                        <p class='text-muted'>Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4'>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-5.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-5.jpg" />
                    <div class='text-center'  >
                        <p class='text-muted quotes'>Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4'>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-6.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-6.jpg" />
                    <div class='text-center'  >
                        <p class='text-muted quotes'>Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4'>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-7.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-7.jpg" />
                    <div class='text-center'  >
                        <p class='text-muted quotes'>Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-md-4'>
                <a class="thumbnail fancybox list-quotes" rel="ligthbox" href="logo/gallery-8.jpg">
                    <img class="img-responsive" alt="" src="logo/gallery-8.jpg" />
                    <div class='text-center'  >
                        <p class='text-muted quotes'>Image Title</p>
                    </div> <!-- text-center / end -->
                </a>
            </div> <!-- col-6 / end -->
        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
</div> 

      
       <?php include("inc/footer.php");?>

     </body>
     </html>

<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

  
     <script type="text/javascript">
       $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    });
     </script>