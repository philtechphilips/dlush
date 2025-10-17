@extends('layouts.app')

@section('title', 'Frequently Asked Questions - D\'Lush Events')
@section('description', 'Find answers to common questions about D\'Lush Events services. Learn about our event planning, venue decoration, and rental services. Custom quotes from £250. Professional event services in the UK.')
@section('keywords', 'D\'Lush Events FAQ, event planning questions, wedding planning FAQ, event services questions, event planning UK, event coordination FAQ, venue decoration questions')

@section('og_title', 'Frequently Asked Questions - D\'Lush Events')
@section('og_description', 'Find answers to common questions about D\'Lush Events services. Learn about our event planning, venue decoration, and rental services. Custom quotes from £250.')
@section('og_type', 'website')

@section('twitter_title', 'Frequently Asked Questions - D\'Lush Events')
@section('twitter_description', 'Find answers to common questions about D\'Lush Events services. Learn about our event planning, venue decoration, and rental services.')

@section('contents')
    <x-hero-section background-image="/images/planning.webp" overlay-opacity="50" subtitle="FAQ"
        title="Frequently Asked Questions" description="Answers to some of the most common questions about our event services." width="md:w-[524px] w-full" />

          <x-faq-accordion :items="[
                    [
                        'question' => 'What types of events do you handle?',
                        'answer' =>
                            'We cover a wide range of events, from intimate gatherings to large celebrations. Our services include event planning & coordination, venue decoration, and rental services tailored to your needs.',
                    ],
                    [
                        'question' => 'How does your pricing work?',
                        'answer' =>
                            'We provide custom quotes based on your event requirements. Rates start from £250 and are adjusted depending on the scale and services required.',
                    ],
                    [
                        'question' => 'Do you offer packages or only custom quotes?',
                        'answer' =>
                            'Every event is unique, so we focus on custom quotes. This ensures that you only pay for what you truly need.',
                    ],
                    [
                        'question' => 'What rental items do you provide?',
                        'answer' =>
                            'We offer chairs, tables, linens, backdrops, dance floors, catering equipment, props, and more. If you need it, we can likely provide it.',
                    ],
                    [
                        'question' => 'Can you work with my chosen venue or vendors?',
                        'answer' =>
                            'Yes. We are flexible and can coordinate seamlessly with your preferred venues and vendors.',
                    ],
                    [
                        'question' => 'How far in advance should I book your services?',
                        'answer' =>
                            'We recommend booking as early as possible to secure your date, ideally 3 to 6 months in advance. However, we can sometimes accommodate shorter notice depending on availability.',
                    ],
                    [
                        'question' => 'Do you require a deposit?',
                        'answer' =>
                            'Yes. We work with brands in tech, lifestyle, food & beverage, fashion, fintech, communications, hospitality, and more. Our approach adapts to each industry’s needs and target market.',
                    ],
                    [
                        'question' => 'Do you provide influencer marketing?',
                        'answer' =>
                            'Yes, a deposit is required to confirm your booking, with the balance payable before the event. Full details will be provided in your quote.',
                    ],
                    [
                        'question' => 'Do you travel outside your city?',
                        'answer' =>
                            'Yes, we are happy to travel for events. Additional costs may apply depending on location.',
                    ],
                ]" />


@endsection


@section('scripts')
    {{-- Accordion and Search --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('.accordion-item');
            const searchInput = document.querySelector('input[name="q"]');
            const allFaqSections = document.querySelectorAll('.faq-section');

            // Accordion functionality
            accordionItems.forEach(item => {
                const content = item.querySelector('.accordion-content');
                const icon = item.querySelector('.accordion-icon');

                item.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');

                    // Close all accordion items
                    accordionItems.forEach(otherItem => {
                        const otherContent = otherItem.querySelector('.accordion-content');
                        const otherIcon = otherItem.querySelector('.accordion-icon');

                        otherItem.classList.remove('active');
                        otherContent.classList.add('hidden');
                        otherIcon.style.transform = 'rotate(0deg)';
                    });

                    // Toggle current item
                    if (!isActive) {
                        item.classList.add('active');
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(45deg)';
                    } else {
                        item.classList.remove('active');
                        icon.style.transform = 'rotate(0deg)';

                        setTimeout(() => {
                            content.classList.add('hidden');
                        }, 600);
                    }
                });
            });

            // Tab navigation functionality
            const tabLinks = document.querySelectorAll('.tab-link');
            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetTab = this.getAttribute('data-tab');

                    // Remove active class from all tabs
                    tabLinks.forEach(tab => tab.classList.remove('active'));
                    // Add active class to clicked tab
                    this.classList.add('active');

                    // Find corresponding FAQ section
                    const targetSection = document.querySelector(`[data-section="${targetTab}"]`);
                    if (targetSection) {
                        // Smooth scroll to the section
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Search functionality
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase().trim();

                    allFaqSections.forEach(section => {
                        const sectionTitle = section.querySelector('h5').textContent.toLowerCase();
                        const accordionItems = section.querySelectorAll('.accordion-item');
                        let hasVisibleItems = false;

                        accordionItems.forEach(item => {
                            const question = item.querySelector('p').textContent
                                .toLowerCase();
                            const answer = item.querySelector('.accordion-content p')
                                .textContent.toLowerCase();

                            const matchesSearch = question.includes(searchTerm) || answer
                                .includes(searchTerm) || sectionTitle.includes(searchTerm);

                            if (matchesSearch) {
                                item.style.display = 'block';
                                hasVisibleItems = true;
                            } else {
                                item.style.display = 'none';
                            }
                        });

                        // Show/hide entire section based on whether it has visible items
                        if (hasVisibleItems || searchTerm === '') {
                            section.style.display = 'block';
                        } else {
                            section.style.display = 'none';
                        }
                    });
                });
            }
        });
    </script>
@endsection
