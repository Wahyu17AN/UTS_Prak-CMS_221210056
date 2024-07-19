@extends('layouts.app')

@section('title', 'Experience')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Experience</h1>
        <a href="{{ route('experiences.create') }}" class="btn btn-primary">Add Content Home</a>
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
                    <th>Field</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Work description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>+
            @if($experiences->count() > 0)
                @foreach ($experiences as $exp)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $exp->starting_year}}</td>
                    <td class="align-middle">{{ $exp->year_ends}}</td>
                    <td class="align-middle">{{ $exp->field}}</td>
                    <td class="align-middle">{{ $exp->company}}</td>
                    <td class="align-middle">{{ $exp->address }}</td>
                    <td class="align-middle">{{ $exp->description}}</td>
                    <td>
                        <form action="{{ route('experiences.destroy',$exp->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('experiences.edit',$exp->id) }}">Edit</a>

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
