@extends('layouts.app')

@section('title', 'Venue Decoration Services - Transform Spaces into Stunning Experiences')
@section('description', 'Professional venue decoration services in the UK. From floral arrangements and table settings to lighting and backdrops, we create atmospheres that reflect your personality and leave lasting impressions.')
@section('keywords', 'venue decoration UK, event decoration, wedding decoration, party decoration, floral arrangements, table settings, event styling, venue styling, decoration services Coventry')

@section('og_title', 'Venue Decoration Services - Transform Spaces into Stunning Experiences')
@section('og_description', 'Professional venue decoration services in the UK. From floral arrangements and table settings to lighting and backdrops, we create atmospheres that reflect your personality.')
@section('og_type', 'service')

@section('twitter_title', 'Venue Decoration Services - Transform Spaces into Stunning Experiences')
@section('twitter_description', 'Professional venue decoration services in the UK. From floral arrangements and table settings to lighting and backdrops, we create atmospheres that reflect your personality.')

@section('contents')
    <x-hero-section background-image="/images/planning.webp" overlay-opacity="50" subtitle="Our Services"
        title="Venue Decoration" description="Transforming Spaces into Stunning Experiences" width="md:w-[524px] w-full" />

    <x-description-section
        text="Your event deserves more than decoration, it deserves design that tells a story. From floral arrangements and table settings to lighting and backdrops, we create atmospheres that reflect your personality and leave lasting impressions on your guests. Every design is tailored to your theme and handled with precision from concept to setup."
        width="md:w-[737px] w-full px-4" text-color="text-primary" text-size="text-lg" font-weight="font-bold" />

    <x-process-steps
        title="Our Process"
        :steps="[
            [
                'number' => '1',
                'title' => 'Vision Discussion',
                'description' => 'Understanding your style and preferences.',
                'background' => 'bg-primary-100',
                'numberColor' => 'text-primary',
                'titleColor' => 'text-primary',
                'textColor' => 'text-primary'
            ],
            [
                'number' => '2',
                'title' => 'Moodboard & Design',
                'description' => 'Curating themes, colors, and layouts.',
                'background' => 'bg-primary',
                'numberColor' => 'text-primary-100',
                'titleColor' => 'text-primary-100',
                'textColor' => 'text-primary-100'
            ],
            [
                'number' => '3',
                'title' => 'Setup',
                'description' => 'Bringing your design to life on the day.',
                'background' => 'bg-primary-100',
                'numberColor' => 'text-primary',
                'titleColor' => 'text-primary',
                'textColor' => 'text-primary'
            ],
            [
                'number' => '4',
                'title' => 'Final Touches',
                'description' => 'Perfecting every detail before guests arrive.',
                'background' => 'bg-primary',
                'numberColor' => 'text-primary-100',
                'titleColor' => 'text-primary-100',
                'textColor' => 'text-primary-100'
            ]
        ]"
    />

      <div class="w-full flex items-center justify-center mb-24">
        <x-shadow-button href="/contact-us">
            Start Planning
        </x-shadow-button>
    </div>

    <section class="w-full bg-primary-100 py-16 2xl:px-25 md:px-10 px-5">
        <div class="relative bg-transparent overflow-hidden">
            <div class="perspective-carousel">
                <div class="carousel-track">
                    <!-- First set of images -->
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-1.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-2.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-3.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-4.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-5.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-6.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-7.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-8.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-9.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-10.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-11.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-12.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-13.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-14.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-15.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-16.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-17.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-18.jpg")}}" alt="">
                    </div>

                    <!-- Duplicate set for seamless infinite scroll -->
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-1.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-2.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-3.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-4.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-5.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-6.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-7.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-8.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-9.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-10.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-11.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-12.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-13.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-14.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-15.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-16.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-17.jpg")}}" alt="">
                    </div>
                    <div class="carousel-item w-70 h-70 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("/images/glimpse-18.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
