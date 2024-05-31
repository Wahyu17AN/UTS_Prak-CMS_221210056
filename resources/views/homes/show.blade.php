@extends('layouts.app')

@section('title', 'Show Home')

@section('contents')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Image</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $home->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            <img src="/images/{{ $home->image }}" width="500px">
        </div>
    </div>
</div>
@endsection
