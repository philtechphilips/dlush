@extends('layouts.app')


@section('contents')
    <section class="md:flex md:flex-row flex-col justify-end w-full relative">

        <div
            class="h-fit md:w-140 md:-mr-20 mr-0 md:mt-20 mt-0 2xl:mt-90 bg-primary-100 py-16 px-10 md:rounded-tl-[100px] rounded-br-[100px] z-100">
            <div class="w-25">
                <img class="w-25 animate-slow-spin" src="{{ asset('/images/hero-spinner.svg') }}" alt="">
            </div>
            <h2 class="font-bold md:text-5xl text-4xl text-gray-100 mt-6">Crafting Events With Care and Elegance</h2>
            <p class="mt-6 font-normal text-base text-gray-200">We exist to make every celebration feel seamless, elegant,
                and uniquely yours. Our mission is to take away the stress of planning while bringing your vision to life
                with detail, creativity, and personal care.</p>

            <div class="relative mt-12 mb-4">
                <x-shadow-button href="">
                    Plan Your Event
                </x-shadow-button>
            </div>
        </div>
        <div class="md:w-fit 2xl:w-[1350px] 2xl:h-[75%] h-fit flex flex-col items-end">
            <img class="object-cover w-full h-full hidden md:block" src="{{ asset('/images/about-hero.webp') }}"
                alt="">
            <div class="w-130 pt-5 pr-25 hidden md:block">
                <div class="w-fit">
                    <x-testimonial variant="desktop" />
                </div>
            </div>

            <div class="pt-5 px-4 md:hidden block">
                <div class="w-fit">
                    <x-testimonial variant="mobile" />
                </div>
            </div>
        </div>
    </section>

    <section class="2xl:px-25 md:px-10 px-5 pt-32 pb-16">
        <div class="flex md:flex-row flex-col md:gap-12 gap-6">
            <div
                class="bg-primary md:w-1/4 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="text-primary-100 font-bold text-5xl">1000<span class="text-4xl">+</span></h5>
                <p class="text-primary-100 text-sm font-medium mt-4">Guests Capacity Per Event</p>
            </div>

            <div
                class="bg-primary-100 md:w-1/4 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="text-primary font-bold text-5xl">95<span class="text-4xl">%</span></h5>
                <p class="text-primary text-sm font-medium mt-4">Clients Satisfaction Rate</p>
            </div>

            <div
                class="bg-primary md:w-1/4 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="text-primary-100 font-bold text-5xl">20<span class="text-4xl">+</span></h5>
                <p class="text-primary-100 text-sm font-medium mt-4">Venues Styled Across</p>
            </div>

            <div
                class="bg-primary-100 md:w-1/4 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="text-primary font-bold text-5xl">50<span class="text-4xl">+</span></h5>
                <p class="text-primary text-sm font-medium mt-4">Events Successfully Coordinated</p>
            </div>
        </div>
    </section>

    <section class="2xl:px-25 md:px-10 px-5 py-16 flex justify-center items-center bg-primary-100 w-full">
        <div class="md:w-164 w-full">
            <p class="text-gray-200 font-normal text-lg text-center">At D’Lush events, we believe that the beauty of an event lies in the details. What begins as a simple idea
                becomes an unforgettable experience when handled with thoughtfulness and creativity.</p>

            <p class="mt-4 text-gray-200 font-normal text-lg text-center">Over the years, we’ve had the privilege of designing events that reflect the personality, culture, and vision
                of our clients, transforming ordinary moments into extraordinary memories. From intimate gatherings to grand
                celebrations, our approach remains the same: combine professionalism with a personal touch to deliver events
                that are as seamless as they are stunning.</p>

            <p class="mt-4 text-gray-200 font-normal text-lg text-center">Based in the UK, we’re proud of our reputation for reliability, elegance, and genuine care. For us, event
                planning is not just about logistics — it’s about people, emotions, and creating a space where stories can
                be celebrated.</p>

            <p class="mt-4 text-gray-200 font-normal text-lg text-center">
                Every event is a new story. And we’d love to help you tell yours beautifully.</p>


            <div class="relative mt-12 flex w-full justify-center">
                <x-shadow-button href="">
                    Plan Your Event
                </x-shadow-button>
            </div>
        </div>
    </section>
@endsection
