
<?php
      include('header.php');
?>
  <title>Ekota Blood And Social Org</title>
  <style>
    .card {
    border-radius: 25px;
    background-color: #FFF;
    height: 370px;

}
 .post_footer{
        display: flex;
        justify-content: space-between;
        padding:5px;
        background:#c2c2c2;
    }
    .post{
        background:#faf7f7;
        border-radius:5px;
        margin:2px;
    }
</style>

<link rel="stylesheet" href="form.css">

    <!-- ------Header slider ----------- -->
    <!-- --change responsive---->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/3.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption">
                    <h5>“তুচ্ছ নয় রক্তদান,</h5>
                    <p>বাঁচাতে পারে একটি প্রাণ”</P>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/2.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption">
                    <h5>“রক্ত দিলে হয়না ক্ষতি,</h5>
                    <p>জাগ্রত করে মানবিক অনুভুতি”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/1.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption">
                    <h5>“প্রস্তুত থাকে যদি কমপক্ষে ২ জন রক্তদাতা,</h5>
                    <p>থাকবে গর্ভবতী মায়ের প্রাণের নিশ্চয়তা”</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ------Header slider End ----------- -->

    <!-- -----About us section--------- -->
    <!-- --change column responsive---->
    <section class="about-section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 col-12">
                    <div class="about-img">
                        <img src="Images/donate.png" class="img-fluid rounded" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2 class="about-title">EKOTA BLOOD AND SOCIAL ORG</h2>
                        <p class="mt-4">একতা ব্লাড ও সমাজকল্যাণ সংস্থা হলো রক্ত গ্রহীতা ও রক্ত দাতার মধ্যে যোগাযোগ স্থাপন করে
                            দেওয়ার সুন্দর একটি
                            প্লাটফর্ম। (এখান সরাসরি আমরা কোন রক্ত সংগ্রহ করে রাখি না। কোন রুগির রক্তের প্রয়োজন হলে তারা
                            আমাদের সাথে যোগাযোগ করেন, আমরা তখন আমাদের স্বেচ্ছাসেবক দাতাদের সাথে উক্ত রুগি/রুগির পরিবারের
                            সাথে যোগাযোগ স্থাপন করে দেই।</p>
                        <button class="btn btn-outline-success">More About us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------request---------------- -->
    <section class="request-blood-section mt-2 py-3">
        <div class="d-grid gap-2 align-item-center justify-content-center my-5 ">
           <a href="form.php"> <button class="btn input-btn" type="button">Request Blood</button></a>
           <a href="donet_register.php"> <button class="btn input-btn bg-info" type="button">Register Donor</button></a>
        </div>
    </section>
    <!-- ----------FAQ Section----------- -->

    <section class="faq-section p-3"><!-- --change padding---->
        <div class="my-5 text-center ">
            <h2>কিছু কমন প্রশ্নের সহজ উত্তর</h2>
            <p>উত্তর জানতে প্রশ্নের উপর ক্লিক করুন।</p>
        </div>
        <div class="d-grid gap-4 m-auto col-lg-8 col-md-8 col-sm-10">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            1. রক্ত দানের উপকারীকা কি?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            -রক্ত দিলে কোনো ধরণের শারীরিক অসুবিধা হয় না,কারণ যেই রক্তটুকু ৪ মাস পর নষ্ট হবার কথা
                            ছিল,তার অল্প অংশ(৩৮০মিলিলিলিটার) বের করে নেওয়া হচ্ছে।তবে হ্যা,যেহেতু যেই প্রক্রিয়া
                            naturally হবার কথা ছিল কিন্তু আমরা artificially & quickly (4-5minutes) রক্ত দানের
                            প্রক্রিয়াটি সম্পন্ন করি,তাই সাময়িক hypovolumia হয়ে মাথা ঘুরতে পারে।তবে সেটি অল্প বিশ্রাম
                            আর পানি খেলেই ১০-১৫ মিনিটে ঠিক হয়ে যায়।
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            2. *রক্তদান করলে শারীরিক কোনো অসুবিধা হয় কি না?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            -রক্ত দিলে কোনো ধরণের শারীরিক অসুবিধা হয় না,কারণ যেই রক্তটুকু ৪ মাস পর নষ্ট হবার কথা
                            ছিল,তার অল্প অংশ(৩৮০মিলিলিলিটার) বের করে নেওয়া হচ্ছে।তবে হ্যা,যেহেতু যেই প্রক্রিয়া
                            naturally হবার কথা ছিল কিন্তু আমরা artificially & quickly (4-5minutes) রক্ত দানের
                            প্রক্রিয়াটি সম্পন্ন করি,তাই সাময়িক hypovolumia হয়ে মাথা ঘুরতে পারে।তবে সেটি অল্প বিশ্রাম
                            আর পানি খেলেই ১০-১৫ মিনিটে ঠিক হয়ে যায়।

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            3. *রক্ত দানের মানবিক দিক কি?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            -চিন্তা করুন,আপনার দান করা রক্ত(যেটা কিনা এমনিতেই normal physiological প্রক্রিয়ায় নষ্ট
                            হয়ে যেত) একজন মুমূর্ষু মানুষের শরীরে প্রবাহিত হচ্ছে এবং আপনার দেওয়া এক ব্যাগ রক্তের কারণে
                            তার জীবন প্রদীপ জ্বলছে….হয়ত আপনার দেওয়া এক ব্যাগ রক্তই তার জীবনের বেঁচে থাকার পারিধি
                            বৃদ্ধি করে দিচ্ছে….সেইসব মুমূর্ষু মানুষগুলো যদি আপনার দেওয়া রক্তের মাধ্যমে সুস্থ হয়ে
                            উঠে,তার জীবনের শেষ মুহূর্ত পর্যন্ত রক্তদাতার জন্য তার মনের গহীন থেকে দোয়া-আশীর্বাদ করে
                            যায়,হয়ত সেটা তার নিজেরও অজান্তে।আপনার দেওয়া রক্ত,অন্যের শরীরে প্রবাহিত হয়ে তাকে সুস্থ
                            স্বাভাবিক রখছে,এর চেয়ে ভালো মানবিক কাজ আর কি হতে পারে?

                        </div>
                    </div>

                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            4. *একতা ব্লাড ও সমাজকল্যাণ সংস্থা,  এ কেন রক্ত দিবেন?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            মূলত একতা ব্লাড ও সমাজকল্যাণ সংস্থা হলো গ্রহীতা ও রক্ত দাতার মধ্যে যোগাযোগ স্থাপন করে দেওয়ার সুন্দর
                            প্লাটফর্ম।
                            (এখান সরাসরি আমরা কোন রক্ত সংগ্রহ করে রাখি না। কোন রুগির রক্তের প্রয়োজন হলে তারা আমাদের সাথে
                            যোগাযোগ করেন, আমরা তখন আমাদের স্বেচ্ছাসেবক দাতাদের সাথে উক্ত রুগি/রুগির পরিবারের সাথে
                            যোগাযোগ স্থাপন করে দেই।
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- -----------success change ------------- -->
    <section class="success-section pt-5">
        <div class="my-5 text-center ">
            <h2 class="success-text">Our Successness</h2>
            <p class="pt-2">Our services are constantly improving</p>
        </div>
        <div class="container">
            <div style="display:flex; flex-wrap: wrap; justify-content: space-around;" class="d-flex gap-4 align-items-center justify-content-center">
                <div class="s-box">
                    <div class="success-box-item">
                        <i class="fa fa-heartbeat fa-3x mb-3" ></i>
                        <div class="card-body text-red">
                            <h5 class="card-title fs-1">4000+</h5>
                            <p class="card-text fw-semibold mt-2">Donated blood </p>
                        </div>
                    </div>

                </div>
                <div class="s-box">
                    <div class="success-box-item">
                         <i class="fa fa-stethoscope fa-3x mb-3"></i>
                        <div class="card-body text-dark">
                            <h5 class="card-title fs-1">2500+</h5>
                            <p class="card-text fw-semibold mt-2">Safe Lives</p>
                        </div>
                    </div>
                </div>
                <div class="s-box">
                    <div class="success-box-item">
                        <i class="fa fa-users fa-3x mb-3"></i>
                        <div class="card-body text-red">
                            <h5 class="card-title fs-1">1000+</h5>
                            <p class="card-text fw-semibold mt-2">Our Volunteers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- --------team change--------------- -->
    <div class="container-fluid team-section">
        <h2 class="text-center fs-1 mt-4 mb-2 success-text ">Our Team</h2>
        <p class="text-center my-4">The donation process from the time you arrive center until the time you leave</p>
        <div class="team-area">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/mohosin.png" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">MOSOHIN ISLAM</h2>
                                <p class="description">
                                    FOUNDER
                                </p>

                                <div class="social">
                                  <a href="https://www.facebook.com/mohsin.islam.5036">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/sohel bhai.png" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">SOHEL MIA</h2>
                                <p class="description">PRESIDENT</p>

                                <div class="social">
                                    <a href="https://www.facebook.com/md.sohel.716970">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/smjaman.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">S M JAMAN</h2>
                                <p class="description">VICE PRESIDENT</p>

                                <div class="social">
                                    <a href="https://www.facebook.com/smjaman.smjaman.1">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/solihinshaon.jpeg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">SOLIHIN SHAON</h2>
                                <p class="description">VICE PRESIDENT</p>

                                <div class="social">
                                    <a href="https://www.facebook.com/solihin.shaon">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/sohidul.jpeg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">MD GOLAM SOHIDUL</h2>
                                <p class="description">SECRETERY</p>

                                <div class="social">
                                    <a href="https://www.facebook.com/sadikulislam.talha">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/shova" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Subrina Mahmud Shova</h2>
                                <p class="description">VICE PRESIDENT</p>

                                <div class="social">
                                    <a href="https://www.facebook.com/lxrobin.bhuiyan">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="Images/team.png" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Firoz mia </h2>
                                <p class="description">volunteer </p>

                                <div class="social">
                                    <a href="https://www.facebook.com/lxrobin.bhuiyan">  <button class="button"><i class="fa fa-facebook"></i></button></a>
                                    <button class="button"><i class="fa fa-twitter"></i></button>
                                    <button class="button"><i class="fa fa-pinterest"></i></button>
                                    <button class="button"><i class="fa fa-linkedin"></i></button>
                                </div>
                                 
                            </div>
                        </div>


                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
              
        </div>
    </div>
    <div class="container">
    <div class="row">
         <h3 style="padding:5px;">Blogs: 
         
        </h3> <?php
         $post_sql = mysqli_query($conn,"SELECT * FROM `post` ORDER BY id DESC");
         
         while( $row = mysqli_fetch_assoc($post_sql)){
         ?>
         <div class="col-md-4 post">
             <label> <b><?php echo $row['post_title']; ?></b> </label>
             <p> <?php echo $row['post_desc']; ?> </p>
             <img src="admin/post_photo/<?php echo $row['photo']; ?>" width="100%" height="250px" >
             <div class="post_footer"> <span> <b>Post By </b> <?php echo $row['admin_name']; ?></span>  <span> <b><i class="fa fa-clock-o" style=""></i> </b> 
             <span>
                 <?php
                 $post_time = $row['time'];
                 $post_time = new DateTime($post_time);

$atime = $post_time -> diff( new DateTime);
 $year = $atime->y;
 $month = $atime->m;
 $day = $atime->d;
 $hour = $atime->h;
 $min = $atime->i;
 $second = $atime->s;
 
  if($year>0){
      $somoy = "Year";
      $songkha = $year;
      
  }else{
      if($month>0){
      $somoy = "Month";
      $songkha = $month;
  }else{
      if($day>0){
          $somoy = "Day";
          $songkha = $day;
          
      }else{
        if($hour>0){
          $somoy = "Hour";
           $songkha = $hour;
          
      }else{
          
         if($min>0){
          $somoy = "Min";
          $songkha = $min;
          
      }else{
          if($second>0){
          $somoy = "Second";
          $songkha = $second;
          
      } 
      }  
      }  
          
      }
      
  }
  }
 
 if($songkha>1){
     $plrel = "s";
 }else{
     $plrel = "";
 }
 
 echo $songkha;
 echo $somoy.$plrel;

                 ?>
             </span>
             ago </span> </div>
             
         </div>
         <?php
         }
         ?>
         
    </div>
    
</div>
    <!---->
   
   
    <!-- --------team End--------------- -->

    <!-- ------------contact us change responsive ------------ -->
    <section class="container-fluid contact-section">
        <div id="about" class="about section-overlay">
            <div class="container-fluid">
                <div class="row m-auto">
                    <div class="col-lg-6 col-md-12 col-12 ps-lg-5 ">
                        <div class="contact-img mt-3 ">
                            <img class="img-fluid" src="Images/c.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mt-md-5">
                        <div class="about-text">
                            <h3 class="mb-3 text-white fs-1 contact-titleAkota">Contact Us</h3>
                            <form action="" method="post" >
                            <div class="my-3 pt-3">
                                <input name="y_name" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Your name">
                            </div>
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input name="phone" type="number" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Phone number">
                            </div>
                            <div class="mb-3">
                                <textarea name="y_mess" class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Your messege" rows="3"></textarea>
                            </div>
                            <div class=" gap-2 mb-4">
                                <button name="mess_sub" type="submit" class="btn input-btn " type="button">

                                    <i class="fa fa-paper-plane me-2"></i>
                                    Send</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
      include('footer.php');
?>