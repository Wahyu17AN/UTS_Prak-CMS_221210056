@extends('layouts.app')
  
@section('title', 'Edit Footer')
  
@section('contents')
    <h1 class="mb-0">Edit Footer</h1>
    <hr />
    <form action="{{ route('footers.update', $footer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Sosial Media</label>
                <input type="text" name="sosmed" class="form-control" placeholder="Sosmed" value="{{ $footer->sosmed }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Link</label>
                <input type="text" name="" class="form-control" placeholder="Link" value="{{ $footer->link }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection