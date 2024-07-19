@extends('layouts.app')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Experience</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('experiences') }}"> Back</a>
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

    <form action="{{ route('experiences.update', $experiences->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="starting_year">Starting Year:</label>
            <input type="text" name="starting_year" class="form-control" value="{{ $experiences->starting_year}}" required>
        </div>

        <div class="form-group">
            <label for="year_ends">Year End:</label>
            <input type="text" name="year_ends" class="form-control" value="{{ $experiences->year_ends}}" required>
        </div>

        <div class="form-group">
            <label for="field">field:</label>
            <input type="text" name="field" class="form-control" value="{{ $experiences->field}}" required>
        </div>

        <div class="form-group">
            <label for="company">Company:</label>
            <input type="text" name="company" class="form-control" value="{{ $experiences->company}}" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control" value="{{ $experiences->address }}" required>
        </div>

        <div class="form-group">
            <label for="description">Work Description:</label>
            <textarea name="description" class="form-control" required>{{ $experiences->description}}</textarea>
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection
