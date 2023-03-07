@extends('layouts.master')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('replies.store')}}" method="post" class="form">
        @csrf
       <br>
        <!-- <div>
            <input type="text" name="title" placeholder="Enter a title" />
        </div> -->
        <br>
        <div>
            <textarea name="content" cols="30" rows="10" placeholder="Enter text"></textarea>
        </div>

        <div>
            <h5>{{(Auth::name()->name)}}</h5>
            <input type="hidden" name="thread_id" value="1">
            <!-- <input type="hidden" name="user_id" value="1"> -->
            <input type="hidden" name="topic_id" value="1">
            <input type="submit" value="submit">
        </div>
    </form>

@endsection