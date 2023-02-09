@extends('layouts.master')

@section('content')

@foreach ($users as $user)
    <div>
        <h2>{{$user->title}}</h2>
        <p>{{$user->content}}</p>
       
       
        @foreach ($user->topics as $topic)
            <p>{{$topic->title}}</p>
            <p>{{$topic->content}}</p>
            <hr/>
        @endforeach
        
    </div>
@endforeach

@endsection