@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Event</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Event Title -->
                    <div class="form-group">
                        <label for="title">Event Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}" required>
                    </div>

                    <!-- Event Type -->
                    <div class="form-group">
                        <label for="event_type">Event Type</label>
                        <select name="event_type" id="event_type" class="form-control" required>
                            <option value="Conference" {{ $event->event_type == 'Conference' ? 'selected' : '' }}>Conference</option>
                            <option value="Workshop" {{ $event->event_type == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                            <option value="Seminar" {{ $event->event_type == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                            <option value="Meetup" {{ $event->event_type == 'Meetup' ? 'selected' : '' }}>Meetup</option>
                        </select>
                    </div>

                    <!-- Event Date -->
                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <input type="date" name="event_date" id="event_date" class="form-control" value="{{ \Carbon\Carbon::parse($event->event_date)->format('Y-m-d') }}" required>
                    </div>

                    <!-- Event Description -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ $event->description }}</textarea>
                    </div>

                    <!-- Event Image -->
                    <div class="form-group">
                        <label for="image">Event Image</label>
                        @if ($event->image)
                            <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" style="width: 100px; height: auto;">
                        @endif
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
