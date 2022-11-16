<!doctype html>
<html lang="en">

<head>
    <title>Eambulance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('frondend/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

  </head>

  <body>

  <div class="site-wrap" id="home-section">

       <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
     <div class="site-mobile-menu-close mt-3">
       <span class="icon-close2 js-menu-toggle"></span>
     </div>
   </div>
   <div class="site-mobile-menu-body"></div>
         </div>


     @include('frontend.fixed.topbar')

 
 <div class="hero" style="background-image: url('images/hero_1_a.jpg');">
   
   <div class="container">
     <div class="row align-items-center justify-content-center">
       <div class="col-lg-10">

         <div class="row mb-5">
           <div class="col-lg-7 intro">
             <h1><strong> 24/7</strong> Ambulance Booking Service .</h1>
           </div>
         </div>
         
         <form class="trip-form">
           
           <div class="row align-items-center">
             
             <div class="mb-3 mb-md-0 col-md-3">
               <select name="" id="" class="custom-select form-control">
                 <option value="">Select Type</option>
                 <option value="">Isolation Ambulance</option>
                 <option value="">Advanced Life Support Ambulance</option>
                 <option value="">Basic Life Support Ambulance</option>
               
               </select>
             </div>
             <div class="mb-3 mb-md-0 col-md-3">
               <div class="form-control-wrap">
                 <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                 <span class="icon icon-date_range"></span>

               </div>
             </div>
             <div class="mb-3 mb-md-0 col-md-3">
               <div class="form-control-wrap">
                 <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
                 <span class="icon icon-date_range"></span>
               </div>
             </div>
             <div class="mb-3 mb-md-0 col-md-3">
               <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
             </div>
           </div>
           
         </form>

       </div>
     </div>
   </div>
 </div>



 <div class="site-section">
   <div class="container">
     <h2 class="section-heading"><strong>How it works?</strong></h2>
     <p class="mb-5">Easy steps to get you started</p>    

     <div class="row mb-5">
       <div class="col-lg-4 mb-4 mb-lg-0">
         <div class="step">
           <span>1</span>
           <div class="step-inner">
             <span class="number text-primary">01.</span>
             <h3>Select a Ambulance</h3>
         
           </div>
         </div>
       </div>
       <div class="col-lg-4 mb-4 mb-lg-0">
         <div class="step">
           <span>2</span>
           <div class="step-inner">
             <span class="number text-primary">02.</span>
             <h3>Fill up form</h3>
          
           </div>
         </div>
       </div>
       <div class="col-lg-4 mb-4 mb-lg-0">
         <div class="step">
           <span>3</span>
           <div class="step-inner">
             <span class="number text-primary">03.</span>
             <h3>Payment</h3>
             
           </div>
         </div>
       </div>
     </div>
     
   </div>
 </div>
 
   
    




<div class="site-section bg-primary py-5">
 <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-7 mb-4 mb-md-0">
       <h2 class="mb-0 text-white">What are you waiting for?</h2>
       
     </div>
     <div class="col-lg-5 text-md-right">
       <a href="#" class="btn btn-primary btn-white">Book an Ambulance now</a>
     </div>
   </div>
 </div>
</div>

    
      
      <footer class="site-footer">
        
        @include('frontend.fixed.footer')

      </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
