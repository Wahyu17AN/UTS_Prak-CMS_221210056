@extends('layouts.app')

@section('title', 'Navbar')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Content Navbar</h1>
        <a href="{{ route('navbar.create') }}" class="btn btn-primary">Add Content Navbar</a>
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
                    <th>Title Logo</th>
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Title 3</th>
                    <th>Title 4</th>
                    <th>URL Logo</th>
                    <th>Logo Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>+
            @foreach ($navbar as $nbr)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $nbr->title_logo}}</td>
                <td class="align-middle">{{ $nbr->title_1}}</td>
                <td class="align-middle">{{ $nbr->title_2}}</td>
                <td class="align-middle">{{ $nbr->title_3}}</td>
                <td class="align-middle">{{ $nbr->title_4}}</td>
                <td class="align-middle">{{ $nbr->url}}</td>
                <td class="align-middle"><img src="/images/navbar/{{ $nbr->image }}" width="100px"></td>
                <td>
                    <form action="{{ route('navbar.destroy',$nbr->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('navbar.edit',$nbr->id) }}">Edit</a>

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
