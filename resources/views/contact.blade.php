@extends('layouts.app')

@section('title', 'Contact D\'Lush Events - Let\'s Bring Your Event to Life')
@section('description', 'Contact D\'Lush Events for professional event planning services. Located in Coventry, UK. Email: folake02@yahoo.com | Phone: 024 7501 8311 | Address: 65 Armorial Road, CV3 6GH')
@section('keywords', 'contact D\'Lush Events, event planning contact, wedding planning contact, event services Coventry, event planners contact, event planning consultation, book event services')

@section('og_title', 'Contact D\'Lush Events - Let\'s Bring Your Event to Life')
@section('og_description', 'Contact D\'Lush Events for professional event planning services. Located in Coventry, UK. Email: folake02@yahoo.com | Phone: 024 7501 8311')
@section('og_type', 'website')

@section('twitter_title', 'Contact D\'Lush Events - Let\'s Bring Your Event to Life')
@section('twitter_description', 'Contact D\'Lush Events for professional event planning services. Located in Coventry, UK. Email: folake02@yahoo.com | Phone: 024 7501 8311')

@section('contents')
    <section class="w-full bg-primary-100 pt-40 pb-16 2xl:px-25 md:px-10 px-5">
        <div class="flex md:flex-row flex-col md:gap-30 2xl:gap-80 gap-12 items-start">
            <div class="md:w-1/2 w-full">
                <div class="flex items-end gap-2">
                    <div class="w-13 h-0.5 bg-primary"></div>
                    <p class="!font-medium text-gray-200 text-sm">Contact</p>
                </div>

                <h2 class="font-bold md:text-5xl text-4xl mt-4">Let’s Bring Your Event to Life</h2>

                <p class="text-lg text-gray-200 mt-4">We’d love to hear from you. Whether you’re ready to book or just
                    exploring options, reach out and let’s start planning.</p>

                <div class="mt-12">
                    <div class="flex items-start gap-2">
                        <img src="{{ asset('images/email.svg') }}" class="w-12 h-12" alt="">
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-100 font-semibold">Email Address</p>
                            <p class="text-gray-200">folake02@yahoo.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-2 mt-6">
                        <img src="{{ asset('images/phone.svg') }}" class="w-12 h-12" alt="">
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-100 font-semibold">Phone Number</p>
                            <p class="text-gray-200">024 7501 8311</p>
                        </div>
                    </div>


                    <div class="flex items-start gap-2 mt-6">
                        <img src="{{ asset('images/location.svg') }}" class="w-12 h-12" alt="">
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-100 font-semibold">Office</p>
                            <p class="text-gray-200">65 Armorial Road<br>CV3 6GH⁠, Coventry</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 w-full bg-[#FDFBF8] md:rounded-tl-[100px] md:rounded-br-[100px] rounded-tl-[50px] rounded-br-[50px] py-16 md:px-10 px-4">
                <h4 class="font-bold text-3xl">Contact Form</h4>

                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="mt-6 flex flex-col gap-4">
                    @csrf
                    <input type="text" name="full_name" required
                        class="w-full bg-[#E9DDE2] rounded-full py-4 px-6 text-gray-200 outline-none border-none"
                        placeholder="Full Name">
                    <input type="email" name="email" required
                        class="w-full bg-[#E9DDE2] rounded-full py-4 px-6 text-gray-200 outline-none border-none"
                        placeholder="Email Address">
                    <input type="tel" name="phone" required
                        class="w-full bg-[#E9DDE2] rounded-full py-4 px-6 text-gray-200 outline-none border-none"
                        placeholder="Phone Number">
                    <input type="date" name="event_date"
                        class="w-full bg-[#E9DDE2] rounded-full py-4 px-6 text-gray-200 outline-none border-none"
                        placeholder="Event Date">
                    <textarea name="message" placeholder="Message / Event Details" required
                        class="w-full bg-[#E9DDE2] rounded-3xl py-4 px-6 text-gray-200 outline-none border-none"
                        cols="30" rows="10"></textarea>

                    <!-- reCAPTCHA v3 (invisible) -->
                    @if(config('services.recaptcha.site_key'))
                    <div class="hidden">
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                    </div>
                    @else
                    <div class="mt-4 p-4 bg-yellow-100 border border-yellow-400 rounded-lg">
                        <p class="text-yellow-800 text-sm text-center">
                            reCAPTCHA is not configured. Please add RECAPTCHA_SITE_KEY to your .env file.
                        </p>
                    </div>
                    @endif

                    <!-- Success/Error Messages -->
                    <div id="formMessages" class="hidden mt-4 p-4 rounded-lg">
                        <p id="messageText" class="text-center font-medium"></p>
                    </div>

                    <div class="relative mt-6">
                        <button type="submit" id="submitBtn" class="w-full bg-primary text-white py-4 px-8 rounded-full font-semibold hover:bg-primary-600 transition-colors duration-300">
                            <span id="submitText">Send Message</span>
                            <span id="loadingSpinner" class="hidden">Sending...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const formMessages = document.getElementById('formMessages');
    const messageText = document.getElementById('messageText');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Show loading state
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        loadingSpinner.classList.remove('hidden');
        formMessages.classList.add('hidden');

        // Execute reCAPTCHA v3
        if (typeof grecaptcha !== 'undefined' && grecaptcha.execute) {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config("services.recaptcha.site_key") }}', {action: 'contact_form'}).then(function(token) {
                    console.log('reCAPTCHA token generated:', token);
                    
                    // Set the token in the hidden input
                    document.getElementById('g-recaptcha-response').value = token;
                    
                    // Get form data and submit
                    const formData = new FormData(form);
                    formData.append('g-recaptcha-response', token);
                    
                    submitForm(formData);
                }).catch(function(error) {
                    console.error('reCAPTCHA error:', error);
                    // Show error message
                    formMessages.classList.remove('hidden');
                    formMessages.className = 'mt-4 p-4 rounded-lg bg-red-100 border border-red-400';
                    messageText.textContent = 'reCAPTCHA failed to load. Please refresh and try again.';
                    messageText.className = 'text-center font-medium text-red-800';
                    
                    // Reset button state
                    submitBtn.disabled = false;
                    submitText.classList.remove('hidden');
                    loadingSpinner.classList.add('hidden');
                });
            });
        } else {
            console.log('reCAPTCHA not available, using fallback');
            // Fallback if reCAPTCHA is not available
            const formData = new FormData(form);
            submitForm(formData);
        }
    });

    function submitForm(formData) {

        // Send AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                formMessages.classList.remove('hidden');
                formMessages.className = 'mt-4 p-4 rounded-lg bg-green-100 border border-green-400';
                messageText.textContent = data.message;
                messageText.className = 'text-center font-medium text-green-800';

                // Reset form
                form.reset();
                // Clear reCAPTCHA token
                document.getElementById('g-recaptcha-response').value = '';
            } else {
                // Show error message
                formMessages.classList.remove('hidden');
                formMessages.className = 'mt-4 p-4 rounded-lg bg-red-100 border border-red-400';
                messageText.textContent = data.message || 'Something went wrong. Please try again.';
                messageText.className = 'text-center font-medium text-red-800';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Show error message
            formMessages.classList.remove('hidden');
            formMessages.className = 'mt-4 p-4 rounded-lg bg-red-100 border border-red-400';
            messageText.textContent = 'Something went wrong. Please try again.';
            messageText.className = 'text-center font-medium text-red-800';
        })
        .finally(() => {
            // Reset button state
            submitBtn.disabled = false;
            submitText.classList.remove('hidden');
            loadingSpinner.classList.add('hidden');
        });
    }
});
</script>
@endsection
