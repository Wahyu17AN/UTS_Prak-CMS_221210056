@extends('layouts.app')

@section('title', 'Footers')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Footers</h1>
        <a href="{{ route('footers.create') }}" class="btn btn-primary">Add Content Footer</a>
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
                    <th>#</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($footers->count() > 0)
                    @foreach($footers as $footer)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $footer->name }}</td>
                        <td class="align-middle">{{ $footer->url }}</td>
                        <td>
                            <form action="{{ route('footers.destroy', $footer->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('footers.edit', $footer->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="4">No Footers found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
