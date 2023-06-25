<link rel="stylesheet" href="{{asset('css/blocks/news_container.css')}}">

@php ($news = \App\Models\Feed::get())
@foreach($news as $new)
    @if(isset($one_news) == 1)
        @if($new->id != $one_news->id)
            <a href="{{url('/news/' . $new->id)}}" class="feed">
                <div class="feed-top" style="background: url({{url('/storage/' . $new->img_news)}}) no-repeat; background-size: cover">
                    <div class="btn-date-news">{{$new->date}}</div>
                </div>
                <div class="feed-end">
                    <p style="font-size: 20px; font-weight: bolder">{{$new->title_name}}</p>
                </div>
            </a>
        @endif
        @else
            <a href="{{url('/news/' . $new->id)}}" class="feed">
                <div class="feed-top" style="background: url({{asset('/storage/' . $new->img_news)}}) no-repeat; background-size: cover">
                    <div class="btn-date-news">{{$new->date}}</div>
                </div>
                <div class="feed-end">
                    <p style="font-size: 20px; font-weight: bolder">{{$new->title_name}}</p>
                </div>
            </a>
    @endif
@endforeach
