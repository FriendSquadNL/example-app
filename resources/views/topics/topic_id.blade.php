@extends('layouts.master')

@section('content')
       {{$topic->title}} <br>
       {{$topic->content}}
       <br>  <br> <br> 
       @foreach($topic->replies as $reply)
       {{$reply->content}}
       {{$reply->user_id}}
       @endforeach
       
       <br> <br> <br> <br>

    <form action="{{route('topics.store')}}" method="post" class="form">
        @csrf
        <input type="text" name="title"  placeholder="Enter a title"> <br> <br>
        <textarea name="content" id="" cols="30" rows="10"  placeholder="Enter a content"></textarea>
        <br>
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="topic_id" value="1">
        <br>
              <select name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
              </select>
       <input type="submit" value="submit">
    </form>
@endsection