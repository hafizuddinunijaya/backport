
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">

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
    <input type="text" name="name" id="name" placeholder="name">
    <br>
    <input type="text" name="email"  id="email" placeholder="email">
    <br>
    <input type="password" name="password" id="password" placeholder="password">
{{@csrf_field()}}
<button type="submit">Send</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
