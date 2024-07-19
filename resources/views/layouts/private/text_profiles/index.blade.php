@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Title Profile</h1>
        <a href="{{ route('text_profiles.create') }}" class="btn btn-primary">Add Title Profile</a>
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
                    <th>No</th>
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Title 3</th>
                    <th>Title 4</th>
                    <th>Title 5</th>
                    <th>Title 6</th>
                    <th>Title Logo</th>
                    <th>File Document</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($text_profiles as $pfl)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $pfl->title_1 }}</td>
                <td class="align-middle">{{ $pfl->title_2 }}</td>
                <td class="align-middle">{{ $pfl->title_3 }}</td>
                <td class="align-middle">{{ $pfl->title_4 }}</td>
                <td class="align-middle">{{ $pfl->title_5 }}</td>
                <td class="align-middle">{{ $pfl->title_6 }}</td>
                <td class="align-middle">{{ $pfl->title_logo }}</td>
                <td class="align-middle">
                    @if ($pfl->file_Document)
                        <a href="{{ asset('document/' . $pfl->file_Document) }}" target="_blank">View Document</a>
                    @else
                        No Document
                    @endif
                </td>
                <td>
                    <form action="{{ route('text_profiles.destroy', $pfl->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('text_profiles.edit', $pfl->id) }}">Edit</a>

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
