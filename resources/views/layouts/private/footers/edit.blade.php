@extends('layouts.app')

@section('title', 'Edit Footer')

@section('contents')
    <h1 class="mb-0">Edit Footer</h1>
    <hr />
    <form action="{{ route('footers.update', $footer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $footer->name }}" required>
            </div>
            <div class="col">
                <label for="url">URL</label>
                <input type="text" name="url" class="form-control" value="{{ $footer->url }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
