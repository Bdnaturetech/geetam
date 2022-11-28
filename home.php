<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
   
<!-- header section starts  -->

<?php include('mainheader.php') ?>

<!-- first header section ends -->



<!--Second header starts here-->
<!--section class="headers"-->


   <!--a href="home.php" class="logo" src="images/geetham_logo.png"></a-->
  
   <!--div class="navbars" id="myTopnav">
         <a href="#home" class="active">Home</a>
      <a href="#news" class="dropdown">News</a>
      <a href="#contact">Contact</a>
     
      <div class="dropdown">
         <button class="dropbtn">Dropdown 
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
       </div>
      </div> 
      <div class="dropdown">
         <button class="dropbtn">Dropout 
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
       </div>
      </div> 

      <div class="dropdown">
         <button class="dropbtn">Dropdown 
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
       </div>
      </div> 
      
</div>
  <div id="menu-btns" class="fas fa-bars">
      
      </div-->

   <!--test-->
   <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
   <!--test end-->

		
<!--Second header ends here-->
 

<!-- home section starts  -->

<section class="home">

   <!-- swatch start here -->
 <!--div class="swatch">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
         </div-->
         <!-- swatch ends here -->

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat" >
            <div class="content">
               <span>GET ADMITTED TO HOSPITALIZE EDUCATIONAL ENVIRONMENT</span>
               
               <a href="faculty.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>REGISTRATION ON</span>
               <h3>........NOW</h3>
               <a href="" class="btn">APPLY FOR ADMISSION 2022</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>JOIN OUR STUDY ABROAD SCHOLARSHIP</span>
               <h3>MEET OUR INTERNATIONAL STUDENT</h3>
               <a href="faculty.php" class="btn">CHECK US</a>
            </div>
         </div>

         
               
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>
  

</section>

<!-- home section ends -->
 

<!-- services section starts  -->

<section class="services">
  
   <h1 class="heading-title"> Explore GEETAM Discipline </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Faculty of Art</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Faculty of Science</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Faculty of Management</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Gandhi Study</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>International Accounting</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Faculty of Engineer</h3>
      </div>

   </div>
   <br>
   <!--second-->
   <div> <br></div>
   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Hotel Management</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Distance Learning</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Agriculture Science</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Law</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Medical & Health Science</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Career Development & Research</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/img-7.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us </h3>
      <p>GEETHAM provides a harmonious environment and learning opportunities to its students regardless of their gender, socioeconomic background, religious beliefs and regional differences.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home faculty section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Explore Campus life & Our Top Notch </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>LAW</h3>
            <p>Our student use the updated discipline in...........</p>
            <a href="#" class="btn">Meet us</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Research</h3>
            <p>Meeting the require methodology in standard research development</p>
            <a href="#" class="btn">Explore Geetam</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Campus Life</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="faculty.php" class="btn">load more</a> </div>

</section>

<!-- home faculty section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off Admission Offer</h3>
      <p>Geetam offer an exclusive EMI and other potentials financial aid for student all over the world</p>
      <a href="book.php" class="btn">Get In touch with us...</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->
<?php include('mainfooter.php') ?>
		


</body>
</html>