@extends('layouts.app')

@section('title', 'Title Contact')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Title Project</h1>
        <a href="{{ route('title_contact.create') }}" class="btn btn-primary">Add Title Project</a>
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
                    <th>Title 5</th>
                    <th>Title 6</th>
                    <th>Title 7</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>+
            @if($title_contact->count() > 0)
                @foreach ($title_contact as $cont)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $cont->title_logo}}</td>
                    <td class="align-middle">{{ $cont->title_1}}</td>
                    <td class="align-middle">{{ $cont->title_2}}</td>
                    <td class="align-middle">{{ $cont->title_3}}</td>
                    <td class="align-middle">{{ $cont->title_4}}</td>
                    <td class="align-middle">{{ $cont->title_5}}</td>
                    <td class="align-middle">{{ $cont->title_6}}</td>
                    <td class="align-middle">{{ $cont->title_7}}</td>
                    <td>
                        <form action="{{ route('title_contact.destroy',$cont->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('title_contact.edit',$cont->id) }}">Edit</a>

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
