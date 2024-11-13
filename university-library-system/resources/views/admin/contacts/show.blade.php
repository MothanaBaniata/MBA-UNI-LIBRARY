@extends('layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contact Message Details</h4>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $contact->name }}</p>
                    <p><strong>Email:</strong> {{ $contact->email }}</p>
                    <p><strong>Message:</strong> <br> {{ nl2br(e($contact->message)) }}</p>
                    <p><strong>Received At:</strong> {{ $contact->created_at->format('Y-m-d H:i') }}</p>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back to Messages</a>
                </div>
            </div>
        </div>
    </div>
@endsection
