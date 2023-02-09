@extends('layouts.master')

@section('content')

@foreach ($threads as $thread)
    <div>
        <h2>{{$thread->title}}</h2>
        <p>{{$thread->content}}</p>
        <hr />
    </div>
@endforeach

@endsection