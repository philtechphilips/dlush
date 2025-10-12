@props(['variant' => 'desktop'])

@if($variant === 'desktop')
    <!-- Desktop Testimonial -->
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
@else
    <!-- Mobile Testimonial -->
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
@endif
