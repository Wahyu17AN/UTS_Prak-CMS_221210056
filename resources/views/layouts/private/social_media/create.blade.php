@extends('layouts.app')

@section('title', 'Add Social Media Link')

@section('contents')
    <h1 class="mb-0">Add Social Media Link</h1>
    <hr />
    <form action="{{ route('social_media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="col">
                <input type="text" name="url" class="form-control" placeholder="URL" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
