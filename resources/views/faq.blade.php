@extends('layouts.app')


@section('contents')
    <x-hero-section background-image="/images/planning.webp" overlay-opacity="50" subtitle="FAQ"
        title="Frequently Asked Questions" description="Answers to some of the most common questions about our event services." width="md:w-[524px] w-full" />

          <x-faq-accordion :items="[
                    [
                        'question' => 'How can 69 Agency help our brand grow?',
                        'answer' =>
                            ' We create tailored PR and marketing strategies that help your brand build visibility, connect with your target audience, and drive measurable results. From launching products to sustaining long-term campaigns, we position your brand where it matters.',
                    ],
                    [
                        'question' => 'Do you work with start-ups or only established companies?',
                        'answer' =>
                            'We work with both. For start-ups, we focus on brand positioning, storytelling, and go-to-market strategies. For established companies, we amplify presence, refresh communication, and create campaigns that strengthen market relevance.',
                    ],
                    [
                        'question' => 'Do you offer digital marketing services?',
                        'answer' =>
                            'Yes. Our services include social media strategy, paid ads (LinkedIn, Instagram, X, Google), content creation, community management, and influencer collaborations tailored to your industry.',
                    ],
                    [
                        'question' => 'Can you help us with brand identity and storytelling?',
                        'answer' =>
                            'Absolutely. We can refine or create your brand’s voice, messaging, visual identity, and narrative to ensure consistency across campaigns and platforms.',
                    ],
                    [
                        'question' => 'Do you handle event PR and launches?',
                        'answer' =>
                            'Yes. We manage publicity and promotion for product launches, corporate events, activations, and brand showcases to maximise exposure and audience engagement.',
                    ],
                    [
                        'question' => 'What makes 69 Agency different from other agencies?',
                        'answer' =>
                            'We combine creativity with strategy. Beyond just running ads or PR campaigns, we build cultural relevance for brands, making them relatable and memorable to their target audience.',
                    ],
                    [
                        'question' => 'Do you work only with music brands or lifestyle/fashion/tech brands too?',
                        'answer' =>
                            'Yes. We work with brands in tech, lifestyle, food & beverage, fashion, fintech, communications, hospitality, and more. Our approach adapts to each industry’s needs and target market.',
                    ],
                    [
                        'question' => 'Do you provide influencer marketing?',
                        'answer' =>
                            'Yes. We connect your brand with the right influencers and thought leaders, ensuring authentic collaborations that drive awareness and conversions.',
                    ],
                    [
                        'question' => 'How do you measure ROI for brand partnerships or campaigns?',
                        'answer' =>
                            'We track KPIs such as reach, engagement, conversions, brand sentiment, press coverage, and ROI depending on the campaign objectives.',
                    ],
                    [
                        'question' => 'Do you help with long-term brand positioning or only one-off campaigns?',
                        'answer' =>
                            'Yes. We support one-off campaigns like product launches and also offer ongoing marketing and PR retainers for sustained growth.',
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
