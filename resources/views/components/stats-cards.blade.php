@props(['variant' => 'desktop'])

@if($variant === 'desktop')
    <div class="hidden md:flex flex-col gap-6 absolute md:bottom-20 md:-right-20 z-100">
        <div class="bg-primary-100 w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
            <h5 class="text-primary font-bold text-5xl">20<span class="text-4xl">+</span></h5>
            <p class="text-primary text-sm font-medium mt-4">Venues Styled Across</p>
        </div>
        <div class="bg-primary w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
            <h5 class="text-primary-100 font-bold text-5xl">50<span class="text-4xl">+</span></h5>
            <p class="text-primary-100 text-sm font-medium mt-4">Events Successfully Coordinated</p>
        </div>
    </div>
@else
    <div class="md:hidden flex flex-col gap-6 absolute bottom-5 left-5 z-100">
        <div class="bg-primary-100 w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
            <h5 class="text-primary font-bold text-5xl">20<span class="text-4xl">+</span></h5>
            <p class="text-primary text-sm font-medium mt-4">Venues Styled Across</p>
        </div>
        <div class="bg-primary w-55 h-46 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
            <h5 class="text-primary-100 font-bold text-5xl">50<span class="text-4xl">+</span></h5>
            <p class="text-primary-100 text-sm font-medium mt-4">Events Successfully Coordinated</p>
        </div>
    </div>
@endif
