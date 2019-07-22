@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">
    {{ $data->name }}
</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>

            <div class="card-body">
                {{ $data->describtion }}
            </div>
            <a class="btn btn-success my-3" href="/todos/edit/{{$data->id}}">Edit </a>
            <a  href="/todos/delete/{{$data->id}}" class="btn btn-danger ">Delete</a>
                
            
        </div>
    </div>
</div>

@endsection