@extends('layouts.app')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Content Languages</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('languages') }}"> Back</a>
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

    <form action="{{ route('languages.update', $languages->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="languages">Skills:</label>
            <input type="text" name="languages" class="form-control" value="{{ $languages->languages}}" required>
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection
