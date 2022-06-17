@extends('layout')
@section('content')
    <h1 class="title">To Do List</h1>


    @if( session('msg') )
        <div class="alert alert-success mt-3 alert-dismissible fade show message" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form class="tasks-form" action="{{route('tasks.store')}}" method="post">
        @csrf
{{--        <label for="add-task" class="form-label d-block">Add Task</label>--}}
        <input id="add-task" type="text" name="task"  class="form-control d-inline w-75" aria-describedby="Task" placeholder="Enter Your Task">

        <input type="submit" class="btn btn-primary add-btn" value="Add"><br>
        <p style="color: #c60000">
        @error('task')
        {{ $message }}
        @enderror
        </p>
    </form>
    <h3 class="edit-title">You have {{count($doneTask)}} Tasks to complete</h3>
    <form class="tasks-form2" action="{{route('tasks.index')}}" method="get">
        @foreach($tasks as $task)
        <input type="text"  class="form-control d-inline w-75 mt-3" aria-describedby="Task" placeholder="Add a Task" value="{{$task->task}}" readonly>

        </input>

{{--        <input type="submit" class="btn btn-secondary done-btn" value="Done">--}}


        <a href="{{route('tasks.edit' , $task->id)}}" class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#g8g8g8" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg></a>

                @if($task->isdone == 1)

                    <a type="submit" class="done-btn" href="{{route('tasks.check' , $task->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#198754" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg></a>

                    @else
                <a type="submit" class="done-btn" href="{{route('tasks.uncheck' , $task->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    </svg></a>
                @endif



        </form>
        @endforeach

@endsection
