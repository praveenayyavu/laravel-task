@extends('layouts.app')

@section('content')
    <h4>Edit Task</h4>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('tasks.form', ['task' => $task])
        <button type="submit" class="btn btn-success">Update Task</button>
    </form>
@endsection
