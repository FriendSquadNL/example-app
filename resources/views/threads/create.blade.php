@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-center">
        <form action="/threads" method="post" class="w-50">
            @csrf
            <br>
            <div class="form-group">
                <!-- <label for="*">Enter name</label> -->
                <!-- <input type="text" name="title"> -->
                <input type="text" name="title" name="content" id="" cols="30" rows="1" placeholder="Enter title"/>
            </div>
                <br>
            <div>
                <textarea name="content" id="" cols="30" rows="10" placeholder="Enter text"></textarea>
                <input type="hidden" name="user_id" value="1">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>
@endsection
