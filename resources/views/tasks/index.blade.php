@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
<div class="row">
    <h4>Tasks</h4>
</div>
<div class="row">
    <div class="col-md-10">
        <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-dark mb-3">Add</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Timestamp</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>
                        <div class="row">
                            <a href="{{route('tasks.edit' , ['task'=>$task -> id])}}" class="btn btn-sm btn-warning col-4 ms-3">Edit</a>
                            <form class="col-4 " action="{{ route('tasks.destroy', ['task' => $task]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" {{ route('tasks.destroy', ['task' => $task]) }}>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No tasks</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection