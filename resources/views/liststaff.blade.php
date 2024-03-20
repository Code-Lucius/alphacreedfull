@foreach($staff as $staff)
<div class="col-lg-3 mt-4">
    <div class="card" style="width: 18rem;">
        <img src="staffimage/{{$staff->image}}" class="card-img-top movie-image" alt="image of staff">
        <div class="card-body">
            <h5 class="card-title">{{$staff->username}} | {{$staff->position}}</h5>
            <a href="{{route('editstaff',$staff->id)}}" class="btn btn-primary">Edit</a>
            <button class="btn btn-danger deletestaffbtn" value="{{$staff->id}}">Delete</button>
        </div>
    </div>
</div>
@endforeach