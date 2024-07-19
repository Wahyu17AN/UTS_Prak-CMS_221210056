@extends('layouts.app')

@section('title', 'Title Footer')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Title Footer</h1>
        <a href="{{ route('title_footer.create') }}" class="btn btn-primary">Add Title Project</a>
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
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>+
            @if($title_footer->count() > 0)
                @foreach ($title_footer as $tf)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $tf->title}}</td>
                    <td>
                        <form action="{{ route('title_footer.destroy',$tf->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('title_footer.edit',$tf->id) }}">Edit</a>

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
