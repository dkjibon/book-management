<?php
  session_start();
  if(!isset($_SESSION['email'])){
   
     header('Location:login.php');
   }
?>
<!DOCTYPE html>
<!-- /**
 *  @ Developed By IECL,
 *  @ Author By Md.Alamgir Hossen ,
 *  @ Start  Date : 14-Fer-2016,
 *  @ Copyright : IECL,
 *  @ Web Url : http:imed.gov.bd
 */ -->
<html>
<head>
  <link rel="stylesheet" href="css/vertical.news.slider.css?v=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/style_login.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script> 
   /*   $(document).ready(function(){
          $("#flip").click(function(){
              $("#panel").slideDown(5000);
          });
          $("#stop").click(function(){
              $("#panel").stop();
          });
      });*/
      </script>
      <style type="text/css">
      .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 6px;
    font-size: 16px;
    border: none;
    cursor: pointer;
     margin: 35px;
  }

  .dropdown {
      position: relative;
      display: inline-block;
      float: right;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .dropdown:hover .dropdown-content {
      display: block;
  }

  .dropdown:hover .dropbtn {
      background-color: #3e8e41;
  }
      </style>
</head>
<body>
<div class="wrapper">
<div class="header">
<img src="img/ebook icon-.png">
<!-- <a href="logout.php"><button class="button button7">Logout</button></a -->
<div class="dropdown">
  <button class="dropbtn">User Setting</button>
  <div class="dropdown-content">
    <a href="oder_user_information.php">User Information</a>
    <a href="user_list.php">User Profile</a>
    <a href="logout.php">Log Out</a>
  </div>
</div>
</div>

 <!--  <div>
    
      <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>

     

    </div> -->

        <div class="hed">  
          <h1>Book List</h1>
                </div>
           <div class="nav">
               <a href="add.html"><h4>User Add</h4></a>
               <a href=""><h4>User Edit</h4></a>
               <marquee direction="up"><h1>Training</h1>

                      <i>Undertaking CakePHP work within your organization, and want to ensure your team has the best tools, skills and understanding of the CakePHP Framework and MVC approaches possible? Training for general development, application planning and design, as well as education for preparation before Certification are available.</i> <img src="img/advanced.jpg">
                  
                    </marquee>

                  </div>
                    <div class="left_bar">
                      <marquee  scrolldelay="200"><h1>Information Entertainment & Communication</h1><br><a href=""><img src="img/IMG_7637.JPG"></a></marquee>


                        
                        </div>

                      <div class="book_page_all">
                      <div class="allbooks">
                       <div class="preview-image">
                            <a href="">
                      <img src="images/LegacyTypography.jpg">
                      <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                      <h5>Original Price:$8.8</h5></a>
                  <p>Web Design</p>
                  <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                 
                </div>
              
             
            </div>
            <div class="allbooks">
              <div class="preview-image">
               <a href="">
                  <img src="images/Mastering-Fireworks-cover.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                  <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            <div class="allbooks">
              <div class="preview-image">
                <a href="">
                  <img src="images/navigation1.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                   <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
             <div class="allbooks">
               <div class="preview-image">
                <a href="">
                  <img src="images/LegacyTypography.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                   
                  <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            <div class="allbooks">
              <div class="preview-image">
                <a href="">
                  <img src="images/Mastering-Fireworks-cover.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                  <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            <div class="allbooks">
              <div class="preview-image">
                <a href="">
                  <img src="images/navigation1.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                   <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            <div class="allbooks">
               <div class="preview-image">
                <a href="">
                  <img src="images/LegacyTypography.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                   
                  <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            <div class="allbooks">
              <div class="preview-image">
                <a href="">
                  <img src="images/Mastering-Fireworks-cover.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                   
                  <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            <div class="allbooks">
              <div class="preview-image">
                <a href="">
                  <img src="images/navigation1.jpg">
                  <p>&#9733 &#9733 &#9733 &#9733 &#9733</p>
                  <h5>Original Price:$8.8</h5>
                   
                  <p>Web Design</p>
                   <a href="oder_user_information.php"> <h3>Oder Submit</h3></a>
                </div>
              </a>
             
            </div>
            </div>
            <div class="footer_main">
            <div class="footer_bar">
              <div class="box1">
                  <h1>About</h1>
                    Help you get your products to market faster?
                    Enhance maintain your enterprise applications?
                    Step at any stage of the development lifecycle?
                    Augment your staff with hard-to-find IT talent?
                </div>
                <div class="box2">
                   <h1>Support</h1>
                    Web Application 
                    Business Process Remodeling
                    IT Consultancy Entry Services
                    System Integration & Data Migration
                    Data Analysis & Business Intelligence
                </div>
                <div class="box3">
                  <h1>Contact</h1>
                      
                <form method="post" action="contact.php">
                    <label for="email">Your email:</label><br />
                <input id="name1" class="input" name="email" type="text" placeholder="Enter mail" value="" size="40" />
               
                </form>
                </div>
                <div class="box4">
                  <h1>We're On it. </h1>
                  <div id="share-buttons">
                  
                      <!-- Email -->
                      <a href="#">
                          <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                      </a>
                   
                      <!-- Facebook -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                      </a>
                      
                      <!-- Google+ -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                      </a>
                      
                      <!-- LinkedIn -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                      </a>
                      
                      <!-- Reddit -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                      </a>
                      
                      <!-- Twitter -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                      </a>

                </div>
                
              </div>
            </div>
            </div>
             <div class="footer">
             Copyright 2016 © alombd24.com
            </div>
         </div>
         
</div>
</body>
</html>