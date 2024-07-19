@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Message</h1>
            <div class="card">
                <div class="card-header">
                    {{ $contact->name }}
                </div>
                <div class="card-body">
                    <p><strong>Email: </strong>{{ $contact->email }}</p>
                    <p><strong>Phone Number: </strong>{{ $contact->phone_number }}</p>
                    <p><strong>Message: </strong>{{ $contact->guest_message }}</p>
                    <p><strong>Sent at: </strong>{{ $contact->created_at}}</p>
                </div>
            </div>
            <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
