@extends('layouts.master')

@section('content')
    @foreach ($topics as $topic)
        <div>
            <h2>{{$topic->title}}</h2>
            <p>{{$topic->content}}</p>
            <hr />
        </div>
    @endforeach
@endsection