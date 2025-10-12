<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- Fallback meta tags for pages without specific meta data --}}
    <title>{{ config('app.name', 'D Lush') }}</title>
    <meta name="description"
        content="{{ config('app.description', 'D Lush - Your premier destination for entertainment industry insights, artist spotlights, music reviews, and behind-the-scenes content from the 69 Entertainment brand.') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ request()->url() }}">

    {{-- Basic Open Graph --}}
    <meta property="og:title" content="{{ config('app.name', 'D Lush') }}">
    <meta property="og:description"
        content="{{ config('app.description', 'D Lush - Your premier destination for entertainment industry insights, artist spotlights, music reviews, and behind-the-scenes content from the 69 Entertainment brand.') }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'D Lush') }}">

    {{-- Basic Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'D Lush') }}">
    <meta name="twitter:description"
        content="{{ config('app.description', 'D Lush - Your premier destination for entertainment industry insights, artist spotlights, music reviews, and behind-the-scenes content from the 69 Entertainment brand.') }}">

    <link rel="stylesheet" href="/base.css" media="print" onload="this.media='all'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" as="style">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" media="print"
        onload="this.media='all'">
    @yield('styles')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    @include('layouts.navigation')
    <div class="relative">
        <!-- Page Content -->
        <main>
            @yield('contents')


        <div class="whatsapp-button flex gap-1 items-center rounded-full bg-[#4DC247] fixed right-10 bottom-20 z-1000 cursor-pointer transition-all duration-300 ease-in-out" 
             onclick="window.open('https://wa.me/447950550220', '_blank')">
            <img src="{{ asset("/images/whatsapp.svg")}}" alt="WhatsApp">
            <p class="whatsapp-text font-semibold text-base text-white opacity-0 w-0 overflow-hidden transition-all duration-300 ease-in-out">Chat with us</p>
        </div>
        </main>
    </div>

    @include('layouts.footer')

    @yield('scripts')

    <style>
        .whatsapp-button {
            width: 3rem;
            height: 3rem;
            padding: 0.75rem;
            justify-content: center;
        }
        
        .whatsapp-button:hover {
            width: auto;
            padding-right: 1rem;
        }
        
        .whatsapp-button:hover .whatsapp-text {
            opacity: 1 !important;
            width: auto !important;
            margin-left: 0.5rem;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            let isMenuOpen = false;

            // Open menu - swipe in from right
            menuToggle.addEventListener('click', function() {
                if (!isMenuOpen) {
                    mobileMenu.classList.remove('translate-x-full');
                    mobileMenu.classList.add('translate-x-0');
                    menuToggle.classList.add('hidden');
                    menuClose.classList.remove('hidden');
                    isMenuOpen = true;
                }
            });

            // Close menu - swipe out to right
            menuClose.addEventListener('click', function() {
                if (isMenuOpen) {
                    mobileMenu.classList.remove('translate-x-0');
                    mobileMenu.classList.add('translate-x-full');
                    menuClose.classList.add('hidden');
                    menuToggle.classList.remove('hidden');
                    isMenuOpen = false;
                }
            });

            // Close menu when clicking on nav links
            const navLinks = mobileMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (isMenuOpen) {
                        mobileMenu.classList.remove('translate-x-0');
                        mobileMenu.classList.add('translate-x-full');
                        menuClose.classList.add('hidden');
                        menuToggle.classList.remove('hidden');
                        isMenuOpen = false;
                    }
                });
            });

            // Image Carousel Functionality
            const carouselGroups = document.querySelectorAll('.carousel-group');
            let currentGroup = 0;
            const totalGroups = carouselGroups.length;
            let carouselInterval;

            function showGroup(groupIndex) {
                // Hide all groups
                carouselGroups.forEach((group, index) => {
                    if (index === groupIndex) {
                        group.classList.remove('opacity-0');
                        group.classList.add('opacity-100');
                    } else {
                        group.classList.remove('opacity-100');
                        group.classList.add('opacity-0');
                    }
                });
            }

            function nextGroup() {
                currentGroup = (currentGroup + 1) % totalGroups;
                showGroup(currentGroup);
            }

            function startCarousel() {
                // Show initial group
                showGroup(currentGroup);

                // Set up auto-advance every 5 seconds
                carouselInterval = setInterval(nextGroup, 5000);
            }

            function stopCarousel() {
                if (carouselInterval) {
                    clearInterval(carouselInterval);
                }
            }

            // Start carousel when page loads
            if (carouselGroups.length > 0) {
                startCarousel();
            }

            // Optional: Pause carousel on hover (uncomment if desired)
            // const carouselContainer = document.getElementById('imageCarousel');
            // if (carouselContainer) {
            //     carouselContainer.addEventListener('mouseenter', stopCarousel);
            //     carouselContainer.addEventListener('mouseleave', startCarousel);
            // }
        });
    </script>

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
</body>

</html>
