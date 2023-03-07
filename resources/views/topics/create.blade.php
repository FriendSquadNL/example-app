@extends('layouts.master')

@section('content')

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('topics.store')}}" method="post" class="form">
        @csrf
       <br>
        <div>
            <input type="text" name="title" placeholder="Enter a title" />
            <br>    
            <textarea name="content" cols="30" rows="10" placeholder="Enter text"></textarea>
        <h5>{{(Auth::user()->name)}}</h5>
            <input type="hidden" name="thread_id" value="1">
            <!-- <input type="hidden" name="user_id" value="1"> -->
            <input type="submit" value="submit">
        </div>
    </form>
@endsection