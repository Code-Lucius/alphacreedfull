
@foreach($blog as $blog)
<div class="blog--div ms-4 col-lg-3 position-relative" style="background-image:url('{{$blog->image}}')">
    <div class="row position-absolute bottom-0">
        <div class="col-10 blog--headline mb-4 mx-auto" style="background-color: rgba(0, 0, 0, 0.7)">
            <a href="{{$blog->url}}" class="blog--a montserrat-alphatextfont" target="_blank">{{$blog->title}}</a>
        </div>
    </div>
</div>
@endforeach