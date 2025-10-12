<footer class="2xl:px-25 md:px-10 px-5 w-full pt-16 pb-12 flex flex-col gap-16 items-center">
    <img class="w-25" src="{{ asset('/images/dlush.svg') }}" alt="">

    <ul class="flex w-full flex-wrap md:gap-10 gap-6 items-center justify-center px-5">
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
            <x-nav-link href="">
                FAQs
            </x-nav-link>
        </li>

        <li>
            <x-nav-link href="">
                Contact
            </x-nav-link>
        </li>
    </ul>

    <div class="flex gap-4">
        <img src="{{asset("/images/facebook.svg")}}" alt="">
        <img src="{{asset("/images/instagram.svg")}}" alt="">
        <img src="{{asset("/images/pinterest.svg")}}" alt="">
    </div>

    <div class="w-full flex md:flex-row flex-col items-center gap-2 md:justify-between">
        <p class="text-gray-200 text-sm font-normal text-center">Copyright © {{ date('Y') }} D'lush Events. All Rights Reserved</p>

      <div class="w-full md:w-fit flex justify-center">
          <a href="" class="text-gray-200 text-sm font-normal text-center w-fit">Terms & Condition</a>
      </div>
    </div>
</footer>
