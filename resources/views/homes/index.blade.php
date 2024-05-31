@extends('layouts.app')

@section('title', 'Home Home')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Foto</h1>
        <a href="{{ route('home.create') }}" class="btn btn-primary">Add Foto</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>+
        @foreach ($home as $home)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $home->image }}" width="100px"></td>
            <td>{{ $home->name }}</td>
            <td>
                <form action="{{ route('home.destroy',$home->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('home.show',$home->id) }}">Show</a>

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

@endsection
