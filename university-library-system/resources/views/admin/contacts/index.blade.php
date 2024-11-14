@extends('layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contact Messages</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>  <!-- New Subject Column -->
                                    <th>Message</th>
                                    <th>Received At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td> <!-- Display Subject -->
                                        <td>{{ Str::limit($contact->message, 50) }}</td>
                                        <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <a href="{{ route('admin.contacts.show', $contact->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
