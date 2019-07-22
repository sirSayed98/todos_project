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
            <a class="btn btn-primary" href="/todos/edit/{{$data->id}}">Edit </a>
        </div>
    </div>
</div>

@endsection