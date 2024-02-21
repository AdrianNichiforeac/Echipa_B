@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description">
    </div>
    <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Status</option>
            <option value="1">In Progress</option>
            <option value="2">Complete</option>
            <option value="3">Failed</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection