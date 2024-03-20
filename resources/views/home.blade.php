<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <!-- NAV SECTION STARTS HERE -->
    @include('nav')

    <!-- NAV SECTION ENDS HERE -->
    <!-- HERO STARTS HERE -->
    <div class="container-fluid">
        <div class="row hero--images align-items-center">
              <div class="col-8 col-lg-6 offset-lg-1">
                <p class="hero--text">Movie Production</p>
                <h1 class="hero--header">AlphaCreed</h1>
                <p class="hero--header2 mt-3">Telling the bigger story...</p>
            </div>
         </div>
    </div>
    <!-- HERO ENDS HERE -->
    <!-- MOVIES SECTION STARTS HERE -->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col mt-5">
                <p class="mt-5 mb-5 about--header montserrat-alphaheader4 text-center">Latest Movies</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                 <button class="btn blog--btn" id="goLeft"><i class="fa-solid fa-arrow-left"></i></button>
                 <button class="btn blog--btn" id="goRight"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="row blog--wrapper flex-nowrap mt-3" id="movies--wrapper">
            
        @include("movielist")
            
        </div>
    </div>
    <!-- MOVIES SECTION ENDS HERE -->
    <!-- PROJECT SECTION STARTS HERE -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col mt-3">
                <p class="mt-5 mb-5 about--header montserrat-alphaheader4 text-center">Trailers</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                 <button class="btn blog--btn" id="scrollLeft"><i class="fa-solid fa-arrow-left"></i></button>
                 <button class="btn blog--btn" id="scrollRight"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="row blog--wrapper flex-nowrap mt-3" id="project--wrapper">
            @include("trailers")
        </div>
    </div>
    <!-- PROJECT SECTION ENDS HERE -->
    <!-- ABOUT SECTION STARTS HERE-->
    <div class="container-fluid mt-5">
          <div class="row ms-4">
              <div class="col-lg-8 mt-3">
                  <div class="row">
                       <div class="col-12">
                            <p class="aboutHeader">We Are</p>
                            <p class="aboutHeader">AlphaCreed</p>
                       </div>
                       <div class="col-12">
                        <p class="about--p">
                            For 100 years, Alpha Creed Studios has been the foundation on which The Alpha Creed Company was built. Today it brings quality movies, episodic storytelling, and stage plays to consumers throughout the world. The Walt Disney Studios encompasses a collection of respected film studios, including Disney, Walt Disney Animation Studios, Pixar Animation Studios, Lucasfilm, Marvel Studios, Searchlight Pictures, and 20th Century Studios. It is also home to Disney Theatrical Group, producer of world-class stage shows, as well as Disney Music Group.
                          </p>
                          
                            <a href="{{url('/about#story')}}" class="about--link montserrat-alphatextfont btn about--btn mb-5 text-center">Learn More</a>
                        
                       </div>
                  </div>
              </div>
          </div>
     </div>
    <!-- ABOUT SECTION ENDS HERE-->

    <!-- BLOG SECTION STARTS HERE -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col mt-3">
                <p class="mt-5 mb-5 about--header montserrat-alphaheader4 text-center">Blog Posts</p>
                <!-- <button class="ms-auto"><FontAwesomeIcon icon={faArrowRightLong} /></button> -->
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                 <button class="btn blog--btn" id="slideLeft"><i class="fa-solid fa-arrow-left"></i></button>
                 <button class="btn blog--btn" id="slideRight"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="row blog--wrapper flex-nowrap mt-3" id="blog--wrapper">
         @include('blogging')
        </div>
        <div class="row">
            <div class="col mb-4 text-center mt-3">
                <a href="{{url('/blog')}}" class="btn about--btn">View More</a>
            </div>
        </div>
    </div>
    <!-- BLOG SECTION ENDS HERE -->
    <!-- FOOTER SECTION STARTS HERE -->
    @include('footer')
    <!-- FOOTER SECTION ENDS HERE -->

    <script type="text/javascript" src="assets/script/jquery/jquery.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>   
    <script type="text/javascript">
     $(document).ready(function(){
    const buttonRight = document.getElementById('slideRight');
    const buttonLeft = document.getElementById('slideLeft');

    buttonRight.onclick = function () {
        document.getElementById('blog--wrapper').scrollLeft += 400;
    };
    buttonLeft.onclick = function () {
        document.getElementById('blog--wrapper').scrollLeft -= 400;
    }; 

    const btnRight = document.getElementById('scrollRight');
    const btnLeft = document.getElementById('scrollLeft');

    btnRight.onclick = function () {
        document.getElementById('project--wrapper').scrollLeft += 1600;
    };
    btnLeft.onclick = function () {
        document.getElementById('project--wrapper').scrollLeft -= 1600;
    }; 

    const btnR = document.getElementById('goRight');
    const btnL = document.getElementById('goLeft');

    btnR.onclick = function () {
        document.getElementById('movies--wrapper').scrollLeft += 1600;
    };
    btnL.onclick = function () {
        document.getElementById('movies--wrapper').scrollLeft -= 1600;
    }; 

    function fullYear(){
        document.getElementById('year').innerHTML = new Date().getFullYear();
    }

    

    fullYear();
       })
    </script>   
</body>
</html>