<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <!-- NAV SECTION STARTS HERE -->
    @include('nav')
    <!-- NAV SECTION ENDS HERE -->
    <div class="container-fluid">
        <div class="row">
            <div class="col mt-5">
                 <p class="ms-lg-5 d-inline-block contact--header">Latest</p>
            </div>
        </div>
        <div class="row">
            <div class="col ms-1 ms-lg-5 me-1 me-lg-5 blog--latest">
                    <img src="{{$responseBody->articles['0']->image}}" alt="Post image" class="blog--latest--image img-fluid">
                </div>
                <div class="row">
                    <div class="col-lg-6 blog--headline ms-lg-5 me-lg-5 mt-3">
                        <a href="{{$responseBody->articles['0']->url}}" class="blog--link">{{$responseBody->articles['0']->title}}</a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                 <p class="ms-lg-5 d-inline-block contact--header">All News</p>
            </div>
        </div>
        <div class="row ms-lg-5 me-lg-5 justify-content-between">
            @include('bloglist')
            
        </div>
        <!-- <div class="row mt-5">
             <div class="col text-center">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a class="active" href="blog.html">1</a>
                    <a href="blog2.html">2</a>
                    <a href="blog3.html">3</a>
                    <a href="blog4.html">4</a>
                    <a href="blog5.html">5</a>
                    <a href="#">&raquo;</a>
                  </div>
             </div>
        </div> -->
    </div>
    <!-- FOOTER SECTION STARTS HERE -->
    @include('footer')
    <!-- FOOTER SECTION ENDS HERE -->
    <script type="text/javascript" src="assets/script/jquery/jquery.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>