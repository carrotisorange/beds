<!DOCTYPE html>
<html lang="">
 <link href="{{ asset('/yeinydd/images/demo/favicon.ico') }}" rel="icon">
 <link href="{{ asset('/arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<head>
<title>Happy 12th monthsarry</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ asset('/yeinydd/layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body id="top">

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{ asset('yeinydd/images/demo/backgrounds/bg.jpeg') }}');"> 
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
     
      <div class="carousel-inner">
        <div class="carousel-item active">
          <iframe src="https://open.spotify.com/embed/playlist/1wG6VfX215CrJQntPNGwQc" width="300" height="500" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
          <br>
          <h5>Play a song for best experience</h5>
          <p>hand picked some of songs that I heard you played or I think you like...</p>
        </div>
        <div class="carousel-item">
          <video width="500" autoplay loop muted>
            <source src="{{ asset('yeinydd/images/demo/backgrounds/Colorful Birthday Animated Social Media.mp4') }}" type="video/mp4">
            Your browser does not support HTML video.
          </video>
          {{-- <img class="d-md-block w-50" src="{{ asset('yeinydd/images/demo/backgrounds/IMG_2809.jpg') }}" alt="Second slide"> --}}
          <h5>Summary of <b>The Great Gatsby</b> by F. Scott Fitzgerald</h5>
          <p>Narrated by yours truly &#128521;</p>
        </div>
        <div class="carousel-item">
          <img class="d-md-block w-50" src="..." alt="Third slide">
          <h5>.asdasdasd</h5>
          <p>...</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  
  </div>

</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset('yeinydd/layout/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('yeinydd/layout/scripts/jquery.backtotop.js') }}"></script>
<script src="{{ asset('yeinydd/layout/scripts/jquery.mobilemenu.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  <script>
    document.getElementById('vid').play();
</script>
</script>
</body>
</html>