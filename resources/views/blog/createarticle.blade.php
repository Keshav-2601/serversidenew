@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('storearticle')}}">
@csrf
<label for ="title">Title</label>
<input id="title" name="title" type="text" />
<label for="content">Content</lable>
<textarea id="content" name="content"></textarea>

<button type="submit">SUBMIT</button>
</form>
@endsection