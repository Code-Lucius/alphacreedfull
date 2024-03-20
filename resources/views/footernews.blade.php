@foreach($footernews as $footernews)
<div>
    <a href=" {{$footernews->url}}" class="footer--a"><i class="fa-solid fa-angle-right"></i>{{$footernews->title}}</a>
    <p class="text-white">{{$footernews->publishedAt}}</p>
</div>
@endforeach