@foreach($data as $data)
<div class="ms-4 col-lg-3 position-relative">
    <div class="row">
            <div class="col-12">
            <div class="ratio ratio-16x9">
                <!-- <video class="" src="assets/videos/vid3.mp4" controls></video> -->
                <iframe width="940" height="560" src="{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            </div>
            <div class="col-12 text-center mt-3">
                <p class="montserrat-alphaProjectText">{{$data->title}} | Official Trailer</p>
            </div>
    </div>
</div>
@endforeach
            