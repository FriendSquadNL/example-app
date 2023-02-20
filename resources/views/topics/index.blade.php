@extends('layouts.master')

@section('content')
    @foreach ($topics as $topic)
        <div>
            <a  href="/topics/{{$topic->id}}" style="text-decoration: none">{{$topic->title}}</a>
            <p>{{$topic->content}}</p>
            <hr />
        </div>
    @endforeach
@endsection