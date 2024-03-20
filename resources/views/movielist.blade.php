@foreach($data as $data)
<div class="col-lg-3">
    <div class="row">
        <div class="col-12 blog--div text-center">
            <img src="movieimage/{{$data->image}}" alt="Poster of the movie {{$data->title}}" class="img-fluid blog--img" />
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p class="montserrat-alphaProjectText mt-3">{{$data->title}}</p>
        </div>
    </div>                
</div>       
@endforeach
            