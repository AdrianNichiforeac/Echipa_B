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
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger delete-contact" data-id="{{$task->id}}">
                            Delete
                        </button>
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