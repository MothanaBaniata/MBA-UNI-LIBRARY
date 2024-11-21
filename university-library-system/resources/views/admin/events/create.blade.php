@extends('layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Event</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Event Title -->
                        <div class="form-group">
                            <label for="title">Event Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <!-- Event Type -->
                        <div class="form-group">
                            <label for="event_type">Event Type</label>
                            <select name="event_type" id="event_type" class="form-control" required>
                                <option value="Book Launch">Book Launch</option>
                                <option value="Reading Group">Reading Group</option>
                                <option value="Research Workshop">Research Workshop</option>
                                <option value="Library Orientation">Library Orientation</option>
                                <option value="Academic Seminar">Academic Seminar</option>
                            </select>
                        </div>

                        <!-- Event Date -->
                        <div class="form-group">
                            <label for="event_date">Event Date</label>
                            <input type="date" name="event_date" id="event_date" class="form-control" required>
                        </div>

                        <!-- Event Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <!-- Event Image -->
                        <div class="form-group">
                            <label for="image">Event Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Create Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
