@foreach ($replies as $reply)
    <div>
        <h2>{{$reply->title}}</h2>
        <p>{{$reply->content}}</p>
        <hr />
    </div>
@endforeach