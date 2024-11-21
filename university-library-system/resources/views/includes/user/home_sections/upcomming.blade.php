<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Upcoming Events</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Our Events</h4>
                    <ul>
                        <li>
                                Explore our upcoming events, ranging from book launches to academic seminars. Stay tuned
                                for more updates!

                                We organize a variety of events that cater to different interests. Join us for the next
                                one!</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>{{ $event->event_type }}</span>
                                    </div>
                                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>{{ \Carbon\Carbon::parse($event->event_date)->format('M') }}
                                            <span>{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</span>
                                        </h6>
                                    </div>
                                    <a href="#">
                                        <h4>{{ $event->title }}</h4>
                                    </a>
                                    <p>{{ Str::limit($event->description, 150) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
