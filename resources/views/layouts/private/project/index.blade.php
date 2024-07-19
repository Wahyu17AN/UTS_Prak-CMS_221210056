@extends('layouts.app')

@section('title', 'Project')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Project</h1>
        <a href="{{ route('project.create') }}" class="btn btn-primary">Add Content Project</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th>no</th>
                    <th>Title Project</th>
                    <th>Project Description</th>
                    <th>Project Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>+
            @foreach ($project as $pj)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $pj->title_project}}</td>
                <td class="align-middle">{{ $pj->project_description }}</td>
                <td class="align-middle"><img src="/images/project/{{ $pj->image }}" width="100px"></td>
                <td>
                    <form action="{{ route('project.destroy',$pj->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('project.edit',$pj->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
