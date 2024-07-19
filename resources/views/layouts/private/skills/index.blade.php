@extends('layouts.app')

@section('title', 'Skills')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Skills</h1>
        <a href="{{ route('skills.create') }}" class="btn btn-primary">Add Content Skills</a>
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
                    <th>Skills</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>+
            @if($skills->count() > 0)
                @foreach ($skills as $skl)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $skl->skills}}</td>
                    <td>
                        <form action="{{ route('skills.destroy',$skl->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('skills.edit',$skl->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">experiences not found</td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>

@endsection
