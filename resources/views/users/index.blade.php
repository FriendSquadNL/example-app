@foreach ($userss as $user)
    <div>
        <h2>{{$user->title}}</h2>
        <p>{{$user->content}}</p>
        <hr />
    </div>
@endforeach