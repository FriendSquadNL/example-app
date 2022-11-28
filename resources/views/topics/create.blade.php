@if ($errors->any())

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif

<form action="/topics" method="post">
    @csrf
    <input type="text" name="title">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <select name="thread_id">
        @foreach($threads as $thread)
            <option value="{{$thread->id}}">{{$thread->title}}</option>
        @endforeach
    </select>
    <input type="hidden" name="user_id" value="1">
    <input type="submit" value="submit">
</form>