@extends('layouts.app')

@section('content')
    <h4>Create New Task</h4>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        @include('tasks.form')
        <button type="submit" class="btn btn-primary">Save Task</button>
    </form>
@endsection
