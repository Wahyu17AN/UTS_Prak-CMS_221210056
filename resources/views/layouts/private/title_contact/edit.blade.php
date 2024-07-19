@extends('layouts.app')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Title Contact</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('title_contact') }}"> Back</a>
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

    <form action="{{ route('title_contact.update', $title_contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title_logo">Title Logo:</label>
            <input type="text" name="title_logo" class="form-control" value="{{ $title_contact->title_logo}}" required>
        </div>

        <div class="form-group">
            <label for="title_1">Title 1:</label>
            <input type="text" name="title_1" class="form-control" value="{{ $title_contact->title_1}}" required>
        </div>

        <div class="form-group">
            <label for="title_2">Title 2:</label>
            <input type="text" name="title_2" class="form-control" value="{{ $title_contact->title_2}}" required>
        </div>

        <div class="form-group">
            <label for="title_3">Title 3:</label>
            <input type="text" name="title_3" class="form-control" value="{{ $title_contact->title_3}}" required>
        </div>

        <div class="form-group">
            <label for="title_4">Title 4:</label>
            <input type="text" name="title_4" class="form-control" value="{{ $title_contact->title_4}}" required>
        </div>

        <div class="form-group">
            <label for="title_5">Title 5:</label>
            <input type="text" name="title_5" class="form-control" value="{{ $title_contact->title_5}}" required>
        </div>

        <div class="form-group">
            <label for="title_6">Title 6:</label>
            <input type="text" name="title_6" class="form-control" value="{{ $title_contact->title_6}}" required>
        </div>

        <div class="form-group">
            <label for="title_7">Title 7:</label>
            <input type="text" name="title_7" class="form-control" value="{{ $title_contact->title_7}}" required>
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection
