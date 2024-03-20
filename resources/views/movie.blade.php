@foreach($data as $data)
<div class="col-lg-3 mb-5 mb-lg-0">
<div class="card" style="width: 18rem;">
    <img src="movieimage/{{$data->image}}" class="card-img-top movie-image" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$data->title}}</h5>
    <p class="card-text">{{$data->description}}</p>
    <p class="mt-3">{{$data->link}}</p>
    <a href="{{route('editmovie',$data->id)}}" class="btn btn-primary mt-3">Edit</a>
    <button class="btn btn-danger mt-3 deletemoviebtn" value="{{$data->id}}">Delete</button>
    </div>
</div>
</div>
@endforeach