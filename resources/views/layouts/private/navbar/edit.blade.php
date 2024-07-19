@extends('layouts.app')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Content Navbar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('navbar.index') }}"> Back</a>
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

    <form action="{{ route('navbar.update',$navbar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title_logo">Title Logo:</label>
            <input type="text" name="title_logo" class="form-control" value="{{ $navbar->title_logo}}" required>
        </div>

        <div class="form-group">
            <label for="title_1">Title 1:</label>
            <input type="text" name="title_1" class="form-control" value="{{ $navbar->title_1}}" required>
        </div>

        <div class="form-group">
            <label for="title_2">Title 2:</label>
            <input type="text" name="title_2" class="form-control" value="{{ $navbar->title_2}}" required>
        </div>

        <div class="form-group">
            <label for="title_3">Title 3:</label>
            <input type="text" name="title_3" class="form-control" value="{{ $navbar->title_3}}" required>
        </div>

        <div class="form-group">
            <label for="title_4">Title 4:</label>
            <input type="text" name="title_4" class="form-control" value="{{ $navbar->title_4}}" required>
        </div>

        <div class="form-group">
            <label for="url">URL Logo</label>
            <input type="text" name="url" class="form-control" value="{{ $navbar->url}}" required>
        </div>

        <div class="form-group">
            <label for="image">Logo Image:</label>
            <input type="file" name="image" class="form-control" placeholder="image">
            <img src="/images/navbar/{{ $navbar->image }}" width="300px">
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection
