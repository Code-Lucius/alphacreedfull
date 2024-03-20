@foreach($staff as $staff)
<div class="col-lg-3 mb-5 mt-3">
    <img src="staffimage/{{$staff->image}}" alt="" class="img--about mt-5">
    <p class="text-center montserrat-alphatextfont mt-3">{{$staff->username}} | {{$staff->position}}</p>
</div>
@endforeach
             