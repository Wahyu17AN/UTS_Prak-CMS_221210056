@extends('layouts.app')

@section('title', 'Account')

@section('contents')
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Account Settings</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">

                    <div class="col-md-6">
                        <label class="labels">Id</label>
                        <input type="text" name="name" disabled class="form-control" value="{{ auth()->user()->id }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Nama</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->name }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="phone" disabled class="form-control" value="{{ auth()->user()->email }}">
                    </div>
                </div>
            </div>
        </div>

    </div>

        </form>
@endsection
