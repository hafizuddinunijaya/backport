@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Information') }}</div>

                <div class="card-body">

                    <h1>User List</h1>

                   <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                      </tr>

                        @foreach($data as $item)
                        <tr>
                            <td>{{$item->name}} </td>
                            <td>{{$item->email}}</td>
                       </tr>
                        @endforeach
                    </table>
                    <br>


                        {{$data->links()}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
