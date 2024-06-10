@extends('homes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Foto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home.index') }}"> Back</a>
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

    <form action="{{ route('home.update',$home->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title_1">Title 1:</label>
            <input type="text" name="title_1" class="form-control" value="{{ $home->title_1}}" required>
        </div>

        <div class="form-group">
            <label for="title_2">Title 2:</label>
            <input type="text" name="title_2" class="form-control" value="{{ $home->title_2}}" required>
        </div>

        <div class="form-group">
            <label for="title_3">Title 3:</label>
            <input type="text" name="title_3" class="form-control" value="{{ $home->title_3}}" required>
        </div>

        <div class="form-group">
            <label for="button_left">Button Left:</label>
            <input type="text" name="button_left" class="form-control" value="{{ $home->button_left }}" required>
        </div>

        <div class="form-group">
            <label for="button_right">Button Right:</label>
            <input type="text" name="button_right" class="form-control" value="{{ $home->button_right }}" required>
        </div>

        <div class="form-group">
            <label for="about_me_title">About Me Title:</label>
            <input type="text" name="about_me_title" class="form-control" value="{{ $home->about_me_title }}" required>
        </div>

        <div class="form-group">
            <label for="about_me_description">About Me Description:</label>
            <textarea name="about_me_description" class="form-control" required>{{ $home->about_me_description}}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Profile Image:</label>
            <input type="file" name="image" class="form-control" placeholder="image">
            <img src="/images/{{ $home->image }}" width="300px">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
