
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>
  WELCOME TO PLAN INTERNATIONAL
  </title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="Assets/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="Assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="Assets/plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="Assets/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="Assets/plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="Assets/css/style.css" rel="stylesheet">

  </head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="Assets/images/Plan Logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home
          </a></li>


        <li class="nav-item @@about">
          <a class="nav-link" href="https://plan-international.org/" target="_blank"> Visit Website </a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">


  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
        <h1 class="text-white font-weight-bold mb-4">Welcome To Plan International</h1>
        <p class="text-white mb-5">Document Management System</p>
     
       
        
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
         
          @if(auth()->guard('admin')->check())
            <a href="{{ route('admin.home') }}" class="btn btn-main-md">Go To Dashboard</a>
            <!-- <a href="{{ url('/admin') }}" class="btn btn-main-md">Go To Dashboard</a> 
            -->
          @elseif(auth()->guard('web')->check())
            <a href="{{ route('dashboard') }}"class="btn btn-main-md">Go To Dashboard</a>
          @else
            <a href="{{ route('login') }}"class="btn btn-main-md">lOG IN NOW</a>
            
          @endif
          </div>

            
        
      </div>
      <div class="col-md-6 text-center order-1 order-md-2">
        <img class="img-fluid" src="Assets/images/DMS.png" alt="screenshot">
      </div>
    </div>
  </div>
</section>
<!--====  End of Hero Section  ====-->

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ml-auto justify-content-center">
        <!-- Feature Mockup -->
        <div class="image-content">
          <img class="img-fluid" src="Assets/images/feature/dfeature-new-01.jpg" alt="phone">
        </div>
      </div>
      <div class="col-lg-6 mr-auto align-self-center">
        <div class="feature-content">
          <!-- Feature Title -->
          <h2>Increase your productivity with Plan User App</a></h2>
          <!-- Feature Description -->
          <p class="desc">Plan international New DMS App Will Help You To Work More Faster And Efficient In Every Aspect of Your Productive Life.</p>
            <a href="#" class="btn btn-main-md">Download Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="text-center bg-dark py-4">
    <p>Developed By Team Spark</p>
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="Assets/plugins/jquery/jquery.min.js"></script>
  <script src="Assets/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="Assets/plugins/slick/slick.min.js"></script>
  <script src="Assets/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="Assets/plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="Assets/plugins/aos/aos.js"></script>
  <script src="Assets/js/script.js"></script>


</body>

</html>

