<div class="2xl:px-25 md:px-10 px-5 py-4 flex items-center justify-between bg-white"
    style="box-shadow: 0px 2px 4px -1px #10192805 0px 5px 13px -5px #1019280D;">

    <img class="w-20" src="{{ asset('/images/dlush.svg') }}" alt="">

    <ul class="hidden md:flex gap-10 items-center">
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
            <div class="absolute top-12 -left-4 bg-gray-300 p-4 rounded-2xl w-70 z-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
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

    <img class="cursor-pointer w-6 block md:hidden" src="{{asset("/images/menu-right.svg")}}" alt="">
</div>
