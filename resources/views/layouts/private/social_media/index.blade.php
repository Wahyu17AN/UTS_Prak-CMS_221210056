@extends('layouts.app')

@section('title', 'Social Media Links')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Social Media Links</h1>
        <a href="{{ route('social_media.create') }}" class="btn btn-primary">Add Social Media Link</a>
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
                @if($socialMedia->count() > 0)
                    @foreach($socialMedia as $socialMedia)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $socialMedia->name }}</td>
                        <td class="align-middle">{{ $socialMedia->url }}</td>
                        <td>
                            <form action="{{ route('social_media.destroy', $socialMedia->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('social_media.edit', $socialMedia->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="4">No Social Media links found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
