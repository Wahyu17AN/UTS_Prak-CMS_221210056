@extends('layouts.app')

@section('title', 'Education')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add education</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('education') }}"> Back</a>
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

    <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="starting_year">Starting Year:</label>
            <input type="text" name="starting_year" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="year_ends">Year End:</label>
            <input type="text" name="year_ends" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="school">School:</label>
            <input type="text" name="school" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="graduation_status">Graduaring Status:</label>
            <input type="text" name="graduation_status" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="major">Major:</label>
            <input type="text" name="major" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Education Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
