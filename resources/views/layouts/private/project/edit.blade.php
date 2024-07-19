@extends('layouts.app')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('project.index') }}"> Back</a>
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

    <form action="{{ route('project.update',$project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title_project">Title Project:</label>
            <input type="text" name="title_project" class="form-control" value="{{ $project->title_project}}" required>
        </div>

        <div class="form-group">
            <label for="project_description">Project Description:</label>
            <textarea name="project_description" class="form-control" required>{{ $project->project_description}}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Project Image:</label>
            <input type="file" name="image" class="form-control" placeholder="image">
            <img src="/images/project/{{ $project->image }}" width="300px">
        </div>

        <div class="row">
            <div class="d-grid col-xs-12 col-sm-12 col-md-12 text-center">
                <hr><button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection
