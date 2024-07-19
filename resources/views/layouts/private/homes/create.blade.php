@extends('layouts.app')

@section('title', 'Content Home')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create Content Home</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title_1">Title 1:</label>
            <input type="text" name="title_1" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title_2">Title 2:</label>
            <input type="text" name="title_2" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title_3">Title 3:</label>
            <input type="text" name="title_3" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="button_left">Button Left:</label>
            <input type="text" name="button_left" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="button_right">Button Right:</label>
            <input type="text" name="button_right" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="about_me_title">About Me Title:</label>
            <input type="text" name="about_me_title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="about_me_description">About Me Description:</label>
            <textarea name="about_me_description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Profile Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
