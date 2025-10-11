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
                    <h5 id="testimonial-text" class="font-bold text-lg text-primary mt-6 transition-all duration-1000 ease-in-out">We used their planning, decoration, and rentals for our
                        anniversary, and I honestly don't know how we would have done it without them. Everything flowed
                        seamlessly.</h5>

                    <div class="flex items-end justify-between">
                        <div class="testimonial-author">
                            <p id="testimonial-name" class="text-base text-gray-100 font-semibold mt-6 transition-all duration-500 ease-in-out delay-100">Chinwe O</p>
                            <p id="testimonial-location" class="text-sm text-gray-200 font-medium mt-1 transition-all duration-500 ease-in-out delay-200">Milton Keynes</p>
                        </div>

                        <div class="flex gap-2">
                            <button class="testimonial-dot w-4 h-4 bg-primary rounded-full transition-all duration-300 ease-in-out" data-testimonial="0"></button>
                            <button class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out" data-testimonial="1"></button>
                            <button class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out" data-testimonial="2"></button>
                            <button class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out" data-testimonial="3"></button>
                            <button class="testimonial-dot w-4 h-4 bg-primary-100 rounded-full transition-all duration-300 ease-in-out" data-testimonial="4"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Testimonial data
        const testimonials = [
            {
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

        // Get DOM elements
        const testimonialText = document.getElementById('testimonial-text');
        const testimonialName = document.getElementById('testimonial-name');
        const testimonialLocation = document.getElementById('testimonial-location');
        const dots = document.querySelectorAll('.testimonial-dot');

        // Function to update testimonial
        function updateTestimonial(index) {
            // Update content first (before any animation)
            testimonialText.textContent = testimonials[index].text;
            testimonialName.textContent = testimonials[index].name;
            testimonialLocation.textContent = testimonials[index].location;

            // Update dots
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-primary-100');
                    dot.classList.add('bg-primary');
                } else {
                    dot.classList.remove('bg-primary');
                    dot.classList.add('bg-primary-100');
                }
            });

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

        // Add click event listeners to dots
        dots.forEach((dot, index) => {
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
