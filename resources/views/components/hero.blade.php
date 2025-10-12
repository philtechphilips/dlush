@props([
    'heading' => '',
])

<section class="pb-16 pt-30 2xl:px-25 md:px-10 px-5">

    <div
        class="flex flex-col items-center justify-center w-full text-center">
        <h1 class="font-bold md:text-5xl text-4xl text-gray-100">
            {{ $heading }}
        </h1>
    </div>
</section>
