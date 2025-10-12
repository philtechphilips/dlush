@extends('layouts.app')


@section('contents')
    <section class="hidden md:flex justify-between w-full relative h-[calc(100vh+340px)] 2xl:h-[calc(100vh+280px)]">
        <div class="w-[70%] bg-primary-100 h-full rounded-br-[80px] 2xl:px-25 md:px-10 px-5 md:pt-40 2xl:pt-60">
            <div class="flex items-end gap-2">
                <div class="w-13 h-0.5 bg-primary"></div>
                <p class="!font-medium text-gray-200 text-sm">Planning. Styling. Rentals.</p>
            </div>

            <h1 class="mt-6 font-bold text-6xl text-gray-100 w-146 font-[Merriweather]">Events Designed with Care and
                Elegance</h1>
            <p class="mt-6 text-gray-200 text-lg font-normal w-146">We bring your vision to life with flawless planning,
                beautiful décor, and trusted event services.</p>

            <div class="relative mt-12">
                <x-shadow-button href="/contact-us">
                    Plan Your Event
                </x-shadow-button>
            </div>

            <div class="flex gap-6 absolute bottom-10">
                <div
                    class="bg-primary w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                    <h5 class="text-primary-100 font-bold text-5xl">1000<span class="text-4xl">+</span></h5>
                    <p class="text-primary-100 text-sm font-medium mt-4">Guests Capacity Per Event</p>
                </div>
                <div
                    class="bg-primary w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                    <h5 class="text-primary-100 font-bold text-5xl">95<span class="text-4xl">%</span></h5>
                    <p class="text-primary-100 text-sm font-medium mt-4">Clients Satisfaction Rate</p>
                </div>
            </div>
        </div>
        <div class="w-3/5 relative">
            <div class="w-[calc(100%+80px)] rounded-bl-[60px] absolute top-0 right-0 2xl:h-[68%] h-[60%]">
                <img src="{{ asset('/images/hero-image.svg') }}" alt="Home Image"
                    class="w-full h-full object-cover rounded-bl-[80px]">

                <div class="absolute bottom-10 left-10 w-40">
                    <img class="w-40 animate-slow-spin" src="{{ asset('/images/hero-spinner.svg') }}" alt="">
                </div>
            </div>

            <div class="w-full absolute bottom-0 p-16">
                <img src="{{ asset('/images/quote.svg') }}" alt="Testimonial">

                <!-- Testimonial Content -->
                <x-testimonial variant="desktop" />
            </div>
        </div>
    </section>

    <section class="md:hidden block w-full bg-primary-100 rounded-br-[100px]">
        <div class="w-full px-4 pt-10 pb-5 rounded-bl-[60px]"
            style="background: url('{{ asset('/images/hero-image.svg') }}')">
            <div class="bg-white/75 p-4 rounded-bl-[50px]">
                <div class="w-25">
                    <img class="w-25 animate-slow-spin" src="{{ asset('/images/hero-spinner.svg') }}" alt="">
                </div>
                <div class="flex items-end gap-2 mt-6 w-full">
                    <div class="w-13 h-0.5 bg-primary"></div>
                    <p class="!font-medium text-gray-200 text-sm">Planning. Styling. Rentals.</p>
                </div>

                <h3 class="mt-6 font-bold text-4xl text-gray-100 font-[Merriweather]">Events Designed with Care and
                    Elegance</h3>
                <p class="mt-6 text-gray-200 text-lg font-normal ">We bring your vision to life with flawless planning,
                    beautiful décor, and trusted event services.</p>
                <div class="relative mt-12 mb-4">
                    <x-shadow-button href="/contact-us">
                        Plan Your Event
                    </x-shadow-button>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-6 px-4 py-12">
            <div class="bg-primary w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="text-primary-100 font-bold text-5xl">1000<span class="text-4xl">+</span></h5>
                <p class="text-primary-100 text-sm font-medium mt-4">Guests Capacity Per Event</p>
            </div>
            <div class="bg-primary w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="text-primary-100 font-bold text-5xl">95<span class="text-4xl">%</span></h5>
                <p class="text-primary-100 text-sm font-medium mt-4">Clients Satisfaction Rate</p>
            </div>
        </div>
    </section>

    <section class="w-full mt-22 p-4 md:hidden block">
        <div class="w-full">
            <img src="{{ asset('/images/quote.svg') }}" alt="Testimonial">

            <!-- Testimonial Content -->
            <x-testimonial variant="mobile" />
        </div>
    </section>


    <section class="w-full bg-white md:p-25 px-4 flex md:flex-row flex-col-reverse md:gap-16 gap-12 items-center">

        <div class="md:w-1/2 w-full">
            <div class="flex items-end gap-2 mt-6 w-full">
                <div class="w-13 h-0.5 bg-primary"></div>
                <p class="!font-medium text-gray-200 text-sm">About Us</p>
            </div>
            <h2 class="mt-4 text-gray-200 font-bold md:text-5xl text-3xl pr-20 md:leading-14">Your Partner for Elegant,
                Effortless
                Events</h2>
            <p class="font-normal text-lg text-gray-200 mt-4">
                Behind every event we design is a genuine passion for detail, creativity, and care. We believe that every
                celebration should be unique, stress-free, and filled with unforgettable moments.
            </p>
            <p class="font-normal text-lg text-gray-200 mt-4">
                With years of experience, we’ve transformed ordinary spaces into extraordinary memories, tailoring each
                event to reflect the personality and vision of our clients. Based in the UK, we are committed to delivering
                events with professionalism, reliability, and an elegant touch that makes every occasion truly special.
            </p>
            <div class="mt-12">
                <a href="/about" class="text-primary font-semibold text-base group"> <span class="group-hover:translate-y-1 transition-all duration-500 ease-in inline-block">Learn More</span> <i
                        class="ri-arrow-right-up-line group-hover:-translate-y-1 transition-all duration-300 ease-in-out"></i></a>
            </div>
        </div>

        <div class="md:w-1/2 md:h-[530px] h-[454px] rounded-tl-[100px] rounded-br-[100px] relative mt-30 md:mt-0">
            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                src="{{ asset('/images/home-about.webp') }}" alt="">
            <x-stats-cards variant="desktop" />
            <x-stats-cards variant="mobile" />
        </div>

    </section>

    <section class="w-full bg-white md:p-25 py-16 px-4  flex flex-col items-center">
        <p class="font-medium text-gray-200 text-center text-sm">Our Services</p>
        <h2 class="mt-4 text-gray-200 font-bold text-center md:text-5xl text-3xl md:w-162">Tailored for Every Occasion</h2>
        <p class="font-normal text-lg text-gray-200 mt-4 text-center md:w-170">Whether it’s a small gathering or a large
            celebration, we provide reliable solutions that take the stress off your shoulders and add elegance to your
            event.</p>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-12 w-full mt-16">
            <!-- First card - Active by default -->
            <div
                class="service-card  rounded-tl-[100px] rounded-br-[100px] 2xl:h-[700px] h-[500px] w-full overflow-hidden relative">
                <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                    src="{{ asset('/images/planning.webp') }}" alt="">

                <div
                    class="service-content absolute bottom-0 left-0 right-0 2xl:pr-40 2xl:pl-10 md:pr-10 md:pl-10 pl-6 pr-6 py-12">
                    <h4 class="font-bold 2xl:text-[28px] text-2xl text-white">Event Planning & Coordination</h4>
                    <p class="service-description 2xl:text-lg text-base font-normal text-primary-100">From start to finish,
                        we manage
                        timelines, vendors, and every detail to make your day stress-free</p>
                    <div class="service-link">
                        <a href="/event-planning" class="text-primary-100 font-medium text-sm group"> <span class="group-hover:translate-y-1 transition-all duration-500 ease-in inline-block">Learn More</span> <i
                                class="ri-arrow-right-up-line group-hover:translate-y-1 transition-all duration-300 ease-in-out"></i></a>
                    </div>
                </div>
            </div>

            <!-- Second card - Inactive by default -->
            <div
                class="service-card rounded-tl-[100px] rounded-br-[100px] 2xl:h-[700px] h-[500px] w-full overflow-hidden relative">
                <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                    src="{{ asset('/images/venue.webp') }}" alt="">
                <div
                    class="service-content absolute bottom-0 left-0 right-0 2xl:pr-40 2xl:pl-10 md:pr-10 md:pl-10 pl-6 pr-6 py-12">
                    <h4 class="font-bold 2xl:text-[28px] text-2xl text-white">Venue Decoration</h4>
                    <p class="service-description 2xl:text-lg text-base font-normal text-primary-100">Themes, Floral
                        arrangements, backdrops, lighting, and elegant table setups tailored to your occasion.</p>
                    <div class="service-link mt-6">
                        <a href="/venue-decoration" class="text-primary-100 font-medium text-sm group"> <span class="group-hover:translate-y-1 transition-all duration-500 ease-in inline-block">Learn More</span> <i
                                class="ri-arrow-right-up-line group-hover:translate-y-1 transition-all duration-300 ease-in-out"></i></a>
                    </div>
                </div>
            </div>

            <!-- Third card - Inactive by default -->
            <div
                class="service-card rounded-tl-[100px] rounded-br-[100px] 2xl:h-[700px] h-[500px] w-full overflow-hidden relative">
                <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                    src="{{ asset('/images/rental.webp') }}" alt="">

                <div
                    class="service-content absolute bottom-0 left-0 right-0 2xl:pr-40 2xl:pl-10 md:pr-10 md:pl-10 pl-6 pr-6 py-12">
                    <h4 class="font-bold 2xl:text-[28px] text-2xl text-white">Rental Services</h4>
                    <p class="service-description 2xl:text-lg text-base font-normal text-primary-100">Chairs, tables,
                        linens, backdrops, dance floors, catering equipment, props and more, everything you need for a
                        successful event.</p>
                    <div class="service-link">
                        <a href="/rental-services" class="text-primary-100 font-medium text-sm group"> <span class="group-hover:translate-y-1 transition-all duration-500 ease-in inline-block">Learn More</span> <i
                                class="ri-arrow-right-up-line group-hover:translate-y-1 transition-all duration-300 ease-in-out"></i></a>
                    </div>
                </div>
            </div>

            <div
                class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[700px] h-[500px] w-full overflow-hidden relative flex items-center p-16 border-2 border-primary">
                <h5 class="text-primary font-bold text-lg ">“ Every event is unique. We provide custom quotes tailored to
                    your needs, with rates starting from £250. ”</h5>
                <div class="absolute bottom-16 left-16">
                    <x-shadow-button href="/contact-us">
                        Plan Your Event
                    </x-shadow-button>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full bg-primary-100 md:p-25 py-16 px-4 mt-25 flex flex-col items-center">
        <p class="font-semibold text-gray-200 text-center">Moments That Speak for Themselves</p>
        <h2 class="mt-4 text-gray-200 font-bold text-center md:text-5xl text-3xl md:w-162">A Glimpse Into What We Create
        </h2>

        <!-- Image Carousel Container -->
        <div class="relative mt-16 overflow-hidden w-full">
            <div id="imageCarousel" class="relative w-full">
                <!-- Group 1: Images 1-3 -->
                <div class="carousel-group opacity-100" data-group="0">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6 2xl:gap-4 w-full">
                        <div class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                                src="{{ asset('/images/glimpse-1.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-2.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Group 2: Images 4-6 -->
                <div class="carousel-group opacity-0 absolute inset-0" data-group="1">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
                        <div class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                                src="{{ asset('/images/glimpse-4.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-5.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Group 3: Images 7-9 -->
                <div class="carousel-group opacity-0 absolute inset-0" data-group="2">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
                        <div class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                                src="{{ asset('/images/glimpse-7.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-8.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-9.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Group 4: Images 10-12 -->
                <div class="carousel-group opacity-0 absolute inset-0" data-group="3">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
                        <div class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                                src="{{ asset('/images/glimpse-10.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-11.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-12.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Group 5: Images 13-15 -->
                <div class="carousel-group opacity-0 absolute inset-0" data-group="4">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
                        <div class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                                src="{{ asset('/images/glimpse-13.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-14.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-15.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Group 6: Images 16-18 -->
                <div class="carousel-group opacity-0 absolute inset-0" data-group="5">
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
                        <div class="rounded-tl-[100px] rounded-br-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tl-[100px] rounded-br-[100px]"
                                src="{{ asset('/images/glimpse-16.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-17.jpg') }}" alt="">
                        </div>
                        <div class="rounded-tr-[100px] rounded-bl-[100px] 2xl:h-[498px] h-[400px] w-full overflow-hidden">
                            <img class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px]"
                                src="{{ asset('/images/glimpse-18.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="text-center text-gray-100 md:w-153 text-3xl font-bold mt-16">“Every image tells a story of care,
            elegance, and unforgettable detail, let us craft the next one with you.”</h4>

              <div class="relative mt-20 mb-4">
                    <x-shadow-button href="/contact-us">
                        Plan Your Event
                    </x-shadow-button>
                </div>
    </section>
@endsection



@section('scripts')

@endsection
