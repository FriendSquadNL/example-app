
@extends('layouts.master')

@section('content')

@foreach ($replies as $reply)
    <div>
        <p>{{$reply->user->name}}</p> 
        <p>{{$reply->topic->title}}</p>
        <p>{{$reply->content}}</p>
        <hr/>
    </div>
@endforeach

@endsection