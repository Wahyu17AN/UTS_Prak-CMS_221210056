@extends('layouts.app')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Education</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('education') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('education.update', $education->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="starting_year">Starting Year:</label>
            <input type="text" name="starting_year" class="form-control" value="{{ $education->starting_year}}" required>
        </div>

        <div class="form-group">
            <label for="year_ends">Year End:</label>
            <input type="text" name="year_ends" class="form-control" value="{{ $education->year_ends}}" required>
        </div>

        <div class="form-group">
            <label for="school">School:</label>
            <input type="text" name="school" class="form-control" value="{{ $education->school}}" required>
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" name="location" class="form-control" value="{{ $education->location}}" required>
        </div>

        <div class="form-group">
            <label for="graduation_status">Graduating Status:</label>
            <input type="text" name="graduation_status" class="form-control" value="{{ $education->graduation_status }}" required>
        </div>

        <div class="form-group">
            <label for="major">Major:</label>
            <input type="text" name="major" class="form-control" value="{{ $education->major }}" required>
        </div>

        <div class="form-group">
            <label for="description">Education Description:</label>
            <textarea name="description" class="form-control" required>{{ $education->description}}</textarea>
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection
