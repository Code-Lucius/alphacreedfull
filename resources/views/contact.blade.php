<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <!-- NAV SECTION STARTS HERE -->
    @include('nav')
    <!-- NAV SECTION ENDS HERE -->
    <!-- CONTACT IMAGE STARTS HERE -->
    <div class="container-fluid">
        <div class="row contact--image align-content-center">
              <div class="col-lg-6 offset-lg-1">
                   <p class="contact--header mb-0">Contact us</p>
                   <p class="contact--text">We are happy to help</p>
              </div>
        </div>
    </div>
    <!-- CONTACT IMAGE ENDS HERE -->
    <div class="container mt-5">
        <div class="row">
             <div class="col">
                  <p class="contact--header">Get in touch with us</p>
                  <p class="montserrat-alphatextfont">Fill the form below</p>
             </div>
        </div>
        <div class="row">
             <div class="col-lg-8">
                    @if(session('status'))
                        <h6 class="alert alert-success">
                            {{ session('status') }}
                        </h6>
                    @endif
                  <form action="{{url('/sendmessage')}}" method="post">
                        @csrf
                        <input type="text" class="contact--form mt-4" name="contactName" placeholder="Your Name *">
                        <input type="email" class="contact--form mt-4" name="contactEmail" placeholder="Your Email *">
                        <textarea id="" cols="" rows="" class="contact--form mt-4" name="contactMessage" placeholder="Your Message *"></textarea>
                        <button class="mt-5 btn about--btn" type="submit">Send Message</button>
                  </form>
             </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-lg-3 contact--address mt-5 montserrat-alphatextfont">
                    <p class="mt-5 mb-2 contact--address--header">Chicago HQ</p>
                    <p class="mt-5">234 Freetown Road</p>
                    <p>Chicago, United States</p>
                    <p>555-667-665-890</p>
               </div>
               <div class="col-lg-3 contact--address mt-5 montserrat-alphatextfont">
                    <p class="mt-5 mb-2 contact--address--header">Chicago HQ</p>
                    <p class="mt-5">234 Freetown Road</p>
                    <p>Chicago, United States</p>
                    <p>555-667-665-890</p>
                </div>
                <div class="col-lg-3 contact--address mt-5 montserrat-alphatextfont">
                    <p class="mt-5 mb-2 contact--address--header">Chicago HQ</p>
                    <p class="mt-5">234 Freetown Road</p>
                    <p>Chicago, United States</p>
                    <p>555-667-665-890</p>
               </div>
            </div>
        </div>
        <div class="row mt-5">
             <div class="col-lg-8 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.3063877836644!2d-74.0470753239754!3d40.68924937139704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25090129c363d%3A0x40c6a5770d25022b!2sStatue%20of%20Liberty!5e0!3m2!1sen!2sng!4v1709590441037!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact--map"></iframe>
             </div>
        </div>
    </div>
    <!-- FOOTER SECTION STARTS HERE -->
    @include('footer')
    <!-- FOOTER SECTION ENDS HERE -->
    <script type="text/javascript" src="assets/script/jquery/jquery.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>