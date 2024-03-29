@extends('layouts.frontend-master')

@section('content')

    <div class="w-full md:pt-0 ">
        <div class="relative events-banner-container">
            <img src="{{ asset('/img/news/newbanner.png') }}" class="w-full object-cover eventbanner-image" />
            <div class="absolute premium-content top-1/2 left-1/2 text-center sm-custom-480:pt-0 pt-4">
                <p class="md:text-5xl text-4xl text-white font-book whitespace-nowrap ctbanner-title">Events</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-warm-pale events-detail-container pb-16 lg:flex">
        <div class="events-detail-1 mr-24">
            <p class="text-4xl text-lime-orange font-book tracking-widest uppercase">{{ $event->event_title ?? '' }}</p>
            <div class="flex py-6 pl-2">
                <div class="flex mr-4">
                    <img src="{{ asset('/img/events/date.svg') }}" />
                    <p class="text-21 text-gray-pale pl-2 whitespace-nowrap">{{ $event->event_date ?? '' }}</p>
                </div>
                <div class="flex">
                    <img src="{{ asset('/img/events/time.svg') }}" />
                    <p class="text-21 text-gray-pale pl-2 whitespace-nowrap">{{ $event->event_time ?? '' }}</p>
                </div>
            </div>
            <div class=" pl-2">
                <div class="divide-x-2 w-full bg-gray-pale h-1px"></div>
            </div>
            <div class=" pl-2 pb-8">
                <p class="text-21 text-gray-pale font-book pt-4 result-paragraph">
                    {{ $event->description ?? '' }}
                </p>

            </div>
        </div>
        <div class="events-detail-2">
            <div class="grid grid-cols-1">
                <div class="cursor-pointer relative event-detail-image-container" onclick="openEventDetailPopup()">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-lime-orange event-zoom-hover-bg opacity-0 transition-all">
                    </div>
                    <img src="{{ asset('uploads/events/' . $event->event_image) }}"
                        class="w-full eventdetail-image relative" />
                    <div class="absolute eventdetail-zoom top-1/2 left-1/2 opacity-0">
                        <img src="{{ asset('/img/events/zoom.png') }}" class="w-full" />
                    </div>
                </div>

                <div class="bg-smoke-dark1 pt-16 pb-8 xl:px-12 px-4 mt-8 rounded-lg">
                    <form action="{{ route('eventRegister') }}" method="POST">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <p class="xl:text-2xl text-lg font-heavy font-futura-pt text-lime-orange uppercase">Register for
                            this
                            event</p>
                        <input type="text" name="user_name"
                            class="mt-6 bg-gray py-4 px-8 w-full focus:outline-none text-lg text-gray-pale placeholder-gray-pale rounded-md"
                            placeholder="Your name" />
                        <input type="text" name="user_email"
                            class="mt-2 bg-gray py-4 px-8 w-full focus:outline-none text-lg text-gray-pale placeholder-gray-pale rounded-md"
                            placeholder="Your email address" />
                        <input type="text" name="guests_number"
                            class="mt-2 bg-gray py-4 px-8 w-full focus:outline-none text-lg text-gray-pale placeholder-gray-pale rounded-md"
                            placeholder="Number of guests" />
                        <div class="flex sm-custom-480:justify-start justify-center py-4">
                            <button type="submit"
                                class="text-gray text-lg font-book focus:outline-none py-5 px-16 events-detail-btn">
                                RSVP
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed top-0 w-full h-screen left-0 z-50 bg-black-opacity eventsdetail-popup" id="eventsdetail-popup">
        <div class="text-center text-white absolute top-1/2 left-1/2 popup-text-box bg-gray-light">
            <div
                class="flex flex-col justify-center items-center popup-text-box__container popup-text-box__container--sign-up py-16 relative">
                <button class="absolute top-5 right-5 cursor-pointer focus:outline-none"
                    onclick="eventDetailModalClose('#eventsdetail-popup')">
                    <img src="{{ asset('/img/sign-up/close.svg') }}" alt="close modal image">
                </button>
                <div class="px-12">
                    <img src="{{ asset('/img/events/eventdetail.png') }}" class="w-full object-cover" />
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            var regexp = new RegExp('VPN', 'ig');

            $('p.result-paragraph').each(function(num, elem) {

                var text = $(elem).text();
                // use string.replace with $& notation to indicate whatever was matched
                text = text.replace(regexp, "<span class='text-lime-orange'>Hay</span>");
                $(elem).html(text);
            });



        });
    </script>
@endpush
