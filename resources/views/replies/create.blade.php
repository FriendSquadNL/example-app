@extends('layouts.master')

@section('content')

    <form action="/replies" method="post">
        @csrf
        <input type="text" name="title">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="topic_id" value="1">
        <input type="submit" value="submit">
    </form>

@endsection