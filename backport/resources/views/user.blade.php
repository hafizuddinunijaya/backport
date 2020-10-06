@extends('layouts.app')

@section('content')
<h1>Send your info</h1>
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="formcontroller" method="post">
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="email" placeholder="email">
    <br>
{{@csrf_field()}}
<button type="submit">Send</button>
</form>

@endsection
