@extends('layouts.app')

@section('title', 'Education')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Education</h1>
        <a href="{{ route('education.create') }}" class="btn btn-primary">Add Content Education</a>
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
                    <th>Starting Year</th>
                    <th>Year Ends</th>
                    <th>Scholl</th>
                    <th>Location</th>
                    <th>Graduating Status</th>
                    <th>Major</th>
                    <th>Education Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>+
            @if($education->count() > 0)
                @foreach ($education as $edn)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $edn->starting_year}}</td>
                    <td class="align-middle">{{ $edn->year_ends}}</td>
                    <td class="align-middle">{{ $edn->school}}</td>
                    <td class="align-middle">{{ $edn->location}}</td>
                    <td class="align-middle">{{ $edn->graduation_status}}</td>
                    <td class="align-middle">{{ $edn->major}}</td>
                    <td class="align-middle">{{ $edn->description}}</td>
                    <td>
                        <form action="{{ route('education.destroy',$edn->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('education.edit',$edn->id) }}">Edit</a>

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
