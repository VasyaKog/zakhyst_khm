@extends('layouts.web')

@section('title', __('About Page Title'))

@section('content')
    <div class="bg-white dark:bg-zinc-900 transition-colors duration-300">
        <!-- Main About Section -->
        <div class="pt-[40px] lg:pt-[120px] pb-[60px] lg:pb-[100px] overflow-hidden">
            <!-- Page Title -->
            <div
                class="px-4 lg:px-8 xl:px-4 2xl:px-0 lg:max-w-[900px] xl:max-w-[1100px] 2xl:max-w-[1200px] lg:mx-auto mb-[40px] lg:mb-[80px]">
                <h1
                    class="text-[2.5rem] lg:text-[9.875rem] font-extrabold font-montserrat text-black dark:text-white uppercase leading-[0.92] transition-colors">
                    {{ __('About Us') }}
                </h1>
            </div>

            <!-- Description -->
            <div
                class="px-4 lg:px-8 xl:px-4 2xl:px-0 lg:max-w-[900px] xl:max-w-[1100px] 2xl:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[120px]">
                <div
                    class="max-w-full lg:max-w-[869px] text-[1rem] lg:text-[1.25rem] font-normal font-montserrat text-black dark:text-gray-200 text-left lg:text-justify leading-[1.43] space-y-2 transition-colors">
                    <p>{{ __('About Hello') }}</p>
                    <p>{{ __('About Description') }}</p>
                </div>
            </div>

            <!-- Goal Section -->
            <div
                class="px-4 lg:px-8 xl:px-4 2xl:px-0 lg:max-w-[900px] xl:max-w-[1100px] 2xl:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[100px]">
                <h2
                    class="text-[1.5rem] lg:text-[3rem] font-extrabold font-montserrat text-black dark:text-white leading-[1.1] lg:leading-[0.93] mb-[30px] lg:mb-[60px] max-w-[870px] transition-colors">
                    {{ __('Goal Title') }}
                </h2>

                <!-- Goal Cards -->
                <div class="grid grid-cols-2 lg:grid-cols-3 3xl:grid-cols-5 gap-4 lg:gap-5 3xl:gap-[34px]">
                    <x-goal-card :title="__('Goal Adaptation')" icon="adaptation-icon.svg" />
                    <x-goal-card :title="__('Goal Prevention')" icon="profilactic-icon.svg" />
                    <x-goal-card :title="__('Goal Information')" icon="information-icon.svg" />
                    <x-goal-card :title="__('Goal Consultation')" icon="consult-icon.svg" />
                    <x-goal-card :title="__('Goal Representation')" icon="interests-icon.svg" />
                </div>
            </div>

            <!-- Task Section -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[100px]">
                <h2
                    class="text-[1.5rem] lg:text-[3rem] font-extrabold font-montserrat text-black dark:text-white leading-[1.1] lg:leading-[0.92] mb-[20px] lg:mb-[30px] transition-colors">
                    {{ __('Tasks Title') }}
                </h2>
                <div
                    class="max-w-[873px] text-[1rem] lg:text-[1.25rem] font-normal font-montserrat text-black dark:text-gray-200 leading-[1.43] transition-colors">
                    <p>{{ __('Task Description') }}</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="px-4 lg:px-0 lg:max-w-[1200px] lg:mx-auto mb-[60px] lg:mb-[100px]">
                <div class="w-full border-t border-black dark:border-zinc-700 transition-colors"></div>
            </div>

            <!-- Timeline Section -->
            <div class="lg:flex lg:justify-center mb-[80px] lg:mb-[150px] px-4 lg:px-0">
                <div class="relative w-full lg:w-[1170px]">
                    <!-- Connecting Line -->
                    <div
                        class="absolute left-[19px] lg:left-[20px] top-[20px] lg:top-[71px] bottom-[50px] lg:bottom-[100px] w-[2px] bg-[#3971E2] z-0">
                    </div>

                    <!-- Timeline Events -->
                    <div class="relative z-10">
                        @forelse($timelineEvents as $event)
                            <x-timeline-event :date="$event->date_display" :year="$event->year"
                                :description="$event->description" />
                        @empty
                            <p class="text-gray-500 text-center">{{ __('Timeline No Events') }}</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-active');
                        } else {
                            entry.target.classList.remove('is-active');
                        }
                    });
                }, {
                    threshold: 0.2, // Trigger when 20% visible
                    rootMargin: '-50px 0px -100px 0px' // Adjust scroll trigger area
                });

                document.querySelectorAll('.timeline-event').forEach(el => observer.observe(el));
            });
        </script>
@endsection

    @section('footer')
        @include('partials.footer-extended')
    @endsection