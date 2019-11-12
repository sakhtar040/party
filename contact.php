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
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
       <link rel="stylesheet" type="text/css" href="">
       <style type="text/css">



         
.image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("logo/profile-18.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0% 150%;
    color: #fff;
    padding-top: 110px;
    padding-bottom:110px;
     background-attachment: fixed;
    
    
 }
 
.lg-text {
    font-size:52px;
    font-weight: 600;
    text-transform: none;
    color:#fff;
}
.image-aboutus-para {
    color:#fff;
}



@media only screen and (max-width:990px){
    
.image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("logo/profile-18.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center center;
    color: #fff;
    padding-top: 80px;
    padding-bottom:80px;
     
     height:340px;

 }
 .lg-text {
    font-size:22px;
    font-weight: 600;
    text-transform: none;
    color:#fff;
}
.parallax .two{
  padding-right: 0px;
}



}


.note{
  color: black; font-weight: normal; font-size: 16px;font-family: 'Roboto', sans-serif; letter-spacing: 1PX; padding-bottom: 10PX;padding-top: 20px;
}

      
  blink {
        font-weight: bold;
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
        font-family: 'IBM Plex Sans Condensed', sans-serif;
    font-size: 18px;
      }
      @keyframes blink-animation {
        to {
          color: red
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          color: black
        }
      }


            .text .one{
              color: black; font-weight: normal; font-size: 20px;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-bottom: 10PX;padding-top: 20px;
            }

            .parallax .two{
              color: #d73151; font-weight: 300;
  line-height: 1.8em;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-top: 0px;
  padding-right: 0px;
            }

         .parallax .three{
  color: #d73151; font-weight: 300;
  line-height: 1.2em;font-family: 'Roboto', sans-serif; letter-spacing: 3PX; padding-top: 0px;
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
.form-group .text-effect input {
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
.form-group .text-effect .form-control:focus {
    border-bottom:2px solid #073951 !important;
    box-shadow: none;
    outline: 0 none;
  transition:0.6s;
  font-family: 'Roboto', sans-serif;
}
.form-group .text-effect {
    position: relative;
  height:70px;
}
.form-group .text-effect span {
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
  width:150px;
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




<div class="image-aboutus-banner"style="margin-top:75px; ">
   <div class="container">
    <div class="row">
        <div class="col-md-12 parallax" >
         <p class="lg-text">CONTACT US</p>
      <p class="two">Have a message to share with <br><b> Minister of State for Health and Family Welfare</b><br><b style="color: #DDBE42;"> Ashwini Kumar Choubey</b> <br> Please fill out this form to send a note to them.</p>

      <p class="three"><sub>*</sub>&nbsp;Required fields</p>

       </div>
    </div>
</div>
</div>


        <div class="container" style="margin-top: 20px;overflow: hidden;">
  <div class="row">
    
    <div class="col-md-10">

             <?php 
        if(isset($_POST['submit']))
        { 
         extract($_POST);   
           $conn = mysqli_connect('localhost','root','','mantri');
           $query = "INSERT INTO enquiry (f_name,l_name,email,contact_no,city,state,postal_code,message)
                                   VALUES ('$f_name','$l_name','$email','$contact_no','$city','$state','$postal_code','$message')";           
            $var=mysqli_query($conn,$query);
            echo $query;
                 if($var){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                          window.alert('Your problem will be solved within 24 hrs.')
                           window.location.href='contact.php';
                        </SCRIPT>");
              }                                 
        }
       ?>
           <form class="mar-15" action="" method="post">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>First Name<sub>*</sub></span>
                                <input type="text" class="form-control focus-text" name="f_name" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Last Name<sub>*</sub></span>
                                <input type="text" class="form-control focus-text"  name="l_name"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Email<sub>*</sub></span>
                                <input type="email" class="form-control focus-text" name="email" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Phone no<sub>*</sub></span>
                                <input type="text" class="form-control focus-text"  maxlength="10" onkeypress="return isNumberKey(event)"  name="contact_no" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>City<sub>*</sub></span>
                                <input type="text" class="form-control focus-text" name="city" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>State<sub>*</sub></span>
                                <input type="text" class="form-control focus-text" name="state" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Postal Code<sub>*</sub></span>
                                <input type="text" class="form-control focus-text" name="postal_code" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                          <div class="text-effect">
                              <span>Your Message<sub>*</sub></span>
                                <input type="text" class="form-control focus-text" name="message" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" style="padding-top: 30px;">
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                          <input type="submit" name="submit" class="submit">
                        </div>
                    </div>
                    
                </div>
            </form>

            <p class="note"> <blink>NOTE</blink> : We  recommend you to use this form to send a note of your issues to <b>Minister of State for Health and Family Welfare</b><b style="color: #DDBE42;">&nbsp; &nbsp; Ashwini Kumar Choubey &nbsp;&nbsp;</b> . <br>We will get in touch with you as soon as possible .</p>
    </div>
  </div>
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