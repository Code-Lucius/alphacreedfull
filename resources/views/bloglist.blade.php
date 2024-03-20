@foreach($responseBody->articles as $newsitem)
<div class="col-lg-4">
        <img src="{{$newsitem->image}}" alt="news article image" class="img-fluid">
        <div class="row">
        <div class="col blog--header mt-3"><a href="{{$newsitem->url}}" class="blog--link" target="_blank">{{$newsitem->title}}</a></div>
        </div>
        <div class="row">
        <div class="col-10">
            <p class="blog--text">{{$newsitem->description}}</p>
        </div>
        </div>
</div>
@endforeach