

@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            Todos
          </div>
    
          <div class="card-body">
            <ul class="list-group">
              @foreach($todos as $todo)
                <li class="list-group-item">
                  {{ $todo->name }}
                  <a class="btn btn-success ml-3 float-right " href="/todos/edit/{{$todo->id}}">Edit </a>
                  <a  href="/todos/{{$todo->id}}" class="btn btn-primary  float-right">View</a>
                  
                  <a  href="/todos/delete/{{$todo->id}}" class="btn btn-danger  mr-3 float-right">Delete</a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
 @endsection