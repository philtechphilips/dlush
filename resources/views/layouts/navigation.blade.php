<div id="main-nav"
    class="2xl:px-25 md:px-10 px-5 py-4 flex items-center justify-between bg-white relative top-0 left-0 right-0 z-200 shadow transition-all duration-300"
    style="box-shadow: 0px 2px 4px -1px #10192805, 0px 5px 13px -5px #1019280D;">
    <a href="/">
        <img class="w-20" src="{{ asset('/images/dlush.svg') }}" alt="">
    </a>
    <ul class="hidden md:flex gap-10 items-center">
        <li>
            <x-nav-link href="/" :active="true">
                Home
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="/about">
                About
            </x-nav-link>
        </li>
        <li class="relative group">
            <x-nav-link href="">
                Services
            </x-nav-link>
            <div
                class="absolute top-12 -left-4 bg-gray-300 p-4 rounded-2xl w-70 z-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                <ul class="flex flex-col gap-4 w-full font-medium">
                    <li>
                        <a href="" class="text-gray-200 hover:text-primary font-medium text-sm">Event Planning &
                            Coordination <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                    <li>
                        <a href="" class="text-gray-200 hover:text-primary font-medium text-sm">Venue Decoration
                            <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                    <li>
                        <a href="" class="text-gray-200 hover:text-primary font-medium text-sm">Rentals Services
                            <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <x-nav-link href="">
                FAQs
            </x-nav-link>
        </li>
    </ul>

    <div class="hidden md:block relative">
        <x-shadow-button href="">
            Contact Us
        </x-shadow-button>
    </div>

    <img id="menu-toggle" class="cursor-pointer w-6 block md:hidden" src="{{ asset('/images/menu-right.svg') }}"
        alt="">
    <img id="menu-close" class="cursor-pointer w-6 block md:hidden hidden" src="{{ asset('/images/close.svg') }}"
        alt="">
</div>

<div id="mobile-menu"
    class="w-full bg-white fixed top-[79px] h-screen z-100 py-12 px-20 md:hidden flex flex-col items-center transform translate-x-full transition-transform duration-300 ease-in-out">
    <ul class="flex flex-col gap-10 items-center">
        <li>
            <x-nav-link href="" :active="true">
                Home
            </x-nav-link>
        </li>
        <li>
            <x-nav-link href="">
                About
            </x-nav-link>
        </li>
        <li class="relative group">
            <x-nav-link href="">
                Services
            </x-nav-link>
        </li>
        <li>
            <div class="-mt-6">
                <ul class="flex flex-col items-center gap-4 w-full font-medium">
                    <li>
                        <a href="" class="text-gray-200 hover:text-primary font-medium text-sm">Event Planning &
                            Coordination <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                    <li>
                        <a href="" class="text-gray-200 hover:text-primary font-medium text-sm">Venue Decoration
                            <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                    <li>
                        <a href="" class="text-gray-200 hover:text-primary font-medium text-sm">Rentals Services
                            <i class="ri-arrow-right-up-line"></i></a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <x-nav-link href="">
                FAQs
            </x-nav-link>
        </li>
    </ul>

    <div class="mt-16">
        <x-shadow-button href="">
            Contact Us
        </x-shadow-button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const mainNav = document.getElementById('main-nav');
        let isMenuOpen = false;

        // Open menu - swipe in from right
        menuToggle.addEventListener('click', function() {
            if (!isMenuOpen) {
                // Make nav fixed when mobile menu opens
                mainNav.classList.remove('relative');
                mainNav.classList.add('fixed');

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

                // Make nav relative again when mobile menu closes
                setTimeout(() => {
                    mainNav.classList.remove('fixed');
                    mainNav.classList.add('relative');
                }, 300); // Wait for animation to complete

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

                    // Make nav relative again when mobile menu closes
                    setTimeout(() => {
                        mainNav.classList.remove('fixed');
                        mainNav.classList.add('relative');
                    }, 300); // Wait for animation to complete

                    isMenuOpen = false;
                }
            });
        });
    });
</script>
