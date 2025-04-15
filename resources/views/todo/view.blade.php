@extends('layouts.app')
@section('content')
<div class="container container-blue-archive">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-blue-archive">Todo Details</h2>
        </div>
        <div class="col-md-6">
            <div class="float-right">
                <a href="{{ route('todo.index') }}" class="btn btn-blue-archive">Back</a>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <br><br>
            <div class="todo-title card-body-blue-archive">
                <strong class="text-blue-archive">Title: </strong> {{ $todo->title }}
            </div>
            <br>
            <div class="todo-description card-body-blue-archive">
                <strong class="text-blue-archive">Description: </strong> {{ $todo->description }}
            </div>
            <br>
            <div class="todo-status card-body-blue-archive">
                <strong class="text-blue-archive">Status: </strong> {{ $todo->status }}
            </div>
        </div>
    </div>
</div>
@endsection
