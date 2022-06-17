@extends('layout')
@section('content')
    <h1 class="title">To Do List</h1>
    <h3 class="edit-title">Edit Your Task</h3>

    <form class="edit-form" action="{{route('tasks.update',$tasks->id)}}" method="post">
    @csrf
        @method('put')
    <input id="edit-task" type="text" name="task"  class="form-control d-inline w-75" aria-describedby="Task" value="{{$tasks->task}}">
    <input type="submit" class="btn btn-primary add-btn" value="Edit">


</form>

@endsection
