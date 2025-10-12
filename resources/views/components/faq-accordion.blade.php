@props([
    'items' => [],
])

<div class="w-full pt-16 pb-25 faq-section bg-primary-100 flex items-center justify-center">
    <ul class="flex flex-col gap-6 md:w-[960px] w-full" style="list-style: none; padding: 0; margin: 0;">
        @foreach($items as $index => $item)
            <li class="cursor-pointer px-7 accordion-item" data-accordion="{{ $index + 1 }}">
                <div class="w-full flex items-center justify-between">
                    <h6 class="text-gray-200 font-semibold">{{ $index + 1 }}. {{ $item['question'] }}</h6>
                    <i class="ri-add-fill text-gray-200 text-3xl accordion-icon"></i>
                </div>
                <div class="accordion-content hidden">
                    <p class="text-gray-200 mt-4 md:pr-24 pr-10">{{ $item['answer'] }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
