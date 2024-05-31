@extends('layouts.app')
  
@section('title', 'Show Footer')
  
@section('contents')
    <h1 class="mb-0">Detail Footer</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sossial Media</label>
            <input type="text" name="sosmed" class="form-control" placeholder="Sosmed" value="{{ $footer->sosmed }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Link</label>
            <input type="text" name="link" class="form-control" placeholder="Link" value="{{ $footer->link }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $footer->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $footer->updated_at }}" readonly>
        </div>
    </div>
@endsection