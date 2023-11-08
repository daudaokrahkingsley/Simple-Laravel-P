@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')

    <form action="" method="post" class="mt-4 p-4">
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" name="" value="Name here">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" rows="3">Description here</textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Update">
        </div>
    </form>

@endsection