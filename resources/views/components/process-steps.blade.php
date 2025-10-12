@props([
    'title' => 'Our Process',
    'steps' => []
])

<section class="w-full flex flex-col items-center gap-16 justify-center py-16 2xl:px-25 md:px-10 px-5">
    <h3 class="text-center font-bold text-gray-100 text-4xl">{{ $title }}</h3>
    <div class="flex md:flex-row flex-col md:gap-12 gap-6 w-full">
        @foreach($steps as $step)
            <div class="{{ $step['background'] }} md:w-1/4 h-62 rounded-tl-[48px] rounded-br-[48px] py-12 px-6 flex flex-col justify-center">
                <h5 class="{{ $step['numberColor'] }} font-bold text-5xl">{{ $step['number'] }}</h5>
                <h5 class="{{ $step['titleColor'] }} font-bold text-lg mt-4">{{ $step['title'] }}</h5>
                <p class="{{ $step['textColor'] }} text-sm font-medium mt-4">{{ $step['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>
