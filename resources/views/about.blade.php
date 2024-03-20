<!DOCTYPE html>
<html lang="en">
     @include('head')
<body>
    <!-- NAV SECTION STARTS HERE -->
    @include('nav')

    <!-- NAV SECTION ENDS HERE -->
    <!-- ABOUT IMAGE STARTS HERE -->
    <div class="container-fluid">
         <div class="row">
            <div class="col">
                 <img src="assets/images/about.jpg" alt="" class="img-fluid">
            </div>
         </div>
    </div>
    <!-- ABOUT IMAGE ENDS HERE -->
    <div class="container mt-5" id="story">
        <div class="row justify-content-between">
             <div class="col-lg-6">
                <p class="about--header montserrat-alphaheader4">Our Story</p>
                <p class="montserrat-alphatextfont">
                    For 100 years, Alpha Creed Studios has been the foundation on which The Alpha Creed Company was built. Today it brings quality movies, episodic storytelling, and stage plays to consumers throughout the world. The Walt Disney Studios encompasses a collection of respected film studios, including Disney, Walt Disney Animation Studios, Pixar Animation Studios, Lucasfilm, Marvel Studios, Searchlight Pictures, and 20th Century Studios. It is also home to Disney Theatrical Group, producer of world-class stage shows, as well as Disney Music Group.
                  </p>
             </div>
             <div class="col-lg-4 mt-5">
                <div class="row">
                    <div class="col-12 justify-content-center d-flex">
                        <img src="assets/images/ceo.jpg" alt="" class="img-fluid about--image">
                    </div>
                    <p class="text-center mt-3 montserrat-alphatextfont">Eric Creed | Our CEO</p>
                </div>
                  
             </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="about--header montserrat-alphaheader4">Core Values</p>
                <div class="row">
                    <div class="col text-end">
                         <button class="btn blog--btn" id="slideLeft"><i class="fa-solid fa-arrow-left"></i></button>
                         <button class="btn blog--btn" id="slideRight"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="row blog--wrapper flex-nowrap mt-3" id="blog--wrapper">
                    <div class="values--div ms-2 col-lg-4 position-relative">
                        <div class="row position-absolute justify-content-center">
                            <div class="col-11 text-white mt-5">
                                <p class="montserrat-alphatextfont">01</p>
                                <p class="mt-4 montserrat-alphaheader4">Collaborative</p>
                                <p class="mt-4 values--text">As an employee, you may want to feel empowered to make decisions and take action. And while autonomy is an important core value, collaboration is also vital to your career success. Being a strong team player will help you grow within your company and your career.</p>
                            </div>
                        </div>
                    </div>
                    <div class="values--div ms-5 col-lg-4 position-relative">
                        <div class="row position-absolute justify-content-center">
                            <div class="col-11 text-white mt-5">
                                <p class="montserrat-alphatextfont">01</p>
                                <p class="mt-4 montserrat-alphaheader4">Collaborative</p>
                                <p class="mt-4 values--text">As an employee, you may want to feel empowered to make decisions and take action. And while autonomy is an important core value, collaboration is also vital to your career success. Being a strong team player will help you grow within your company and your career.</p>
                            </div>
                        </div>
                    </div>
                    <div class="values--div ms-5 col-lg-4 position-relative">
                        <div class="row position-absolute justify-content-center">
                            <div class="col-11 text-white mt-5">
                                <p class="montserrat-alphatextfont">01</p>
                                <p class="mt-4 montserrat-alphaheader4">Collaborative</p>
                                <p class="mt-4 values--text">As an employee, you may want to feel empowered to make decisions and take action. And while autonomy is an important core value, collaboration is also vital to your career success. Being a strong team player will help you grow within your company and your career.</p>
                            </div>
                        </div>
                    </div>
                    <div class="values--div ms-5 col-lg-4 position-relative">
                        <div class="row position-absolute justify-content-center">
                            <div class="col-11 text-white mt-5">
                                <p class="montserrat-alphatextfont">01</p>
                                <p class="mt-4 montserrat-alphaheader4">Collaborative</p>
                                <p class="mt-4 values--text">As an employee, you may want to feel empowered to make decisions and take action. And while autonomy is an important core value, collaboration is also vital to your career success. Being a strong team player will help you grow within your company and your career.</p>
                            </div>
                        </div>
                    </div>
                    <div class="values--div ms-5 col-lg-4 position-relative">
                        <div class="row position-absolute justify-content-center">
                            <div class="col-11 text-white mt-5">
                                <p class="montserrat-alphatextfont">01</p>
                                <p class="mt-4 montserrat-alphaheader4">Collaborative</p>
                                <p class="mt-4 values--text">As an employee, you may want to feel empowered to make decisions and take action. And while autonomy is an important core value, collaboration is also vital to your career success. Being a strong team player will help you grow within your company and your career.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        <div class="row mt-2">
             <div class="col mt-5" id="people">
                <p class="about--header montserrat-alphaheader4 mt-5">Our Key People</p>
             </div>
        </div>
        <div class="row mb-5">
        
             @include('aboutstaff')

             
        </div>
    </div>
    <!-- FOOTER SECTION STARTS HERE -->
    @include('footer')
    <!-- FOOTER SECTION ENDS HERE -->
    <script type="text/javascript" src="assets/script/jquery/jquery.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>      
</body>
</html>