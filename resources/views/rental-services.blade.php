@extends('layouts.app')


@section('contents')
    <x-hero-section background-image="/images/planning.webp" overlay-opacity="50" subtitle="Our Services"
        title="Rentals Services" description="Quality Rentals for Every Occasion" width="md:w-[524px] w-full" />

    <x-description-section
        text="Sometimes, the little details make the biggest difference. Our rental collection provides everything you need to complete your event, from tables, chairs, and linens to catering equipment, backdrops, dance floors, and props. With reliable delivery and professional setup, we make sure your event looks and feels just right."
        width="md:w-[737px] w-full px-4" text-color="text-primary" text-size="text-lg" font-weight="font-bold" />

    <x-process-steps
        title="Our Process"
        :steps="[
            [
                'number' => '1',
                'title' => 'Browse Selection',
                'description' => 'Explore our range of rental items.',
                'background' => 'bg-primary-100',
                'numberColor' => 'text-primary',
                'titleColor' => 'text-primary',
                'textColor' => 'text-primary'
            ],
            [
                'number' => '2',
                'title' => 'Book',
                'description' => 'Choose the items that fit your event.',
                'background' => 'bg-primary',
                'numberColor' => 'text-primary-100',
                'titleColor' => 'text-primary-100',
                'textColor' => 'text-primary-100'
            ],
            [
                'number' => '3',
                'title' => 'Delivery',
                'description' => 'We bring everything to your venue.',
                'background' => 'bg-primary-100',
                'numberColor' => 'text-primary',
                'titleColor' => 'text-primary',
                'textColor' => 'text-primary'
            ],
            [
                'number' => '4',
                'title' => 'Pickup',
                'description' => 'Hassle-free collection after your event.',
                'background' => 'bg-primary',
                'numberColor' => 'text-primary-100',
                'titleColor' => 'text-primary-100',
                'textColor' => 'text-primary-100'
            ]
        ]"
    />

      <div class="w-full flex items-center justify-center mb-24">
        <x-shadow-button href="">
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
