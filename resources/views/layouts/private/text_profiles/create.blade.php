@extends('layouts.app')

@section('title', 'Title Profile')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Title Profile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('text_profiles.index') }}"> Back</a>
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

    <form action="{{ route('text_profiles.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="title_4">Title 4:</label>
            <input type="text" name="title_4" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title_5">Title 5:</label>
            <input type="text" name="title_5" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title_6">Title 6:</label>
            <input type="text" name="title_6" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title_logo">Title Logo:</label>
            <input type="text" name="title_logo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="file_document">File Document:</label>
            <input type="file" name="file_document" class="form-control">
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
