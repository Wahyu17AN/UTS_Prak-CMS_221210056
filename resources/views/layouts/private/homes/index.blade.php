@extends('layouts.app')

@section('title', 'Home')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Content Home</h1>
        <a href="{{ route('home.create') }}" class="btn btn-primary">Add Content Home</a>
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
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Title 3</th>
                    <th>Button Left</th>
                    <th>Button Right</th>
                    <th>Name Description</th>
                    <th>About Me Description</th>
                    <th>Profile Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>+
            @foreach ($homes as $home)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $home->title_1}}</td>
                <td class="align-middle">{{ $home->title_2}}</td>
                <td class="align-middle">{{ $home->title_3}}</td>
                <td class="align-middle">{{ $home->button_left }}</td>
                <td class="align-middle">{{ $home->button_right }}</td>
                <td class="align-middle">{{ $home->about_me_title }}</td>
                <td class="align-middle">{{ $home->about_me_description }}</td>
                <td class="align-middle"><img src="/images/home/{{ $home->image }}" width="100px"></td>
                <td>
                    <form action="{{ route('home.destroy',$home->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('home.edit',$home->id) }}">Edit</a>

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
