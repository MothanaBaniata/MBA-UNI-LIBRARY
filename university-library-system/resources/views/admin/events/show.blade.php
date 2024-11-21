@extends('layouts.admin_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $event->title }}</h4>
            </div>
            <div class="card-body d-flex align-items-start">
                <!-- Text Content Section (Left) -->
                <div class="text-content" style="flex: 2; padding-right: 30px;">
                    <h5>Event Type: {{ $event->event_type }}</h5>
                    <p><strong>Event Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}</p>
                    <p><strong>Description:</strong> {{ $event->description }}</p>

                    <!-- Back to Events button -->
                    <div class="mt-3">
                        <a href="{{ route('admin.events.index') }}" class="btn btn-primary">Back to Events</a>
                    </div>
                </div>

                <!-- Image Content Section (Right) -->
                <div class="image-content" style="flex: 1; max-width: 150px;">
                    @if ($event->image)
                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="img-fluid" style="width: 100%; height: auto;">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
