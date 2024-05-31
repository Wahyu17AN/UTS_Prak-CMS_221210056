@extends('layouts.app')
  
@section('title', 'Create Footers')
  
@section('contents')
    <h1 class="mb-0">Add Footer</h1>
    <hr />
    <form action="{{ route('footers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="sosmed" class="form-control" placeholder="Sosmed">
            </div>
            <div class="col">
                <input type="text" name="link" class="form-control" placeholder="Link">
            </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection