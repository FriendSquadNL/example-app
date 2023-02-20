@extends('layouts.master')

@section('content')

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('topics.store') }}" method="post" class="form">
        @csrf
       <br>
        <div>
            <input type="text" name="title" placeholder="Enter a title" />
        </div>
        <br>
        <div>
            <textarea name="content" cols="30" rows="10" placeholder="Enter text"></textarea>
        </div>

        <div>
            <select name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input type="hidden" name="user_id" value="1">
            <input type="submit" value="submit">
        </div>
    </form>

@endsection