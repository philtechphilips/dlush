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
                <x-shadow-button href="">
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
                <div class="testimonial-container relative overflow-hidden">
                    <h5 id="testimonial-text"
                        class="font-bold text-lg text-primary mt-6 transition-all duration-1000 ease-in-out">We used their
                        planning, decoration, and rentals for our
                        anniversary, and I honestly don't know how we would have done it without them. Everything flowed
                        seamlessly.</h5>

                    <div class="flex items-end justify-between">
                        <div class="testimonial-author">
                            <p id="testimonial-name"
                                class="text-base text-gray-100 font-semibold mt-6 transition-all duration-500 ease-in-out delay-100">
                                Chinwe O</p>
                            <p id="testimonial-location"
                                class="text-sm text-gray-200 font-medium mt-1 transition-all duration-500 ease-in-out delay-200">
                                Milton Keynes</p>
                        </div>

                        <div class="flex gap-2">
                            <button
                                class="testimonial-dot w-4 h-4 bg-primary rounded-full transition-all duration-300 ease-in-out"
                                data-testimonial="0"></button>
                            <button
                                class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                                data-testimonial="1"></button>
                            <button
                                class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                                data-testimonial="2"></button>
                            <button
                                class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                                data-testimonial="3"></button>
                            <button
                                class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                                data-testimonial="4"></button>
                        </div>
                    </div>
                </div>
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
                    <x-shadow-button href="">
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
            <div class="testimonial-container relative overflow-hidden">
                <h5 id="mobile-testimonial-text"
                    class="font-bold text-lg text-primary mt-6 transition-all duration-1000 ease-in-out">We used their
                    planning, decoration, and rentals for our
                    anniversary, and I honestly don't know how we would have done it without them. Everything flowed
                    seamlessly.</h5>

                <div class="flex items-end justify-between">
                    <div class="testimonial-author">
                        <p id="mobile-testimonial-name"
                            class="text-base text-gray-100 font-semibold mt-6 transition-all duration-500 ease-in-out delay-100">
                            Chinwe O</p>
                        <p id="mobile-testimonial-location"
                            class="text-sm text-gray-200 font-medium mt-1 transition-all duration-500 ease-in-out delay-200">
                            Milton Keynes</p>
                    </div>

                    <div class="flex gap-2">
                        <button
                            class="mobile-testimonial-dot w-2 h-2 bg-primary rounded-full transition-all duration-300 ease-in-out"
                            data-testimonial="0"></button>
                        <button
                            class="mobile-testimonial-dot w-2 h-2 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                            data-testimonial="1"></button>
                        <button
                            class="mobile-testimonial-dot w-2 h-2 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                            data-testimonial="2"></button>
                        <button
                            class="mobile-testimonial-dot w-2 h-2 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                            data-testimonial="3"></button>
                        <button
                            class="mobile-testimonial-dot w-2 h-2 bg-primary-100 rounded-full transition-all duration-300 ease-in-out"
                            data-testimonial="4"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')
    <script>
        // Testimonial data
        const testimonials = [{
                text: "We used their planning, decoration, and rentals for our anniversary, and I honestly don’t know how we would have done it without them. Everything flowed seamlessly.",
                name: "Chinwe O.",
                location: "Milton Keynes"
            },
            {
                text: "From the first meeting, I felt completely at ease. Every detail was handled, and I was able to simply enjoy my event without stress. Professional, friendly, and reliable.",
                name: "Sarah L.",
                location: "London"
            },
            {
                text: "The transformation was breathtaking. I walked into the hall and couldn’t believe it was the same space. The décor was elegant yet warm — exactly what I imagined.",
                name: "James & Aisha",
                location: "Birmingham"
            },
            {
                text: "We hired tables, chairs, and décor items, and everything arrived on time in excellent condition. The setup team was efficient, and it really pulled the whole event together.",
                name: "Mark T.",
                location: "Manchester"
            },
            {
                text: "What impressed me most was the personal touch. They really listened and delivered something that reflected us. It wasn’t just an event; it was a memory we’ll cherish.",
                name: "Emily R",
                location: "Kent"
            }
        ];

        let currentTestimonial = 0;

        // Get DOM elements (both desktop and mobile)
        const testimonialText = document.getElementById('testimonial-text');
        const testimonialName = document.getElementById('testimonial-name');
        const testimonialLocation = document.getElementById('testimonial-location');
        const dots = document.querySelectorAll('.testimonial-dot');

        // Mobile elements
        const mobileTestimonialText = document.getElementById('mobile-testimonial-text');
        const mobileTestimonialName = document.getElementById('mobile-testimonial-name');
        const mobileTestimonialLocation = document.getElementById('mobile-testimonial-location');
        const mobileDots = document.querySelectorAll('.mobile-testimonial-dot');

        // Function to update testimonial
        function updateTestimonial(index) {
            // Update content first (before any animation) - Desktop
            if (testimonialText) {
                testimonialText.textContent = testimonials[index].text;
                testimonialName.textContent = testimonials[index].name;
                testimonialLocation.textContent = testimonials[index].location;
            }

            // Update content first (before any animation) - Mobile
            if (mobileTestimonialText) {
                mobileTestimonialText.textContent = testimonials[index].text;
                mobileTestimonialName.textContent = testimonials[index].name;
                mobileTestimonialLocation.textContent = testimonials[index].location;
            }

            // Update dots - Desktop
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-primary-100');
                    dot.classList.add('bg-primary');
                } else {
                    dot.classList.remove('bg-primary');
                    dot.classList.add('bg-primary-100');
                }
            });

            // Update dots - Mobile
            mobileDots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-primary-100');
                    dot.classList.add('bg-primary');
                } else {
                    dot.classList.remove('bg-primary');
                    dot.classList.add('bg-primary-100');
                }
            });

            // Update desktop testimonials
            if (testimonialText) {
                // Remove transitions temporarily
                testimonialText.style.transition = 'none';
                testimonialName.style.transition = 'none';
                testimonialLocation.style.transition = 'none';

                // Set new text to start from right (off-screen) while current is still visible
                testimonialText.style.transform = 'translateX(100vw)';
                testimonialName.style.transform = 'translateY(50px)';
                testimonialName.style.opacity = '0';
                testimonialLocation.style.transform = 'translateY(50px)';
                testimonialLocation.style.opacity = '0';

                // Force a reflow
                testimonialText.offsetHeight;

                // Add transitions back
                testimonialText.style.transition = 'transform 0.5s ease-in-out';
                testimonialName.style.transition = 'transform 0.5s ease-in-out, opacity 0.5s ease-in-out';
                testimonialLocation.style.transition = 'transform 0.5s ease-in-out, opacity 0.5s ease-in-out';

                // Simultaneously: current text swipes out left, new text swipes in from right
                setTimeout(() => {
                    testimonialText.style.transform = 'translateX(-100vw)';
                }, 10);

                setTimeout(() => {
                    testimonialText.style.transform = 'translateX(0)';
                }, 20);

                setTimeout(() => {
                    testimonialName.style.transform = 'translateY(0)';
                    testimonialName.style.opacity = '1';
                }, 200);

                setTimeout(() => {
                    testimonialLocation.style.transform = 'translateY(0)';
                    testimonialLocation.style.opacity = '1';
                }, 300);
            }

            // Update mobile testimonials
            if (mobileTestimonialText) {
                // Remove transitions temporarily
                mobileTestimonialText.style.transition = 'none';
                mobileTestimonialName.style.transition = 'none';
                mobileTestimonialLocation.style.transition = 'none';

                // Set new text to start from right (off-screen) while current is still visible
                mobileTestimonialText.style.transform = 'translateX(100vw)';
                mobileTestimonialName.style.transform = 'translateY(50px)';
                mobileTestimonialName.style.opacity = '0';
                mobileTestimonialLocation.style.transform = 'translateY(50px)';
                mobileTestimonialLocation.style.opacity = '0';

                // Force a reflow
                mobileTestimonialText.offsetHeight;

                // Add transitions back
                mobileTestimonialText.style.transition = 'transform 0.5s ease-in-out';
                mobileTestimonialName.style.transition = 'transform 0.5s ease-in-out, opacity 0.5s ease-in-out';
                mobileTestimonialLocation.style.transition = 'transform 0.5s ease-in-out, opacity 0.5s ease-in-out';

                // Simultaneously: current text swipes out left, new text swipes in from right
                setTimeout(() => {
                    mobileTestimonialText.style.transform = 'translateX(-100vw)';
                }, 10);

                setTimeout(() => {
                    mobileTestimonialText.style.transform = 'translateX(0)';
                }, 20);

                setTimeout(() => {
                    mobileTestimonialName.style.transform = 'translateY(0)';
                    mobileTestimonialName.style.opacity = '1';
                }, 200);

                setTimeout(() => {
                    mobileTestimonialLocation.style.transform = 'translateY(0)';
                    mobileTestimonialLocation.style.opacity = '1';
                }, 300);
            }
        }

        // Add click event listeners to dots - Desktop
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentTestimonial = index;
                updateTestimonial(currentTestimonial);
            });
        });

        // Add click event listeners to dots - Mobile
        mobileDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentTestimonial = index;
                updateTestimonial(currentTestimonial);
            });
        });

        // Auto-rotate testimonials every 5 seconds
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            updateTestimonial(currentTestimonial);
        }, 5000);

        // Initialize with first testimonial
        updateTestimonial(0);
    </script>
@endsection
