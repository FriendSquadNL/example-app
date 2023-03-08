@extends('layouts.master')

@section('content')

 @if(Auth::check())
       {{$topic->title}} <br>
       {{$topic->content}}
       <br>  <br> <br> 
       @foreach($topic->replies as $reply)
       {{$reply->content}}
       {{$reply->user_id}}
       @endforeach
       
       <br> <br> <br> <br>
    @if(Auth::check())
      <form action="{{route('replies.store')}}" method="post" class="form">
        @csrf
        <input type="text" name="title"  placeholder="Enter a title"> <br> <br>
        <textarea name="content" id="" cols="30" rows="10"  placeholder="Enter a content"></textarea>
        <br>
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="topic_id" value="1">
        <br> 
          <h5>{{(Auth::user()->name)}}</h5>
       <input type="submit" value="submit">
      </form>
    @endif()
    <br> <br> <br> <br>

@endsection