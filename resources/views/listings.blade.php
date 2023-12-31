<h1>{{$heading}}</h1>

@if(count($listings) === 0)
    <p>No listings found</p>
@else
    @foreach($listings as $listing)
        <h2>
            <a href="/listings/{{$listing['id']}}">
{{$listing['id']}} . {{$listing['title']}}
            </a>
        </h2>
        <p>{{$listing['description']}}</p>
    @endforeach
@endif
